<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="contacter.css" />
    <link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anonyme" >
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap"
      rel="stylesheet"
    />
 
    <title>Réservation</title>

    <nav class="navbar navbar-dark bg-drak">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hypnos.html"
            ><span>Accueil</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reserve.html"><span>Réservation</span></a>
        </li>
        <div class="connexion">
        <li class="nav-item">
          <a class="nav-link" href="connect.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-circle" viewBox="0 0 18 18">
           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
           </svg><span>Connexion</span></a>
        </li>
        </div>
      </ul>
    </nav>
  </head>
  <body>
    <div class="logo">
    <img src="image/best tous.jpg" class="rounded mx-auto d-block alt="..." />
    </div>
  
    <div class="formulaire">
<form action="contacter.php" method="post" >
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
        <input
          type="name"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Xavier"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input
          type="fristname"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Dupont"
        />
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Adresse mail</label
        >
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Xavierdupont@exemple.com"
        />
      </div>
      <br/>

      <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Je souhaite poser une réclamation
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Je souhaite commander un service supplémentaire
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Je souhaite en savoir plus sur une suite
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Pour les autres demandes expliquez votre requête si-desous
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </label>
</div>
     

    
       
        <br/>
    <div class="confirm">
    <button type="submit" class="btn btn-outline-light">Envoyer</button>
    <i class="bi bi-person-circle"></i>
       </div>
       
     
</form> 
     
  </body>
  
</html>
