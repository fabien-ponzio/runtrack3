<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="job02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LPTF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="https://laplateforme.io/">Accueil <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Units</a>
      <a class="nav-item nav-link" href="#">Jobs</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skills</a>
    </div>
  </div>
</nav>
<h1 class="display-3 text-center" >LaPlateforme_</h1>
<div class="row">
<div class="col-3">
<div class="card">
  <img src="img/papillon.png" class="card-img-top" alt="papillon">
  <div class="card-body">
    <h5 class="card-title">Un papillon</h5>
    <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Commander votre propre papillon</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment acheter un papillon ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Si oui, un CD dédicacé de Cindy Sanders "papillon de lumières" vous sera offert.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
<div class="col-7">
<div class="jumbotron">
  <h1 class="display-4">Bonjour, monde!</h1>
  <p class="lead" id="textJumbo">Il existe plusieurs visions du terme: </p>
  <p class="lead" id="textJumbo1">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.
  Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
  <hr class="my-4">
  <p>Le sens étendu désigne l'univers dans son ensemble</p>
  <a class="btn btn-primary btn-lg" href="#" role="button" onclick="changeJumbo()">Rebooter le Monde</a>
  <div class="spinner-border text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>

<div class="d-flex flex-row-reverse">
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" onclick="changeContent()" href="#">1</a></li>
    <li class="page-item"><a class="page-link" onclick="changeContent()" href="#">2</a></li>
    <li class="page-item"><a class="page-link" onclick="changeContent()" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </nav>
</div>


</div>
</div>

<div class="col-2">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action ">Limbes</a>
  <a href="#" class="list-group-item list-group-item-action active">Luxure</a>
  <a href="#" class="list-group-item list-group-item-action">Gourmandise</a>
  <a href="#" class="list-group-item list-group-item-action">Avarice</a>
  <a href="#" class="list-group-item list-group-item-action">Colère</a>
  <a href="#" class="list-group-item list-group-item-action">Heresie</a>
  <a href="#" class="list-group-item list-group-item-action">Violence</a>
  <a href="#" class="list-group-item list-group-item-action">Ruse et Tromperie</a>
  <a href="#" class="list-group-item list-group-item-action">Trahison</a>
  <button type="button" class="list-group-item list-group-item-action" disabled >Internet Explorer</button>
</div>
</div>
</div>

<div class="row pb-5">
=<div class="offset-3 col-7">

<div class="d-flex flex-row-reverse">
<p><b>Installation des AI 9000</b></p>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
</div>
</div>
</div>


<div class="row">
<div class="col-4 offset-2">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">@</span>
    </div>
    <input type="text" class="form-control" placeholder="Login" aria-label="Login" aria-describedby="basic-addon1">
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Mot de Passe" aria-label="Mot de Passe" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
  </div>

  <label for="basic-url">URL des internets 2 et 2.1</label>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    </div>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">DogeCoin</span>
    </div>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    <div class="input-group-append">
      <span class="input-group-text">.00</span>
    </div>
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">https://l33t.lptf/dkwb/berlusconimkt/</span>
    </div>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>
</div>

<form class="col-2 offset-2">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>

</head>
<body>
