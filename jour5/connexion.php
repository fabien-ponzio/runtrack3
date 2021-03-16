
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <form method="POST" action="traitement.php">
    <label for="">email</label>
    <input type="email" id="emailConnect" name="email">

    <label for="">password</label>
    <input type="password" id="passwordConnect" name="password">

    <button type="submit" id="submitConnect" name="connect">submit</button>
    </form>
</body>
</html>