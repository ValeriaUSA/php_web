<?php
$username = "Name by default"; 
// here if the user inputs nothing we use the value above
if ($_POST['username'] != "") {
    $username = $_POST['username'];
}

//here we use ISSET because it it radio not text input
$civilite = "madame";
if (isset($_POST['genre']) and $_POST['genre'] == 'homme') {
    $civilite = "monsieur";
}



$age = $_POST['age'];
$ville = $_POST['ville'];
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
    </p>



</body>
</html>