<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>

</head>
<body id="body">

<header id="header">

<div id="z"></div>
<a id="a" href="">Acceuil</a>

<div id="z"></div>
<a id="a" href="">Presentation</a>

<div id="z"></div>
<a id="a" href="">Contact</a>
</header>
<div id="rempli">
    
</div>
<script>
$('#header').click(function(event){
    document.body.style.backgroundColor = "white";
    $("rempli").append("<a id='e' href=''>Acceuil</a>"); 
    $("rempli").append("<a id='e', href=''>Présentation</a>"); 
    $("rempli").append("<a id='e', href=''>Contact</a>"); 

}); 
</script>
</body>
</html>