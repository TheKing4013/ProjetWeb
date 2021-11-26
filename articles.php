
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
    <div id:"categorie"> 
    surp ?
    <?php  
    echo "slurp";
        /*Starting database*/
        $user = 'root';
        $pass = '';
        $db = 'DataBaseWebProject';
      echo "sprout";

        $dp = new mysqli('localhost', $user, $pass, $db) or die("unnable to connect to the database");
      echo "splaf";

        if isset($dp){
          $sql = SELECT * FROM Produits;
          foreach($db->query($sql) as $row) {
            echo "<li>".row['nom']."</li>";
          }
        }
        else{
          echo "database not found"
        }


        if(isset($_GET["categorie"])){
            echo $_GET["categorie"];
        }
        else{
            echo "not found";
        }

    ?> 
</div>
  