<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <title>FORMULAIRE - PRO</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

        <?php require("header.html"); ?>

        <h1>Formulaire - Professionnel</h1>

            <form name="sign up" method="post" action="traitement.php">

                <label for="civilite">Civilité * :</label>
                <input type="radio" name="civilite">Madame</input>
                <input type="radio" name="civilite">Monsieur</input></br>
                <div>Veuillez indiquer votre civilité</div>
                
                <label for="nom">Nom * :</label>
                <input type="text" name="nom"></input></br>
                <div>Veuillez indiquer un nom valide</div>

                <label for="prenom">Prénom * :</label>
                <input type="text" name="prenom"></input></br>
                <div>Veuillez indiquer un prénom valide</div>

                <label for="Nomdelasociete">Nom de la société * :</label>
                <input type="text" name=""></input></br>
                <div>Veuillez indiquer un nom de société valide</div>

                <label for="posteoccupe">Poste occupé * :</label>
                <input type="text" name=""></input></br>
                <div>Veuillez indiquer un nom de poste valide</div>

                <label for="addresse1">Addresse 1 * :</label>
                <input type="text" name="addresse1"></input></br>
                <div>Veuillez indiquer une addresse</div>

                <label for="addresse2">Addresse 2 * :</label>
                <input type="text" name="addresse2"></input></br>

                <label for="codepostal">Code postal * :</label>
                <input type="number" name="codepostal"></input></br>
                <div>Veuillez indiquer un code postal existant</div>

                <label for="ville">Ville * :</label>
                <select name="ville" size="1"></select></br>
                <div>Veuillez choisir votre ville dans la liste</div>

                <label for="telephonesociete">Téléphone société * :</label>
                <input type="number" name="telephonesociete"></input></br>
                <div>Veuillez indiquer un numéro de téléphone valide</div>

                <label for="telephonedirecte">Téléphone directe * :</label>
                <input type="number" name="telephonedirecte"></input></br>
                <div>Veuillez indiquer un numéro de téléphone valide</div>

                <label for="email">Email * :</label>
                <input type="email" name="email"></input></br>
                <div>Veuillez indiquer un Email valide</div>

                <input type="submit" name="valider" value="valider">                    
            </form>
        

    </body>
</html>