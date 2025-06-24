<?php
// démarrer la session we declair it here because we are using $_SESSION below. This line is always starts the code
session_start();
$nom_c = "";
$nom_s = "";
if (isset($_COOKIE['nom'])) {
    $nom_c = $_COOKIE['nom'];
}
if (isset($_SESSION['nom'])) {
    $nom_s = $_SESSION['nom'];
};

//Here i remove the seesion by clicking on the link (pointing to the same page) 

if (str_contains($_SERVER['HTTP_REFERER'], 'test.php')) {
    session_unset(); // supprimer toutes les variables session
    session_destroy();
    $nom_c = "";//here we remove tha variables
    $nom_s = "";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./_dependences.php" ?>
    <title>Cookies</title>
</head>

<body>
    <h1>Cookies et sessions</h1>
    <h2>Cookies</h2>
    <p>Nom : <?php echo $nom_c ?></p>
    <p>Nom : <?= $nom_c ?></p>
    <h2>Sessions</h2>
    <p>Nom : <?php echo $nom_s ?></p>
    <p>Nom : <?= $nom_s ?></p>
      <p>
        <a href="test.php">
            Vider la session
        </a>
    </p>
</body>

</html>


