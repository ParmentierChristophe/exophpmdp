<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deviens riche et beau !</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  </head>
  <body>
    <div class="container">

    <h1>Entre le mot de passe pour Devenir riche et avoir du succés aupres des filles ! :</h1>
    <form action="" method="post">
        <p>
        <input type="password" name="mdp" placeholder="votre mot de passe ..." /><br>
        <input type="submit" value="Valider" class="button" />
        </p>
    </form>
    <p>Allez c'est simple pour t'aider je te donne des petits indices : </p>

    <?php
    $password = "supercalifragilisticexpialidocious";

    if (!isset($_POST['mdp']) OR $_POST['mdp'] != $password) {
      // indices random
      $arrQuote = array();

        $arrQuote[0] = "Une GRANDE phrase d'un film Disney !";
         $arrQuote[1] = 'Le mot de passe contient 34 lettres';
         $arrQuote[2] = "Mot tiré d'un film Disney de 1964 avec Julie Andrews";
         $arrQuote[3] = 'Essai encore !';
         $arrQuote[4] = 'Le mot de passe a même une musique dans le film !';
         $arrQuote[5] = "C'est l'histoire d'une super nounou";
         $arrQuote[6] = "celui ci est un indice inutile";
         $arrQuote[7] = "tous les indices ne sont pas serieux !";
         $arrQuote[8] = "Tu crois qu'avec ce mot de passe tes problemes seront finis?";
         $arrQuote[9] = "Mary Poppins";
         $arrQuote[10] = "au total il y a 10 indices comme celui ci !";

// affichage des indices
         echo '<p>indice: '.$arrQuote[array_rand($arrQuote)].'</p>';

    }else {
      // bon mdp
      echo '<p class="validate">Yeah c\'est le bon mot de passe ! Mais tu n\'as rien gagné bien sur !</p>';
      echo '<img src="https://cdn.meme.am/instances/36136703.jpg" alt="" />';

    }

?>

    </div>
  </body>
</html>
