
<doctype html>
<html lang="fr">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <head>
    <link rel="stylesheet" href="style.css" />
    <script src="JavaScripts.js"></script>
    <title>PHP Test</title>
  </head>

    <body>
    <div class>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="col-2 col-sm-1">
            <a class="navbar-brand" href="#">Nom Marque</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-9 col-sm-10 text-center center">
            <div class="collapse navbar-collapse center" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="articles.php?categorie=homme">HOMME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="categorie=femme">FEMME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="categorie=enfant">ENFANT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="categorie=accessoire">ACCESSOIRE</a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="col-2 col-sm-1 article">
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Rechercher un article" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
        </div>
    </nav>

    <div class="container">
        <div id="carousel" class="carousel vc_col-sm-12 slide align-self-center" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active"> 
                <img class="carousel" src="./img/asgore.jpg" alt="carousselim1">
            </div>
            <div class="carousel-item">
                <img  class="carousel"  src="./img/black rock shooter.jpg" alt="carousselim2">
            </div>
            <div class="carousel-item">
                <img class="carousel"  src="./img/xiaomi.jpg" alt="carousselim3">
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2 col-sm-1 center">
            <h1>Nos vêtements les plus populaires</h1>
            </div>
        </div>
    </div>

    </body>
  
</html>