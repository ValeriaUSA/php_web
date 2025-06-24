<?php

session_start();
// unset($_SESSION['nom']); // supprime la variable session nom
session_unset(); // supprimer toutes les variables session
session_destroy();
?>


<!DOCTYPE html>
<html lang="fr">
<?php include "./_dependences.php";?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean up session</title>
</head>

<body>
    <h1>You session is cleared </h1>
</body>

</html>