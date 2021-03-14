<?php
require_once("bdd.php"); 
class User
{

    private $id_utilisateur;
    public $email;
    public $password;
    public $db;

    public function __construct($db)
    {
        $this->db = $db;  
    }
        
    // -------------------------------------------- INSCRIPTION --------------------------------------------------------- // 
    public function register ($email, $nom, $prenom, $password, $confirmPW){

        $error_log = null; 
        
        $email = htmlspecialchars(trim($email)); 
        $nom = htmlspecialchars(trim($nom)); 
        $prenom = htmlspecialchars(trim($prenom));
        $password = htmlspecialchars(trim($password)); 
        $confirmPW = htmlspecialchars(trim($confirmPW)); 
        
        
        // IF LES CHAMPS LOGIN ET PASSWORD ET CONFIRMPW ET EMAIL NE SONT PAS VIDES 
        if (!empty($email) && !empty ($nom) && !empty($prenom) &&!empty($password) &&!empty($confirmPW)) {
        $emailLength = strlen($email);
        $nomLength = strlen($nom);
        $prenomLength = strlen($prenom);
        $passLength = strlen($password);
        $confirmLength = strlen($confirmPW); 
        
            echo"no";
        
        if (($emailLength >=5 ) && ($nomLength >=5) && ($prenomLength >=5) && ($passLength >=5) &&($confirmLength)) {
            $connexion = $this->db->connectDb();
            $checkLength = $connexion->prepare("SELECT email FROM utilisateurs WHERE email=:email"); 
            $checkLength->bindValue(":email", $email, PDO::PARAM_STR); 
            $checkLength->execute();
            $fetch = $checkLength->fetch(); 
            var_dump($fetch); 
                if (!$fetch) {
                    if ($password == $confirmPW) {
                        $cryptedpass = password_hash($password, PASSWORD_ARGON2I); 
                        $insert = $connexion->prepare("INSERT INTO utilisateurs (email, password, nom, prenom)  VALUES (:email, :cryptedpass, :nom, :prenom)"); 
                        $insert->bindValue (":email", $email, PDO::PARAM_STR); 
                        $insert->bindValue (":cryptedpass", $cryptedpass, PDO::PARAM_STR); 
                        $insert->bindValue (":nom", $nom, PDO::PARAM_STR); 
                        $insert->bindValue (":prenom", $prenom, PDO::PARAM_STR); 
                        $insert->execute();

                        header('location:connexion.php'); 
                    }
                else {
                    $error_log = "les mots de passes correspondent pas t'es sah ? "; 
                }
                }
            else {
                $error_log = "ton blaz est déjà pris"; 
            }
        }
        else {
            $error_log = "insère 5 caractères minimum, zin.";
        }
        }
        else {
        $error_log= "remplis les champs, oh truffe!"; 
        }
        echo $error_log;
        }  
    // -------------------------------------------- CONNEXION ------------------------------------------------------ //

   public function connectUser($email, $password){
        $error_log = null; 
        $connexion = $this->db->connectDb();
        $connectUser = $connexion->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $connectUser->bindValue(':email', $email, PDO::PARAM_STR); 
        $connectUser->execute(); 
        $utilisateur = $connectUser->fetch(PDO::FETCH_ASSOC); 

    if (!empty($utilisateur)){
        if (password_verify($password, $utilisateur['password'])) {

            $this->id_utilisateur = $utilisateur['id'];
            $this->email = $utilisateur['email'];
            $this->password = $utilisateur['password'];


            $_SESSION['utilisateur'] = [
            'id' =>
                $this->id_utilisateur, 
            'email' =>
                $this->email, 
            'password' => 
                $this->password               
            ]; 
            //header('location:index.php');
            return $_SESSION['utilisateur'];
        } else {
                $error_log = "Login ou mot de passe erronné" ; 
            }
        } else {
            $error_log = "l'identifiant n'existe pas"; 
        }
        echo $error_log;
    }
}

?>