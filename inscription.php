<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-primary text-center my-4"> Sign up page</h1>
    <main class="container">
        
            <form action="utilisateur.php" method="post">
                <fieldset>
                    <legend>Sign up information</legend>
                    <div class="mb-3 row">
                        <div>
                            <!-- in label use the id of input "username", just good practice: if you push on label the user goes inside input -->
                            <!--autocomplete nopt to show previously entered values  -->
                            <label class="col-sm-2 col-form-label   for=" username">User name</label>
                            <div class="col-sm-10">
                                <input type="text" id="username" autocomplete="off" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div>
                            <!-- for passport use type PASSWORD -->
                            <label class="col-sm-2 col-form-label for=" password">Your password</label>
                            <div class="col-sm-10">
                                <input type="password" id="password" name="pasword">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="mb-3 row">
                    <div>
                        <!--  type NUMBER -->
                        <label class="col-sm-2 col-form-label for=" age">Your age</label>
                        <div class="col-sm-10">
                            <input type="number" id="age" min="0" max="99" name="age">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <!-- Choosing pre-defined value from a list -->
                    <!-- selected will be shown or by hidden or disabled option -->
                    <label class="col-sm-2 col-form-label for=" ville">Ville</label>
                    <div class="col-sm-10">
                        <select id="ville" name="ville" class="form-select">
                            <option selected disabled>Choose your city of residence</option>
                            <option value="Marseille">Marseille</option>
                            <option value="Lyon">Lyon</option>
                            <option value="Paris">Paris</option>
                        </select>
                    </div>
                </div>
                <div>
                    <!-- Text input -->
                    <label class="col-sm-2 col-form-label for=" remarque">Your comments</label>
                    <textarea id="remarque" cols="50" rows="5" name=remarque></textarea>
                </div>

                <div class="mb-3 row">
                    <!-- RADIO , name insures that ONLY 1 can be choosen , otherwise use CHECKBOX -->
                    <label class="col-sm-2 col-form-label"> Gender</label>
                    <div class="col-sm-10">

                        <div class="form-check form-check-inline"
                            <input class="form-check-input" type="radio" name=gender value="Male" id="gender1">
                            <label class="form-check-label" for="gendre1">
                                Male
                            </label>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline"
                                <input class="form-check-input" type="radio" name=gender value="Female" id="gender2">
                                <label class="form-check-label" for="gender2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-3 row">
                    <!--CHECKBOX allows MANY choices at a time, -->
                    <label class="col-sm-2 col-form-label"> Preferences in Sport </label>

                    <div class="col-sm-10">
                        <div class="form-check form-check-inline"
                            <input class="form-check-input" type="checkbox" name=sport1 checked value="Football" id="sport1">
                            <label class="form-check-label" for="sport1">
                                Football
                            </label>
                        </div>

                        <div class="form-check form-check-inline"
                            <input class="form-check-input" type="checkbox" name=sport2 value="Tennis" id="sport2">
                            <label class="form-check-label" for="sport2">
                                Tennis
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name=sport3 checked value="Hokey" id="sport3">
                            <label class="form-check-label" for="sport3">
                                Hokey
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- By default all buttons have tipe SUBMIT -->
                    <button class="btn btn-primary">
                        Sign up
                    </button>
                </div>
            </form>
    </main>
    
</body>

</html>