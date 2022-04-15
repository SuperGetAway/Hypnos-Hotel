<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Inscription</title>
</head>
<body>
    

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST["password"])){
    
    $Err = "";
    $everythingok = true;
    // partie regex
    //verif pseudo
    if(preg_match('`^([a-zA-Z0-9-_]{3,18})$`', $_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    }
    else{
    $Err = "Votre pseudo doit contenir entre 3 et 18 caractères et ne contenir que des chiffres, des lettres et des tirets<br>";
    $everythingok = false;
    }

    //verif email
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
    }else{
        $Err  = $Err . "Adresse email invalide. <br>";
        $everythingok = false;
    }

    //verif password + hash
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // regexpassword?

    $news = isset($_POST["newsletter"]);

    if($everythingok){
        include("bddconnect.php");
        
        $verif = $pdo->prepare('SELECT * FROM users WHERE pseudo = :pseudo OR email = :email');
        $verif->execute(array(":pseudo"=>$pseudo, ":email"=>$email));
        
        if(!$verif->fetch()){

        $requete = $pdo->prepare("INSERT INTO users (pseudo, email, password, newsletter) VALUES (:pseudo, :email, :password, :newsletter)");
        $requete->execute(array(':pseudo'=> $pseudo, ":email"=>$email, "password"=>$password, 'newsletter'=>$news));
        }else{
            $Err  = $Err . 'Ces identifiants sont déjà pris.';
        }
        //Afficher succes
        ?>
        
        <div class="inscription">
            Succes....
        </div>
        
        <?php
    }else{
        //Afficher echec
        ?>

        <div class="inscription">
            Echec....
            <?php echo $Err;?>
        </div>
        
        <?php
    }



}else{

?>




        <div class="inscription">
            <form name="formulaire" method="POST" action="http://localhost/php/hypnos/inscription.php">
            <label for="pseudo">Pseudonyme :</label>
            <input class="identifiants" type="text" name="pseudo" id='pseudo'>
            <label for="email">Adresse mail :</label>
            <input class="identifiants" type="email" name="email" id='email'>
            <label for="password">Mot de passe:</label>
            <input class="identifiants" type="password" name="password" id="password">
            <label for="checkbox">Cochez si vous voulez recevoir les dernières nouveautés</label>
            <input class="news" type="checkbox" name="newsletter" id="accept"/>
            <input class="confirm" type="submit" value="confirmer">
            </form>
        </div>
        <div id="connexion">
            <p>Déjà un compte ? <a class="connecter" href="connect.php">Connectez-vous !</a></p>
        </div>
</body>
</html>

