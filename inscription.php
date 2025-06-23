<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Sign up page</h1>
     <div>
            <form action="utilisateur.php" method="get">
                <fieldset>
            <legend>Données de connexion</legend>
        <div>
            <!-- in label use the id of input "username", just good practice: if you push on label the user goes inside input -->
             <!--autocomplete nopt to show previously entered values  -->
            <label for="username">Nom d'utilisateur</label> 
            <input type="text" id="username" autocomplete="off" name="username">
        </div>
        <div>
            <!-- for passport use type PASSWORD -->
            <label for="password">Your password</label> 
            <input type="password" id="password" name="pasword">
        </div>
         </fieldset>
         <div>
            <!--  type NUMBER -->
            <label for="age">Your age</label> 
            <input type="number" id="age" min="0" max="99" name="age">
        </div>
           <div>
            <!-- Choosing pre-defined value from a list -->
             <!-- selected will be shown or by hidden or disabled option -->
            <label for="ville">Ville</label>
            <select id="ville" name="ville">
                <!-- <option selected disabled>Merci de choisir votre ville de résidence</option> -->
                <option value="Marseille">Marseille</option>
                <option value="Lyon" selected>Lyon</option>
                <option value="Paris">Paris</option>
            </select>
        </div>
         <div>
            <!-- Text input -->
            <label for="remarque">Your comments</label> 
            <textarea id="remarque" cols="50" rows="5" name=remarque></textarea>
        </div>

        <div>
            <!-- RADIO , name insures that ONLY 1 can be choosen , otherwise use CHECKBOX -->
            Genre
            <input type="radio" name=genre value="Homme">Homme 
            <input type="radio" name=genre value="Femme">Femme 
        </div>

        <div>
            <!--CHECKBOX allows MANY choices at a time, -->
            Preferences in Sport
            <input type="checkbox" name=sport1 checked value="Football">Football 
            <input type="checkbox" name=sport2 value="handball">Handball 
            <input type="checkbox" name=sport3 value="tennis">Tennis 
        </div>
        <div>
            <!-- By default all buttons have tipe SUBMIT -->
            <button>
            Sign up
        </button></div>
    </form>
    </div>
</body>
</html>