<?php
// démarrer la session
session_start();

var_dump($_SERVER);
//   'REQUEST_METHOD' => string 'GET' (length=3)
//   'HTTP_REFERER' => string 'http://localhost/php-web/' (length=25)

$username = "Name by default"; 
// here if the user inputs nothing we use the value above
if ($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}

//here we use ISSET because it it radio not text input
$civilite = "madame";
if (isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'homme') {
    $civilite = "monsieur";
}



$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];

// ajouter un cookie
setcookie("nom", $username);

// ajouter des données dans la session
$_SESSION['nom'] = $username;
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
  <h1> User management</h1>  
     <p>
        Bonjour
         <?php
        echo "$civilite $username, vous avez $age ans et êtes de $ville";

        ?>
        <a href="test.php">Consulter les cookies et les sessions</a>
        ?>
    </p>



</body>
</html>