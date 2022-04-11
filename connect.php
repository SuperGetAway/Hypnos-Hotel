<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="connect.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Connexion</title>
    <nav class="navbar navbar-dark bg-drak">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"
            ><span>Accueil</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reserve.html"><span>Réservation</span></a>
        </li>
        <div class="connexion">
          <li class="nav-item">
            <a class="nav-link" href="connect.html"></a>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="white"
                class="bi bi-person-circle"
                viewBox="0 0 18 18">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path
                  fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg><span>Connexion</span></a>
          </li>
        </div>
      </ul>
    </nav>
  </head>
  <body>
    <div class="logo">
    <img src="image/best tous.jpg" class="rounded mx-auto d-block alt="..." />
    </div>
 
 <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pseudo"]) && isset($_POST["password"])){
        include("bddconnect.php");
        $requete = $pdo->prepare("SELECT * FROM users WHERE pseudo = :pseudo OR email = :email");
        $requete->execute(array(":pseudo"=>$_POST['pseudo'], ":email"=>$_POST["pseudo"]));

        $verif = $requete->fetch();
        if(password_verify($_POST['password'], $verif["password"])){
            echo 'vous etes connecté';
            $_SESSION["pseudo"] = $_POST["pseudo"];
        }else{
            echo 'vous n\'etes pas connecté.';
        }
                  
    }


    ?> 








        <div class="connexion">
            <form name="formulaire" method="POST" action="enregistrer.php">
            <label for="pseudo">Adresse mail ou Pseudo :</label>
            <input class="identifiants" type="text" name="pseudo">
            <label for="mdp">Mot de passe:</label>
            <input class="identifiants" type="password" name="password">
            <input class="confirm" type="submit" value="confirmer">
            </form>
        </div>
        <div id="inscription">
            <p>Pas de compte ? <a class="inscrire" href="inscription.php">Inscrivez-vous !</a></p>
        </div>
  

  
 
  </body>
</html>