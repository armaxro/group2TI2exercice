<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/MyCSS.css">
    <title>Informations</title>
</head>
<body>
<h1>Formulaire de Contact</h1>
    <div id="colonne_gauche">
    <form action="" method="post">
      <div id="lenom">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
      </div>
      <div id="leprenom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
      </div>
      <div id="legenre">
        <fieldset> <!--cadre-->
        <legend>Genre</legend> <!-- mettre titre sur le cadre  // &nbsp = espace-->
            <div class="radio">
                <input type="radio" name="genre" id="homme" value="H" checked><label for="homme">Homme</label>
            </div>
            <div class="radio">
                <input type="radio" name="genre" id="femme" value="F"><label for="femme">Femme</label>
            </div>
      </div>
    </div>
      </fieldset>
    <div id="colonne_droite">
      <div id="lemessage">
        <label for="msg">Message</label>
        <textarea name="message" id="msg" cols="30" rows="10" maxlength="1024"></textarea>
      </div>
      <div id="lalangue">
        <label for="langue">Langue</label>
        <select name="langue" id="langue">
          <option value="FR">Francais</option>
          <option value="NL">Nederlands</option>
          <option value="DE">Deutsch</option>
          <option value="EN">English</option>
        </select>
      </div>
      <div id="lergpd">
        <input type="checkbox" name="rgpd" id="rgpd"><label for="rgpd">J'accepte que mes données soient stockées et je suis d'accord avec la politique de confidentialité.</label>
      </div>
    </div>
      <div id="envoi">
          <input type="submit" onclick="validateForm(event)" value="Envoyer les données">
      </div>
    </form>


    <h1>Les Commentaires</h1>
    <section id="informations">
        <?php 
            foreach (array ($informations) as $information):
        ?>
        <div class="information">
            <div>
                <p><?= $information["themail"] ?></p>
                <p><?=(new DateTime($information["thedate"]))->format('d/m/Y H:i:s')?></p>
            </div>
            <p><?= $information["themessage"] ?></p>
        </div>
        <?php
            endforeach;
        ?>
    </section>
    <script>
        function validateForm(e){
        var ageInput = document.getElementById("ddn1").value;
        var birthday = new Date(ageInput);
        var yearBirthday = birthday.getFullYear();
        var currentYear = new Date().getFullYear();
        var age = currentYear - yearBirthday ;
    
    
        var password = document.getElementById('password1').value;
        var lengthCheck = password.length >= 8;
        var uppercaseCheck = /[A-Z]/.test(password);
        var numberCheck = /\d/.test(password);
        var symbolCheck = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        
        if (isNaN(age)|| age < 18)  {
            e.preventDefault();
            alert (" Vous n'êtes pas majeur");
        }
        if  (age > 120){
            e.preventDefault();
            alert (" Vous etes trop vieux papy");
        } 
    
        if (!lengthCheck || !uppercaseCheck || !numberCheck || !symbolCheck) {
            e.preventDefault();
             alert("Le mot de passe ne respecte pas les critères");
        } 
    }
    </script>  

    
</body>
</html>