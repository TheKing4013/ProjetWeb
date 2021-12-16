<?php
    require_once "utils.php";
    require_once "bd_utils.php";
    init_session();
    if(!empty($GET)) {
        if ($GET['action'] = "logout") {
            clear_session();
            echo "La session a été détruite !";
            header('location: index.php');
        }
    }

    if(isset($_POST['valid_connection']))
        if(isset($_POST['form_email']) && !empty($_POST['form_email']) && isset($_POST['form_password']) && !empty($_POST['form_password']))
        {
            $user_name ="";
            $user_email = $_POST['form_email'];
            $password = $_POST['form_password'];
            $sql="SELECT * FROM clients WHERE `email` = "."'$user_email'";
            //print($sql);
            $html ="Identifiant ou mot de passe incorrect";
            if(isset($_POST['rememberme'])) {
                setcookie('email',$user_email,time()+365*24*3600,null,null,false,true);
                setcookie('password',$password,time()+365*24*3600,null,null,false,true);
            }
            foreach ($dbh->query($sql) as $row) {
                //print("\n" . $row['user_name'] . "\n" . $row['user_password']);
                if (password_verify($password, $row['motDePasse'])) {
                    $_SESSION['user_name']=$row['prenom'];
                }
                else echo $html;
            }
            /**echo "<pre>";
            print_r($row);
            echo "</pre>";
             **/
            }

?>


<doctype html>
    <html lang="fr">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="JavaScripts.js"></script>

    <head>
        <link rel="stylesheet" href="style.css" />
        <script src="JavaScripts.js"></script>
        <title>Acceuil |La Friperie</title>
    </head>

    <body>

    <?php include_once "includes/header.php"?>

        <div id="carousel" class="carousel vc_col-sm-12 slide align-self" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel" src="./img/Nasa.jpg" alt="carousselim1">
                </div>
                <div class="carousel-item">
                    <img  class="carousel"  src="./img/sapin_noel.jpg" alt="carousselim2">
                </div>
            </div>
        </div>

    <div class="container">
        <div class="row">
                <h1 style="align-content: center">Nos vêtements les plus populaires :</h1>
        <div class="row">
            <div class="col-1 col-sm-4 pop-products pop-1">
                <img width="500" height="500" src="./img/Nasa.jpg"/>
                <div class=pop-products-text>
                    <p>Vêtement populaire 1</p>
                </div>
            </div>
            <div class="col-1 col-sm-4 pop-products pop-2">
                <img width="500" height="500" src="./img/Design%203.jpg"/>
                <div class=pop-products-text>
                    <p>Vêtement populaire 2</p>
                </div>
            </div>
            <div class="col-1 col-sm-4 pop-products pop-3">
                <img width="500" height="500" src="./img/batman.jpg"/>
                <div class=pop-products-text>
                    <p>Vêtement populaire 3</p>
                </div>
            </div>
        </div>
    </div>
        <script> $('.carousel').carousel({ interval: 1500 })</script>
    </body>


        <footer>
            <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">La Friperie © 2021</p>
            </div>
            </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    </html>