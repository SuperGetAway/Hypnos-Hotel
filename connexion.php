<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="connect.css" />
    <link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anonyme" >
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap"
      rel="stylesheet"
    />
    <title>Connexion</title>
    
    
</head>
<body>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST["password"])){
    
    $Err = "";
    $everythingok = true;
  
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
    if($everythingok){
        include("bddconnect.php");
        
        $verif = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $verif->execute(array(":email"=>$email));
        
        if(!$verif->fetch()){

        $requete = $pdo->prepare("INSERT INTO users (email, password, ) VALUES (:email, :password, )");
        $requete->execute(array(":email"=>$email, "password"=>$password,));
        }else{
            $Err  = $Err . 'Ces identifiants sont déjà pris.';
        }
        //Afficher succes
        ?>
        
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
<div class="top">
 <img src="\image/best tous.jpg\" class="rounded mx-auto d-block" />
</div>
  <div class="connect">
    <form action="enregistrer.php" class="row " method="post">  
    
     <div class="col-auto">
       <label for="inputEmail2" class="visually-hidden">Email</label>
       <input type="email" class="form-control" id="inputEmail2" placeholder="email">
     </div>
     <div class="col-auto">
       <label for="inputPassword2" class="visually-hidden">Mot de passe</label>
       <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
     </div>
     <div class="col-auto">
       <button type="submit" class="btn btn-primary mb-3">Connexion</button>
     </div>
  
    </form>
  </div>




 </body>
</html>