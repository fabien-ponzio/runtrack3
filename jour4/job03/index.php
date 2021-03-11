<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<form action="" id="pokemon">
<div>
<input type="text" id="id">

<input type="text" id="nom">

<select id="type">
    <option value="">type</option>
    <option value="Fire">fire</option>
    <option value="Flying">flying</option>
    <option value="Water">water</option>
    <option value="Bug">bug</option>
    <option value="Normal">normal</option>
    <option value="Electric">electric</option>
    <option value="Ground">ground</option>
    <option value="Fairy">fairy</option>
    <option value="Fighting">fighting</option>
    <option value="Psychic">psychic</option>
    <option value="Rock">rock</option>
    <option value="Steel">steel</option>
    <option value="Ice">ice</option>
    <option value="Ghost">ghost</option>
    <option value="Grass">grass</option>
    <option value="Poison">poison</option>
    <option value="Dragon">dragon</option>
</select>

<button type="button" id="filtrer" value="go!">Go!</button>

<div id="sorted"></div>

</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>