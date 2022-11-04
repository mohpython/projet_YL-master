<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="png" href="assets/images/icon/favicon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Comaptible" content="IE=edge">
  <title>E-kalanso</title>
  <meta name="desciption" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="foot.css">
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="foot.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script>
    $(window).on('scroll', function(){
        if($(window).scrollTop()){
          $('nav').addClass('black');
       }else {
       $('nav').removeClass('black');
     }
    })
  </script>
 

  <!-- Favicons -->
  <link href="assets/img/ch.png" rel="icon">
  <link href="assets/img/ch.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

    <body>
      <!-- Navigation Bar -->
	
      <header id="header">
		<nav>
			<!-- === C'EST LA PARTIE NAVBAR====== -->
			<div class="logo"><img src="assets/images/icon/Sans titre-1.jpg" alt="logo"></div>
			<ul>
				<li><a class="active" href="index.php">Accueil</a></li>
				<li><a href="subjects/formation.php">Formations</a></li>
				<li><a href="pub.php">À LA UNE</a></li>
				<li><a href="inscrit/index.php">Certification</a></li>
				<li><a href="about.php">A-propos</a></li>
			
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Rechercher ici..."><img src="assets/images/icon/search.png" alt="Rechercher" onclick=slide()></div>
			<a class="get-started" href="inscrit/index.php">Inscrivez-vous</a>
			<img src="assets/images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>


	   <!--<div class="head-container">
		<div class="quote">
				<p>"L'école de l'innovation et de la créativité Malienne".</p>
				<h4>Avec e-kalanso, c'est l'accessibilté total de l'éducation partout pour tout le monde! </h4>
				<div class="play"> 				
					
					<img src="assets/images/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Regarder Maintenant</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="assets/images/extra/acceuil1.png" alt="svg">
			</div>
			<div class="test">
				<h1> CECI EST UN TEXT DE SEPARATION</h1>
			</div>
		</div>-->
    <div class="head-container">
		
		</div>

     <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <img src="assets/assets/images/about-banner.jpg" width="450" height="590" loading="lazy" alt="about banner"
              class="w-100 about-img">

            <img src="assets/assets/images/about-abs-1.jpg" width="188" height="242" loading="lazy" aria-hidden="true"
              class="abs-img abs-img-1">

            <img src="assets/assets/images/about-abs-2.jpg" width="150" height="200" loading="lazy" aria-hidden="true"
              class="abs-img abs-img-2">

          </figure>

          <div class="about-content">

          <p class="section-subtitle">Que faisons-nous</p>

          <h2 class="h2 section-title">Nous offrons les meilleures Cours</h2>

            <ul class="about-list">

              <li class="about-item">

                <div class="item-icon item-icon-1">
                  <img src="assets/assets/images/about-icon-1.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Des experts Formateurs</h3>

                  <p class="item-text">
                  Nos professeurs en ligne, sélectionnés pour leurs compétences et bienveillance, vous aident à vous améliorer et à atteindre vos objectifs de réussite.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-2">
                  <img src="assets/assets/images/about-icon-2.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Des contenus pédagogiques</h3>

                  <p class="item-text">
                  La méthode expositive considère que la connaissance est un savoir et qu’elle est bénéfique aux apprenants. De même, qu’elle assimile le travail à un savoir-faire qui est profitable aux stagiaires. Enfin, elle assigne des rôles précis au formateur/enseignant et à l’apprenant. Le premier détient tout le savoir tandis que le second est totalement ignorant et doit tout apprendre.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-3">
                  <img src="assets/assets/images/about-icon-3.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Certificat reconnu</h3>

                  <p class="item-text">
                  La majorité des cours en ligne sont assez similaires aux cours proposés dans les universités. Cela indique que cette plateforme garantit une éducation de qualité supérieure. En utilisant la plate-forme ekalanso, les étudiants peuvent même obtenir des certifications techniques ou ils peuvent également obtenir une maîtrise dans n'importe quelle matière d'une école accréditée.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Rejoindre Notre Communauté</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>



    
                <!-- ===============================CONTACTER NOUS========================================= -->
	
              <!-- 
        - #CTA
      -->

      <section class="section cta" aria-label="workshop" style="background-image: url('./assets/images/extra/hero-abs-1')">
        <div class="container">

          <figure class="cta-banner">
            <img src="assets/images/extra/hero-banner.png" width="580" height="380" loading="lazy" alt="cta banner"
              class="img-cover">
          </figure>

          <div class="cta-content">

            <p class="section-subtitle">Free Workshop</p>

            <h2 class="h2 section-title">Join Our Free Workshops</h2>

            <p class="section-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit amet, consect adipi scing elit, sed do
              eiusmod tempor
              incididunt ut sed do eiusmod tempor incididunt ut labore et dolore aliqua.
            </p>

            <a href="#" class="btn btn-secondary">
              <span class="span">Upcomming Workshop</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event" id="event" aria-label="event">
        <div class="container">

          <p class="section-subtitle">Upcomming Event</p>

          <h2 class="h2 section-title">Let’s Join Our Community</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/event-1.jpg" width="370" height="250" loading="lazy"
                    alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-12-04">04 Dec 2022</time>

                <div class="card-content">

                  <address class="card-address">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Alpaca Way Anaheim, CA 92805</span>
                  </address>

                  <h3 class="h3">
                    <a href="#" class="card-title">Innovation & Technological Entrepreneurship Team</a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span class="span">Get Ticket</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/event-2.jpg" width="370" height="250" loading="lazy"
                    alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-10-30">30th Oct 2022</time>

                <div class="card-content">

                  <address class="card-address">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Ritter Avenue Detroit, MI 48226</span>
                  </address>

                  <h3 class="h3">
                    <a href="#" class="card-title">Virtual Spring Part-time Jobs Fair for Student</a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span class="span">Get Ticket</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/event-3.jpg" width="370" height="250" loading="lazy"
                    alt="Explorations of Regional Chief Executive Network" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-09-18">18th Sep 2022</time>

                <div class="card-content">

                  <address class="card-address">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Stout Street York, PA 17401</span>
                  </address>

                  <h3 class="h3">
                    <a href="#" class="card-title">Explorations of Regional Chief Executive Network</a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span class="span">Get Ticket</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter"
        style="background-image: url('./assets/images/newsletter-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">Subscribe Newsletter</p>

          <h2 class="h2 section-title">Get Every Latest News</h2>

          <form action="" class="newsletter-form">

            <div class="input-wrapper">
              <input type="email" name="email_address" aria-label="email" placeholder="Enter your mail address" required
                class="email-field">

              <ion-icon name="mail-open-outline" aria-hidden="true"></ion-icon>
            </div>

            <button type="submit" class="btn btn-primary">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER test
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">EKALANSO</a>

          <p class="section-text">
		  E-kalanso est place une plateforme d’apprentissage en ligne(e-learning) dont l’accès est public c’est-à-dire tout le monde peut apprendre et quiconque souhaite se former, acquérir de nouvelles compétences ou améliorer celles qu’il a déjà peut opter pour une formation.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Social</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Apropos</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">facebook</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Telegram</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">twitter</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">linkedin</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Privacy Policy</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Super Liens</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Contact</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Certification</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Formateur</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">FAQ</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Cours</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Termes & Conditions</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Info</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

            <address class="footer-link">
              Hamdallaye ACI 2000 IMM.BALDE BKO-MALI
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657839" class="footer-link">+22378309046</a>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657840" class="footer-link">+22378309046</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:contact@eduhome.com" class="footer-link">ekalanso22@gmail.com</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          Copyright 2022 EKALANSO. Tout droit réservé  <a href="#" class="copyright-link">younglabs</a>
        </p>
      </div>

    </div>
  </footer>
  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>
   <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- FOOTER 
	<footer>
		<div class="footer-container">
			<div class="left-col">
			
				<img src="assets/img/logo/logg.png" style="width:150px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="assets/images/icon\fb.png"></a>
					<a href="#"><img src="assets/images/icon\insta.png"></a>
					<a href="#"><img src="assets/images/icon\tt.png"></a>
					<a href="#"><img src="assets/images/icon\ytube.png"></a>
					<a href="#"><img src="assets/images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2021 Created by younglabs! Tout droit réservé</p>
				<br><p><img src="assets/images/icon/location.png"> e-kalanso<br>Hamdallaye ACI 2000</p><br>
				<p><img src="assets/images/icon/phone.png"> +22378309046<br><img src="assets/images/icon/mail.png">&nbsp; ekalanso@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Votre message</h1>
				<div class="border"></div><br>
				<p>Donnez votre email</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>-->

       
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>