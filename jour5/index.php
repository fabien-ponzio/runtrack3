
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <!-- SI USER EST CONNECTED -->
    <?php if(isset($_SESSION['utilisateur'])){
        echo 'Bonjour session_user';
    };
    session_start();
    var_dump($_SESSION['utilisateur']);
    ?>
    </p>
    <!-- ELSE -->
    <p>
    <a href="inscription.php">inscription</a>
    <a href="connexion.php">connexion</a>
    </p>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>