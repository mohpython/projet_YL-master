<!DOCTYPE html>
<html>
<head>
	<!--============DEBUTS DES LIENS DE NOS PARTENAIRES================== -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<!--===================FINS DES LIENS DE NOS PARTENAIRES============== -->
	<link rel="shortcut icon" type="png" href="assets/images/icon/pn.png">
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
 
</head>
<body>
	
<!-- Navigation Bar -->
	
      <header id="header">
		<nav>
			<!-- ======================== DEBUT DE LA PARTIE NAVBAR ========================= -->
			<div class="logo"><img src="assets/images/icon/Sans titre-1.jpg" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Accueil</a></li>
				<li><a href="subjects/formation.php">Formations</a></li>
				<li><a href="pub.php">À LA UNE</a></li>
				<li><a href="inscrit/index.php">Certification</a></li>
				<li><a href="about.php">A-Propos</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Rechercher ici..."><img src="assets/images/icon/search.png" alt="Rechercher" onclick=slide()></div>
			<a class="get-started" href="inscrit/index.php">Inscrivez-vous</a>
			<img src="assets/images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
	   <div class="head-container">
		<div class="quote">
				<p>"L'école de l'innovation et de la créativité Malienne".</p>
				<h4>Avec e-kalanso, c'est l'accessibilté total de l'éducation partout pour tout le monde! </h4>
				<div class="play"> 	
								
					<!-- =====================le petit bouttoun play=====================-->
					<img src="assets/images/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Regarder Maintenant</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="assets/images/extra/acceuil1.png" alt="svg">
	</div>
    <!-- ================= ICI C'EST LA PARTIE TELEPHONE ======================= -->
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="assets/images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="assets/img/logo/logg.png" alt="Username">
				<p>E-Kalanso</p>
			</div>
			<ul>
			<li><a class="active" href="">Accueil</a></li>
				<li><a href="subjects/formation.php">Formations</a></li>
				<li><a href="pub.php">À LA UNE</a></li>
				<li><a href="inscrit/index.php">Certification</a></li>
				<li><a href="about.php">A Propos</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</header>
			  <!--==================FIN DE HEADER================================= -->

<!--==================DEBUT DE LA PARTIE DE NOS PARTENAIRES ======================== -->
    <section id="clients" class="section-bg">

      <div class="container">
	
        <div class="section-header">
          <h3>NOS PARTENAIRES</h3>
          <p>Ces instituts nous font confiance</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="http://www.malischool.org/faculte-des-sciences-economiques-et-de-gestionfseg/"><img src="assets/images/clients /fseg.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="http://www.groupehetec.net/Bamako"><img src="assets/images/clients /hetec.png" class="img-fluid" alt=""></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://edukiya.com/fiche/isim-institut-superieur-dinformatique-et-de-management-mali/"><img src="assets/images/clients /isim.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://fmos.usttb.edu.ml"><img src="assets/images/clients /fmos.png" class="img-fluid" alt=""></a>
            </div> 
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://fama-univ-segou.com"><img src="assets/images/clients /fama.png" class="img-fluid" alt=""></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://esgicbamako.com"><img src="assets/images/clients /esgic.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://www.eni-abt.ml"><img src="assets/images/clients /eni.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://www.ipr-ifra.edu.ml/wordpress/annexe-ipr/"><img src="assets/images/clients /ipr.jpg.webp" class="img-fluid" alt=""></a>
            </div>
          </div>

        </div>
      </div>
    </section>
	<!--==================FIN DE LA PARTIE DE NOS PARTENAIRES ======================== -->

			<!--==================DEBUT DE LA PARTIE LES SUJETS FREQUENTS ========================-->
    
	<div class="title">
		<span style="color:#046aa7"> LES SUJETS FREQUENTS SUR E-kalanso</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/formation.php"><img src="assets/images/courses/book.png">Matiers Scientifiques</a></div>
		<div class="det"><a href="subjects/gate.php"><img src="assets/images/courses/d1.png">Médecine</a></div>
		<div class="det"><a href="subjects/formation.php#sample_papers"><img src="assets/images/courses/paper.png">Littératures</a></div>
		<div class="det"><a href="subjects/quiz.php"><img src="assets/images/courses/d1.png">Quiz</a></div>
		</div></center><div class="cbox">
		
		<div class="det"><a href="subjects/computer_courses.php"><img src="assets/images/courses/computer.png">Informatique</a></div>
		<div class="det"><a href="subjects/computer_courses.php#data"><img src="assets/images/courses/data.png">Economies</a></div>
		<div class="det"><a href="subjects/computer_courses.php#algo"><img src="assets/images/courses/algo.png">Algorithmes</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.php#projects"><img src="assets/images/courses/projects.png">Projets</a></div>
		</div>
	</div>

    	<!-- =========================ABOUT=========================== -->

	<div class="diffSection" id="about_section">

		<center> <div class ="pablo"><img src="assets/images/icon/Sans titre-1.jpg"></div> </center>
		<!--<center><p style="font-size: 50px; padding: 100px">E-KALANSO</p></center> -->
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="assets/images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2 style="color:#fff">C'EST QUOI E-Kalanso?</h2>
					<p style="color:#fff">E-kalanso est place une plateforme d’apprentissage en ligne(e-learning) dont l’accès est public c’est-à-dire tout le monde peut apprendre et quiconque souhaite se former, acquérir de nouvelles compétences ou améliorer celles qu’il a déjà peut opter pour une formation.</p>
				</div>
		</div>
	</div>

					<!--=======================DEBUT DE LA PARTIE DE NOS PARTENAIRES======================== -->
	<!--<div class="morph">	
	<div class="zoom d-flex justify-content-center">
	<div class="p-2 m-2"><img src="assets/images/clients /eni.jpg" alt="" /></div>
	<div class="p-2 m-2"><img src="assets/images/clients /esgic.png" alt="" /></div>
	<div class="p-2 m-2"><img src="assets/images/clients /fama.png" alt="" /></div>
	<div class="p-2 m-2"><img src="assets/images/clients /fseg.png" alt="" /></div>
	<div class="p-2 m-2"><img src="assets/images/clients /mda.jpeg" alt="" /></div>
</div>
	</div>-->

	<!--=======================FIN DE LA PARTIE DE NOS PARTENAIRES======================== -->

          <!-- =================================================TEAM================================================-->
	<!--<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px; color:#58aee1">Les Pros Nous Font Confiance</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="assets/images/creator/roshan1.jpeg"></center>
				<center><div class="card-title">Cheik Oumar Doumbia</div>
				<div id="detail">
					<p>“ Je tiens a remercier le developpeur de l'application e-kalanso, car il nous aide dans notre travail, en nous informant des dates et heurs des examens en suivant la progression de l'enseignement au Mali c'est une très bonnes initiaitive.“</p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-roshan">Suivre +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="assets/images/creator/roshan2.jpeg"></center>
				<center><div class="card-title">Mariam Fofana</div>
				<div id="detail">
					<p>“ Avec le e-akalanso chaque malien à le droit d'etudier hors de la classe. cette application est riche en leçons, en astuces et tutoriels qui sont des facteurs capitales dans notre apprentissages. “</p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-akhil">Suivre +</button></a>
				</div>
				</center>
			</div>

		 	<div class="card">
				<center><img src="assets/images/creator/humanNotExist4.jpg"></center>
				<center><div class="card-title">Mariam Fofana</div>
				<div id="detail">
					<p>“ Avec le e-akalanso chaque malien à le droit d'etudier hors de la classe. cette application est riche en leçons, en astuces et tutoriels qui sont des facteurs capitales dans notre apprentissages.“ </p>
					<div class="duty"></div>
					<a href="" target="_blank"><button class="btn-akhil">Suivre +</button></a>
		</div>
	</div>
	</div>
	</div>-->

			<!-- ===============================SERVICES======================================================= -->
	
<!--<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.php"><div class="s-card"><img src="assets/images/icon/computer-courses.png"><p>Des Cours Gratuits</p></div></a>
		<a href="subjects/formation.php"><div class="s-card"><img src="assets/images/icon/brainbooster.png"><p>Les Examens Préparatoires</p></div></a>
		<a href="#"><div class="s-card"><img src="assets/images/icon/online-tutorials.png"><p>Des Cours Vidéos</p></div></a>
		<a href="subjects/formation.php#sample_papers"><div class="s-card"><img src="assets/images/icon/papers.jpg"><p>Des Exercices Corrigés</p></div></a>
		<a href="#"><div class="s-card"><img src="assets/images/icon/p3.png"><p>Les stages en ligne</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="assets/images/icon/discussion.png"><p>Discussion avec Vos professeurs</p></div></a>
		<a href="subjects/quiz.php"><div class="s-card"><img src="assets/images/icon/q1.png"><p>participez aux quiz</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="assets/images/icon/help.png"><p>24x7 Support en ligne</p></div></a>
	</div>-->

				<!-- ====================================Reviews by Students=============================== -->

	<!--<div id="makeitfull">
	<a href="#review_section"><img src="assets/images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">Ce que les etudiants pense de E-KALANSO?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist1.jpg"><p>Hawaou Fofana</p>
				<h6>Java</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist2.jpg"><p>Clayton Clair</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist3.jpg"><p>Devyn Sethi</p>
				<h6>JEE</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					LearnEd was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="assets/images/creator/humanNotExist4.jpg"><p>Rylee Phillips</p>
				<h6>Python</h6>
				<div class="rating"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"><img src="assets/images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>-->

                <!-- ===============================CONTACTER NOUS========================================= -->
	
				<!--<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contactez-Nous</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:ekalanso22@gmail.com" method="post" enctype="text/plain">
				<label>Nom <span class="imp">*</span></label><label style="margin-left: 185px">Prénom <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Votre Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Détails</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Envoyer</button>
			</form>
			</div>
		</div>
	</div>-->


				<!-- =================================FEEDBACK================================== -->
	
				<!--<div class="title2" id="feedBACK">
		<span>Donnez votre Feedback</span>
		<div class="shortdesc2">
			<p>Veuillez donnez votre Avis , ça compte beaucoup!!!!</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:ekalanso22@gmail.com" method="post" enctype="text/plain">
				<label>Nom</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Détails</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Envoyer</button>
			</form>
		</div>
	</div>-->

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to  left, #58aee1, #046aa7); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"L'éducation est l'arme la plus puissante qu'on puisse utiliser pour changer le monde (NELSON MANDELA)" &&&& " L'éducation est un progrès social ...L'éducation est non pas une préparation à la vie, l'éducation est la vie même (JOHN DEWEY)</div></marquee>


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



	<!-- FOOTER -->
	<!--<footer>
		<div class="footer-container">
		<div class="feedbox1">
			<div class="left-col">
			<div class="logo"><img src="assets/images/icon/Sans titre-1.jpg" alt="logo"></div>
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
			
			<!--<div class="right-col">
				<h1 style="color: #fff">Votre message</h1>
				<div class="border"></div><br>
				<p>Donnez votre email</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Entrez votre mail">
					<input class="btn" type="submit" value="Envoyer">
				</form>
			</div>-->
		</div>
	</div>
	</footer>-->

</body>
</html>