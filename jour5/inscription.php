// ---------------------------------------- INSCRIPTION -------------------------------------- //
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=utilisateurs", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn;
    echo "Connected successfully"."<br>";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  if(isset($_POST['inscription']))
    $nom = ($_POST['nom']); 
    $prenom = ($_POST['prenom']);
    $email = ($_POST['email']); 
    $password =  ($_POST['password']); 


  {
      if(empty($nom) || empty($prenom) || empty($email) || empty($password){
          echo "CHAMPS VIDE !";
      }
      else
      {
          echo "oui";
      }
  }
?>

</head>
<body>
    <form action="" method="post">

    <label id="lastName" for="nom"></label>
    <input type="text" name="nom">

    <label id="firstName" for="prenom"></label>
    <input type="text" name="prenom">

    <label id ="email" for="eMail"></label>
    <input type="email" name="email">
    
    <label for="password "></label>
    <input type="password" name="password">

    <button type="button" id="recuperation"></button>
    </form>
</body>
</html>