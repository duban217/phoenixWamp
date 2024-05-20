 <?php require('src/header.php') ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html"charset="UTF-8">

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="preconnect" href="https://fonts.googleapis.com">

   <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Athiti:wght@500&family=Bad+Script&family=Lato&family=Libre+Baskerville:ital@1&family=Marck+Script&family=Old+Standard+TT:ital@0;1&family=Oleo+Script&family=Quicksand&family=Source+Code+Pro:ital,wght@0,500;1,400&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Athiti:wght@500&family=Bad+Script&family=Libre+Baskerville:ital@1&family=Marck+Script&family=Old+Standard+TT:ital@0;1&family=Source+Code+Pro:ital,wght@0,500;1,400&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Athiti:wght@500&family=Bad+Script&family=Lato&family=Libre+Baskerville:ital@1&family=Marck+Script&family=Old+Standard+TT:ital@0;1&family=Oleo+Script&family=Source+Code+Pro:ital,wght@0,500;1,400&family=Sriracha&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="img-berger-blanc-suisse.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="carrousel.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="boutonsRéseauxSociaux.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="mur.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="footer.css"/>
     <link rel="stylesheet" href="popup.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="accueil.css" type="text/css" media="screen"/>


    <meta name="viewport" content="width=device-width",initial-scale=0.86,maximum-scale=5.0, minimum-scale=0.86/>


    <script src="mur.js"></script>

    <title> Elevage Bergers Blancs Suisses Landes Nouvelle Aquitaine </title>
    <link rel="shortcut icon" href="LOGOS/logoTeteChienVersDroite.png" type="image/x-icon">

</head>

<body>
 
    <!--Paragraphe Chiots disponibles+Présentation-->
    <div class="parag" style=" color:rgb (54, 52, 53);display:flex;justify-content:center;
    font-weight: 100;
    margin:40px 20px;
    font-size:18px;
    line-height:38px;">
      <p>
      Bonjour et bienvenue à l'élevage de L'Orée des Forêts Blanches! <br>
      Nous sommes situés dans les Landes,
      à 15 min de Dax, 50 min de Pau,
      1h de Bayonne, 2h de Bordeaux.<br>
      Nous vous accueillons tous les jours de la semaine.
      Contactez-nous au 06 24 39 09 52 ou par e-mail
      <a href="mailto:bergerblancsuisse@loreedesforetsblanches.fr" style="color:rgb(1, 98, 98);;text-decoration:none;">-> Cliquez ici.</a>
      <br>SIRET: 498 223 023 00025 / Eleveur ACACED.
    </p>
    </div>


    <div id="murDePhotos">
    <a href="carrouselMur2.html"><ul id="containerMur">
      <li id="containerPhoto1" ><img id="photoMur1" src="berger-blanc-suisse/berger-blanc-suisse1.jpg" onclick="lienDiapo(1)" onmouseenter="expandImage(1)"onmouseleave="nonExpandImage(1)"
        style="object-position: 0 -140px;"></li>

      <li id="containerPhoto2"><img id="photoMur2"src="berger-blanc-suisse/berger-blanc-suisse2.jpg" onclick="lienDiapo(2)"onmouseenter="expandImage(2)"onmouseleave="nonExpandImage(2)"
        style="object-position: 0px -270px;"></li>
      <li id="containerPhoto3"><img id="photoMur3"src="berger-blanc-suisse/berger-blanc-suisse3.jpg" onclick="lienDiapo(3)"onmouseenter="expandImage(3)"onmouseleave="nonExpandImage(3)"
        style="object-position: 0 -170px;"></li>
      <li id="containerPhoto4"><img id="photoMur4"src="berger-blanc-suisse/berger-blanc-suisse4.jpg"onclick="lienDiapo(4)"onmouseenter="expandImage(4)"onmouseleave="nonExpandImage(4)"
        style="object-position: 0 -285px;"></li>


      <li id="containerPhoto5"><img id="photoMur5" src="berger-blanc-suisse/berger-blanc-suisse5.jpg"onclick="lienDiapo(5)"onmouseenter="expandImage(5)"onmouseleave="nonExpandImage(5)"
        style="object-position: 0 -220px;"></li>
        <li id="containerPhoto6"><img id="photoMur6" src="berger-blanc-suisse/berger-blanc-suisse6.jpg"onclick="lienDiapo(6)"onmouseenter="expandImage(6)"onmouseleave="nonExpandImage(6)"
          style="object-position: 0 -200px;"></li>
        <li id="containerPhoto7"><img id="photoMur7" src="berger-blanc-suisse/berger-blanc-suisse7.jpg"onclick="lienDiapo(7)"onmouseenter="expandImage(7)"onmouseleave="nonExpandImage(7)"
          style="object-position: 0 -220 px;"></li>
        <li id="containerPhoto8"><img id="photoMur8" src="berger-blanc-suisse/berger-blanc-suisse8.jpg"onclick="lienDiapo(8)"onmouseenter="expandImage(8)"onmouseleave="nonExpandImage(8)"
          style="object-position: 0 -220 px;"></li>

        <li id="containerPhoto9"><img id="photoMur9" src="berger-blanc-suisse/berger-blanc-suisse9.jpg"onclick="lienDiapo(9)"onmouseenter="expandImage(9)"onmouseleave="nonExpandImage(9)"
          style="object-position: 0px -170px;"></li>
          <li id="containerPhoto10"><img id="photoMur10" src="berger-blanc-suisse/berger-blanc-suisse10.jpg"onclick="lienDiapo(10)"onmouseenter="expandImage(10)"onmouseleave="nonExpandImage(10)"
            style="object-position: 0px -250px;"></li>
          <li id="containerPhoto11"><img id="photoMur11" src="berger-blanc-suisse/berger-blanc-suisse11.jpg"onclick="lienDiapo(11)"onmouseenter="expandImage(11)"onmouseleave="nonExpandImage(11)"
            style="object-position: 0 -100px;"></li>
          <li id="containerPhoto12"><img id="photoMur12" src="berger-blanc-suisse/berger-blanc-suisse12.jpg"onclick="lienDiapo(12)"onmouseenter="expandImage(12)"onmouseleave="nonExpandImage(12)"
            style="object-position: 0 -310px;"></li>
      </ul></a>

    <script>
      function lienDiapo(nbrPhoto)  {
        let pos=nbrPhoto;
        localStorage.setItem("pos", pos);
      }
    </script>

    </div>

<!--DIV BOUTONS RESEAUX-->
<div class="boutonsReseaux">

  <!--INSTAGRAM-->

    <a href= "https://instagram.com/l_oree_des_forets_blanches?igshid=OGQ5ZDc2ODk2ZA==">
    <div class="button" >
      <div class="s-icon">
        <i class="fa-brands fa-instagram"></i>
    </div>
    </div></a>

    <!--TIKTOK-->
    <a href= "https://www.tiktok.com/@l_oree_des_forets?_t=8gN489GF6Aq&_r=1">
      <div class="button" >
        <div class="s-icon">
          <i class="fa-brands fa-tiktok"></i>
      </div>
      </div></a>

    <!--FACEBOOK-->
  <a href="https://www.facebook.com/people/Lor%C3%A9e-du-bois-blanc/100031039072534/">
    <div class="button" >
      <div class="s-icon">
        <i class="fa-brands fa-facebook"></i>
    </div>
    </div></a>

    <a href="mailto:bergerblancsuisse@loreedesforetsblanches.fr ">
      <div class="button" >
        <div class="s-icon">
          <i class="far fa-envelope"></i>
      </div>
      </div></a>

  </div> <!--FIN DIV BOUTONS RESEAUX-->

    <footer class="footer"  style="height:180px;">

      <br> &Eacute;levage L'Orée des Forêts blanches
      <br>Tél: 06 24 39 09 52
      <br><a href="mailto:bergerblancsuisse@loreedesforetsblanches.fr " style="color: #777777">bergerblancsuisse@loreedesforetsblanches.fr </a>
      SIRET: 498 223 023 00025 / Eleveur ACACED.<br>
    </footer>

    <script src="accueil.js"></script>
    <script src="resize.js"></script>
    <script src="resizeTwo.js"></script>
</body>

</html>
