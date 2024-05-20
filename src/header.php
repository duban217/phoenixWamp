
<nav>
        <a href="index.php">Accueil</a>
        <a href="elevage-bergers-blancs-suisses.php">L'élevage</a>
        <a href="nosChiens.php">Nos chiens</a>
        <a href="chiots-berger-blanc-suisse-Bordeaux-Pau-Bayonne-Nouvelle-Aquitaine-Landes.php">Chiots disponibles</a>
        <a href="videos.php">Vidéos</a>
        <a href="contact.php">Contact</a>
</nav>

    <div class="haut">
      <img id="logo" src="LOGOS/logoTeteChienVersDroite.png" style="padding-top:10px;padding-left:10px;max-height:11vh;" >
      <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
          <span class="line l1"></span>
          <span class="line l2"></span>
          <span class="line l3"></span>
      </button>
      </div>

    <section class="home" ><a href="index.php" style="cursor:pointer;text-decoration: none;">
      <h1 style="text-decoration:none;" >
      <span id="Bienvenue">Bienvenue à </span><span id="titre"> L' Orée des forêts blanches</span><br>&#201;levage de bergers blancs suisses
      </h1></a>
    </section>

    <!--BOUTON CHIOTS DISPONIBLES-->
    <div class="container-button">
    <button id="boutonChiotsDisponibles"> Chiots disponibles </button>
    <div id="popup-overlay">
      <div class="popup-content" style="font-weight: 200;line-height: 1.5;">
        <p>Les bébés de <a href="tokyo.html" style="color:rgb(246, 5, 137);text-decoration: none;">Tokyo</a> et d'<a href="alaska.html" style="color:#41838c;text-decoration: none;">Alaska</a> vont naître aux alentours du 10 juin 2024. Des chiots sont encore disponibles à la réservation. Contactez-nous.<br/> Prix d'un chiot : 1200 euros. <br><br>
        <!--Tous nos chiots sont déjà réservés. Contactez-nous pour les portées à venir.
          Les vidéos des derniers chiots<a href="videos.html" style="color:rgb(246, 5, 137);text-decoration: none;"> ici</a><br><br>
          Les photos des chiots<a href="chiots-berger-blanc-suisse-Bordeaux-Pau-Bayonne-Nouvelle-Aquitaine-Landes.html" style="color:rgb(246, 5, 137);text-decoration: none;"> ici</a><br>-->
          <br>Tél: 06 24 39 09 52
          <br>e-mail :
          <a href="mailto:bergerblancsuisse@loreedesforetsblanches.fr " class="popup-link" style="color:black;">bergerblancsuisse@loreedesforetsblanches.fr </a></p>
          <a href="javascript:void(0)" id="popup-exit">Fermer</a>
      </div>
    </div>


      <button id="boutonContactezNous">Contactez-nous</button>
      <div id="popup-contact">
        <div class="popup-content" style="font-weight:200;">
            <p> Tél: 06 24 39 09 52
            <br>e-mail :
            <a href="mailto:bergerblancsuisse@loreedesforetsblanches.fr " class="popup-link" style="color:black;">bergerblancsuisse@loreedesforetsblanches.fr </a></p>
            <a href="javascript:void(0)" id="popup-exit2">Fermer</a>
        </div>
      </div>

    </div>
    <script>
      document.getElementById("boutonChiotsDisponibles");
      document.getElementById("paragAccueil");
       if (window.matchMedia("(max-width:480px)").matches)
    {
      paragAccueil.style.fontSize="14px",
      boutonChiotsDisponibles.style.marginRight="0px"
    }
    else
  {
    boutonChiotsDisponibles.style.marginRight="30px"
    }
    </script>
    <script>
    let bouton=document.getElementById("boutonChiotsDisponibles");
    bouton.onclick=function togglePopup(){
    let popup=document.getElementById("popup-overlay");
    popup.classList.toggle("open");
    };
    let boutonExit=document.getElementById("popup-exit");
    boutonExit.onclick=function togglePopup(){
    let popup=document.getElementById("popup-overlay");
    popup.classList.toggle("open");
    };
    </script>
    <!-- FIN  BOUTON CHIOTS DISPONIBLES-->

    <script>
      let bouton2=document.getElementById("boutonContactezNous");
      bouton2.onclick=function togglePopup(){
      let popup2=document.getElementById("popup-contact");
      popup2.classList.toggle("open");
      };
      let boutonExit2=document.getElementById("popup-exit2");
      boutonExit2.onclick=function togglePopup(){
      let popup2=document.getElementById("popup-contact");
      popup2.classList.toggle("open");
      };
      </script>

    <!-- BANDEAU EN-TETE-->
    <div class="container-img-BergerBlancSuisse">

        <img src="ChiensSurRoute-1440.jpg">

    </div>
    <script src="accueil.js"></script>
    <script src="resize.js"></script>
    <script src="resizeTwo.js"></script>
