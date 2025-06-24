<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Note difference btwn REQUIRED and INCLUDE and INCLUDE_once -->
    <?php include "./_dependences.php" ?> 
    <title>Home page</title>
</head>
<body>
    <?php include_once "./_menu.php" ?> 
    <!-- <?php include "./_menu.php" ?>  -->
    <h1> Wellcome</h1>
    <p> My application <strong>PHP</strong></p>
    <a href="utilisateur.php?username=Mitroglou&ville=Marseille&age=55">
        Connaître un peu plus sur la légende ?
    </a>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>