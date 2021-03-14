// ---------------------------------------- INSCRIPTION -------------------------------------- //
<?php
session_start(); 
require_once("class/bdd.php"); 
require_once("class/user.php"); 
$db = new Db;
if (isset($_POST['register'])) {
  $user = new User($db); 
  $user->register(($_POST['email']), ($_POST['nom']), ($_POST['prenom']), ($_POST['password']), ($_POST['confirmPW']));
  var_dump($db);  
}
?>

</head>
<body>
    <form action="" method="post">

    <label id="lastName" for="nom">Votre nom</label>
    <input type="text" name="nom">

    <label id="firstName" for="prenom">Votre prénom</label>
    <input type="text" name="prenom">

    <label id ="email" for="eMail">Votre E-mail</label>
    <input type="email" name="email">
    
    <label for="password ">Votre mot de passe</label>
    <input type="password" name="password">

    <label for="confirmPW">Confirmez votre mot de passe </label>
    <input type="password" name="confirmPW">

    <button type="submit" id="recuperation" name="register">GO</button>
    </form>
</body>
</html>