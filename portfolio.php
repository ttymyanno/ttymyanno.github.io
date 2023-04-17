<!DOCTYPE html>
<html>
<title>Mon portefolio</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
<link rel="stylesheet" href="../css/styles.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="#"><img src="/img/photo_pro.jpg" class='w3-hover-opacity' style="width:100%"></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PROJETS</p>
  </a>
  <a href="#veille" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
  <i class="fa fa-book w3-xxlarge"></i>
    <p>VEILLE</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PROJETS</a>
    <a href="#veille" class="w3-bar-item w3-button" style="width:25% !important">VEILLE</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Je suis</span> Yann Touassom.</h1>
    <h3>Etudiant en BTS SIO deuxième année option SLAM.</h3>
    <p>Contrairement à d’autres BTS préparant à une fonction précise, le BTS SIO forme les étudiants à appréhender la diversité des impératifs informatiques au service du développement des entreprises. BTS Informatique par excellence, ce cursus SIO répond aux aspirations et ambitions d’un nombre croissant d’étudiants. <br>Le BTS SIO (Services Informatiques aux Organisations) s’impose, comme son nom l’indique, une formation avec obtention d’un diplôme Bac +2 consacré au domaine informatique dans sa globalité. Adaptée à tous les étudiants motivés, un des atouts de ce BTS se situe au niveau de l’étendue des compétences développées au cours du cursus. Deux options  – SLAM (Solutions Logicielles et Applications Métiers) et   SISR (Solutions d’Infrastructure, Systèmes et Réseaux) – renforcent cette approche globale. Le BTS SIO ne forme pas à une seule fonction mais ouvre d’innombrables opportunités depuis la maintenance des systèmes et des réseaux jusqu’au développement Web.</p>
    <img src="/img/photo_pro.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Yann</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Je suis un jeune étudiant en SERVICE INFORMATIQUE AUX ORGANISATIONS. Dynamique et travailleur, je mets beaucoup de rigueur dans tout ce que j’entreprend et je ne ménage aucun effort lorsque je me fixe un objectif. Je souhaite obtenir à la fin de mon parcours mon diplôme d'ingénieur et d'acquérir les bases nécessaires à une bonne intégration professionnel dans les secteur informatique en général et celui de la programmation et des Big data en particulier.</p>
    <h3 class="w3-padding-16 w3-text-light-grey">Mes compétences</h3>
    <p class="w3-wide">Programmation: PYTHON, C, C++, C#, HASKELL</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div><br>
    <p class="w3-wide">Maitrise des Framework: Tailwind, Bulma, Bootstrap, Guna, Bonifu, .Net </p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div><br>
    <p class="w3-wide">Développement-Web: HTML, JAVASCRIPT,PHP, CSS</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div><br>
    <p class="w3-wide">Adressage IP</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>
    <p class="w3-wide">Utilisation des équipements et des outils de maintenance</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div><br>
    <p class="w3-wide">Utilisation des logiciels de cybersécurité</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div><br>
    <p class="w3-wide">Animation et création de jeux vidéo 2D et 3D sur Unity</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div><br>
    <p class="w3-wide">Maitrise des IDE: Replit, Microsoft Visual Studio, Google Colab, Visual studio code, Git</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:97%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1+</span><br>
        Alternance
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5+</span><br>
        Certifications au module RGPD
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">18+</span><br>
        Formations terminées
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1+</span><br>
        Certification animation Scratch et Unity
      </div>
    </div>

    <button onclick="window.location='https://drive.google.com/file/d/1TxBULGeVfcsLQOUhVIVWqSS24H-1CqkE/view?usp=sharing';" target="_blank">
      <i class="fa fa-download"></i> Télécharger mon CV
</button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Mes Projets</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Ecole</li>
          <li class="w3-padding-16"><a href="#logo">Conception d'une charte graphique et du logo d'une entreperise</a></li>
          <li class="w3-padding-16"><a href="#site">Création d'un site de e-commerce, logo, charte graphique, inscription, connecxion, ajout au panier.</a></li>
          <li class="w3-padding-16"><a href="#cnil">Formation en cybersécurité, module protection des données relativent à la loi informatique et liberté</a></li>
          <li class="w3-padding-16"><a href="#mdl">Ap 2 projet sur la maison des ligues solution de cloud coumputing</a></li>
          <li class="w3-padding-16"><a href="#mdp">Projet cryptage et décryptage des mots de passe utilisation du platformer TryHackme</a></li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Entreprise</li>
          <li class="w3-padding-16"><a href="#iamk">Décryptage de son et d'image et utilisation de l'IA pour la reconnaiissance d'images</a></li>
          <li class="w3-padding-16"><a href="#wbap">Création d'une web dans le cardre d'une formation en Python et html css</a></li>
          <li class="w3-padding-16"><a href="#mkpl">Création d'une market place sur la plateforme replit avev du html, css, javascript</a></li>
          <li class="w3-padding-16"><a href="#robo">Initiation à la robautique et au réseau de neurrone sur scrtach grace à la création d'un jeu</a></li>
          <li class="w3-padding-16"><a href="#api">Cours d'initiation au Machine Learning avec les API TensorFlow</a></li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Mes projets</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <a href="https://docs.google.com/presentation/d/1SJDjqc1LL8FiBgmGIqVY706LUtown4k7WoEDk--nau8/edit#slide=id.g1193b323464_2_73" target="_blank" id="logo"><img src="/img/LOGO_LEGOSCREEN.png" class='w3-hover-opacity' style="width:100%"></a>
        <a href="produit.php" target="_blank" id="site"><img src="/img/TTYM SHOP.jpg" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://atelier-rgpd.cnil.fr/mod/customcert/view.php?id=54&downloadown=1" target="_blank" id="cnil"><img src="/img/cnil.png" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://docs.google.com/presentation/d/1A6PSp88PF5A5jlMdQLSVOSBFwO19apJQQ0L-uC0A3Js/edit#slide=id.g133ed37f9a1_0_92" target="_blank" id="mdl"><img src="/img/m2l.png" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://drive.google.com/drive/folders/18lIyk6XzhXxv8l8LhtyXURfDXdNMSHPo" target="_blank" id="mdp"><img src="/img/hack.png" class='w3-hover-opacity' style="width:100%"></a>
      </div>

      <div class="w3-half">
        <a href="https://colab.research.google.com/drive/1hmjv4guKYHo37V4LQMqddLLw9lIUr1nz?usp=sharing" id="iamk" target="_blank" ><img src="/img/mac.jpg" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://replit.com/join/qhkeqrklhm-yanntouassom" id="wbap" target="_blank"><img src="/img/webapp.jpg" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://replit.com/@YannTouassom/markert-place#index.html" id="mkpl" target="_blank"><img src="/img/neurone1.jpg" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://scratch.mit.edu/projects/741792322/editor" target="_blank" id="robo"><img src="/img/ia1.jpg" class='w3-hover-opacity' style="width:100%"></a>
        <a href="https://developers.google.com/machine-learning/crash-course/" target="_blank" id="api"><img src="/img/mclearn.png" class='w3-hover-opacity' style="width:100%"></a>
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
  <div class="w3-padding-64 w3-content w3-text-grey" id="veille">
    <h2 class="w3-text-light-grey">Veille Technologique</h2>
    <hr style="width:200px" class="w3-opacity">
  <ul>
    <li>
      <p><strong>L’observation des nanoparticules :</strong> <br>
Le laboratoire national de métrologie et d’essais (LNE) a dévoilé le 20 Novembre une nouvelle plateforme dédiée à la caractérisation des nanomatériaux. Son atout ? L’utilisation de l’intelligence artificielle pour accélérer la reconnaissance et la mesure des particules à partir d’images de microscopie électronique.</p>
  <img src="/img/nano.png" alt="" width="100%"><br> <br>
  <p>Le laboratoire national de métrologie et d’essais (LNE) a choisi le 20 mai, date de la journée mondiale de la métrologie, pour dévoiler une toute nouvelle plateforme de caractérisation dédiée aux nanomatériaux. Baptisée NanoMétrologIA, cet outil développé par le LNE se distingue par son usage d’algorithmes d’apprentissage profond pour accélérer l’analyse dimensionnelle de nanoparticules, à partir d’images obtenues par microscopie électronique à balayage (MEB)
La caractérisation des nanoparticules est en effet un processus habituellement long et fastidieux pour les chercheurs. « Les particules de très petites dimensions ont tendance à s’agglomérer et à former des grappes aux grains irréguliers », explique Nicolas Fischer, responsable du département « science des données » au LNE « La caractérisation d’un échantillon demande, d’analyser environ 500 particules, qu’il faut isoler sur l’image en les détourant. Cette étape était jusqu’à présent réalisée manuellement ». <br>
<strong>Un réseau de neurone de Facebook :</strong><br>
A partir de 2019, les chercheurs du LNE ont entrainé l’algorithme de la plateforme NanoMetrologIA à reconnaître les particules apparaissant sur une image MEB et à les séparer. Le gain de temps est spectaculaire : une opération qui nécessitait auparavant une demi-journée peut désormais être réalisée en une dizaine de secondes !
</p>
  <img src="/img/nano2.png" alt="" width="100%"> <br><br>
  <p><strong>Le réseau de neurones de NanoMetrologIA :</strong><br>
    Il caractérise les dimensions de plusieurs milliers de nanoparticules pouvant être présentes sur une image MEB.
    Pour mettre au point cet outil, l’équipe d’analyse des données du LNE a utilisé un algorithme de deep learning initialement développé par Facebook et l’a entrainé avec des images MEB annotées par les chercheurs. L’architecture du réseau de neurone a également été revue pour gagner en efficacité avec une base de données réduite, indique Loïc Coquelin, ingénieur de recherche au LNE.
    Une centaine d’images réelles ont été utilisées, ainsi que 1000 images simulées. Ces dernières ont été produites en assemblant aléatoirement des photos de particules préalablement détourées. Une technique qui permet de facilement produire des agglomérats tout en connaissant les caractéristiques dimensionnelles des nanoparticules présentes dans l’image.
    <br><strong>S’adapter à d’autres nanomatériaux :</strong><br>
    « Dans un premier temps nous nous sommes concentré sur l’identification de nanoparticules de dioxyde de titane (TiO2), pour lesquelles il y a un véritable enjeu dans l’agroalimentaire [auparavant utilisé en tant que colorant, le TiO2 a été interdit dans les aliments en janvier 2020. La particule est donc sous surveillance, ndlr], met en avant Loïc Coquelin. Mais il sera possible d’adapter à court terme cette méthode à des particules possédant une géométrie proche du TiO2, comme la silice (SiO2), le chlorure de sodium (NaCl), ou encore l’or et l’argent. Il ne sera pas nécessaire de ré entrainer complétement le réseau pour ces matériaux. »
    Au-delà du développement de cet outil, le LNE travaille sur une méthode d’évaluation des incertitudes adaptée à l’utilisation du deep learning. « C’est un enjeu important pour établir des guides des références et une méthodologie. L’incertitude des résultats fournis par la plateforme doit être conforme à un certain standard, en tenant compte à la fois de l’incertitude de l’algorithme utilisé et de l’incertitude des données en entrée. C’est une information importante en métrologie. », explique Nicolas Fischer. Ces travaux sont menés par un doctorant, dans le cadre d’une collaboration avec l’Ecole Polytechnique.</p></li>
    <li><p><strong>Le groupe Renault :</strong><br> A mis au point l’IA Theïa, basée sur un réseau de neurones convolutif, qui analyse par l’image des cordons de soudure et aide les opérateurs à vérifier leur conformité. Cette IA doit cependant encore rassurer les qualiticiens avant d’être en mesure de traiter les soudures les plus critiques.</p><br>
      <img src="/img/renaut.png" alt="" width="100%"><br><br>
      <p><strong>Les avantages de la nanotechnologie :</strong><br>
En nanotechnologie : avantages, on peut citer quelques points essentiels. À travers sa grande révolution, on note que la nanotechnologie permet de solutionner certains problèmes dans plusieurs domaines. Dans le secteur industriel, par exemple, la nanotechnologie est efficace pour la fabrication de pneus, d’appareils mobiles ou encore d’articles électroménagers. En médecine, la nanotechnologie, à travers la nanoscience permet de cibler et de détruire des cellules cancéreuses. Dans le secteur de l’environnement, les produits de la nanotechnologie sont utilisés dans les actions d’assainissement et de décontamination. On peut aussi citer, en nanotechnologie : avantages, des résultats efficaces de la nanotechnologie dans les cosmétiques.<br> 
<strong>Les inconvénients de la nanotechnologie :</strong><br>
Même si on peut citer des résultats plausibles en nanotechnologie : avantages, on recense quand même certaines limites en nanotechnologie inconvénients. Les dangers de la nanotechnologie sont répartis en différents aspects, dont matériel, environnemental et physique. L’introduction de nanoparticules dans la société envahit, par exemple, les usages sociaux. Les nano-objets comme les puces peuvent, par exemple, intégrés des applications non souhaitées par l’utilisateur. En médecine, il se pourrait que les effets secondaires de la nanoscience ne soient pas tous maitrisés. Dans le domaine du cosmétique, l’utilisation des produits nanotechnologie peut aussi présenter des grands dangers.</p>
    </li>
  </ul>
</div>
<div class="w3-right-align"><p><i>Source: Feedly, Flux RSS</i></p></div>
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Me Contacter</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Palaiseau, France</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +33 7 52 04 88 75</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: yann.touassom@gmail.com</p>
    </div><br>
    <p>Laissez moi votre avis pour améliorer mon portfolio :</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <a href="mailto:yann.touassom@gmail.com"><i class="fa fa-paper-plane"></i> Envoyer avis</a>
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <p>Suivez moi :</p>
    <a href="https://www.facebook.com/touassom.yann" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/yann_.t/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/fr-FR" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="#" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/MrYanno73" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/yann-touassom-978522232/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js">
   </script>
   <script> 
      function download(){
          axios({
              url:'https://drive.google.com/file/d/1_MWr9tJWtbU05Dh7eZZgee-5RPx7DMn6/view?usp=sharing',
              method:'GET',
              responseType: 'blob'
      })
      .then((response) => {
             const url = window.URL
             .createObjectURL(new Blob([response.data]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', 'image.jpg');
                    document.body.appendChild(link);
                    link.click();
      })
      }
        
   </script>
</html>
