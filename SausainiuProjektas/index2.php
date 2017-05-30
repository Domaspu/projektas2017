<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include "config.php";

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sausainiai Design</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
	  <link rel="stylesheet" href="css/images.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
	   
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>
	  <style> 
	  .left li{
			color: #ffffff;
	  }	  
	  
	  
	  </style>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <ul class="left">
				  <li>Vartotojas: <?php echo $_SESSION['username']; ?></li>
				  <li><a href="logout.php">Atsijungti</a></li>
				   <li> <?php
								if($_SESSION["rights"]== "administratorius"){
									echo '<li><a href="admin.php">Administratoriaus panelė</a></li>'; 
								} else {
									echo ''; }  ?></li>
				   </ul>
               </div>
               </div>
            </div>
         </div>
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>Sausainiai</strong>Design</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text"></p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Pagrindinis</a></li>
                     <li><a href="index2.php#features">Mes siūlome</a></li>
                     <li><a href="index2.php#about-us">Apie mus</a></li>
                     <li><a href="index2.php#our-work">Mūsų darbai</a></li>
                     <li><a href="index2.php#services">Paslaugos</a></li>
                     <li><a href="index2.php#contact">Kontaktai</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/sausainis1.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                       <!-- <div class="line">
                         <div class="prev-arrow hide-s hide-m"> 
                            <i class="icon-chevron_left"></i> 
                          </div> 
                         <!-- <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div> 
                        </div> -->
                       <!-- <h2>Free Onepage Responsive Template</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p> -->
                     </div> 
                  </div>
               </div>
               <div class="item">
                  <img src="img/sausainis7.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                       <!-- <div class="line">
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div>
                        <h2>Fap Fapp</h2>
                        <p>Fap Fapp is an app for men. Well, for women too! How to play: Shake your phone during 15 
						seconds at the speed of the light. The faster you move, the higher score you'll get. Save 
						your mark and check your position on the worldwide ranking.</p> -->
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/sausainis4.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                       <!-- <div class="line">
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div>
                        <h2>Rhythm</h2>
                        <p>Slider zoom effect</p> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <h1>Sausainis</h1>
               <p>Mažas konditerijos gaminys iškeptas iš miltų. 
			   Formuojami apskritimo, kvadrato, rombo, juostelių, 
			   žvaigždučių ir kitokiomis formomis. Į tešlą dėl skonio kartais dedami džiovinti vaisiai, 
			   riešutai, grūdai. Sausainiai gali būti kepami su šokoladiniu, kreminiu, 
			   aguoniniu ir kitais įdarais jų viduje arba tarp sausainių.</p>
               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Susisiekime</a></div>
            </div>
         </div>
         <!-- FEATURES -->
         <div id="features">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <img src="img/trapus.jpg" />
						 <h2>Trapūs sausainiai su prieskoniais ir riešutais</h2>
						 <p>Šie sausainiai lengvai pagaminami, gardūs ir lengvučiai. 
						 Sausainių receptas atkeliavo iš knygos „The Cardamom Trail“, 
						 kurios autorė – Indijoje gimusi, o šiuo metu Didžiojoje Britanijoje gyvenanti Chetna Makan,
						 sėkmingai pasirodžiusi britų TV šou-konkurse „The Great British Bake Off“. 
						 Jie rekomenduojami visiems, kam patinka naminiai kepiniai,
						 nustebinantys įdomiais deriniais ir šiltais egzotiškais prieskoniais. </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <img src="img/brutti.jpg" alt="Round Image JS Example" class="round-img" />  
						 <h2>Sausainiai „Brutti ma buoni“</h2>
						 <p>Šie itališki sausainiai, nėra išvaizdūs, 
						 tačiau labai skanūs! Itališkai jie taip ir vadinasi – brutti ma buoni, 
						 tai yra bjaurūs/negražūs, bet skanūs. Savo išvaizda jie kiek primena neaiškias rupaus smėlio ar žvyro krūveles
						 (priklaisomai nuo to, kiek smulkiai sumalti riešutai), 
						 tačiau užtenka atsikąsti tokio kepinuko ir darsyk supranti, 
						 kad ne visi geri dalykai šiame pasaulyje būtinai gražiai atrodo... 
						 Pagaliau, dar viena puiki šių sausainių savybė – jiems reikia vos kelių produktų.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <img src="img/linco.jpg" alt="Round Image JS Example" class="round-img" />  
						 <h2>Sausainiai „Linco širdelės“ </h2>
						 <p>Tradiciniai iš Austrijos kilę Linco sausainiai, 
						 populiarūs ne tik šioje šalyje, bet ir Vokietijoje, 
						 Šveicarijoje, Vengrijoje. Šis kepinys idealiai tinka šventei – 
						 sausainiai žaismingi, tačiau ir prabangūs, o jų skonis užburiantis. 
						 Tiesa, tenka pripažinti, jog darbo su jais nemažai – 
						 prireiks ir kantrybės, ir laiko</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <img src="img/graikiskas.jpg" alt="imgResize" class="round-img" />  
						 <h2>Graikiški Velykų sausainiai („Koulourakia“)</h2>
						 <p>„Koulourakia“ – tai tradiciniai graikiški sausainiai, dažniausiai kepami Velykoms. Tešlos pagrindą sudaro sviestas, viršus aptepamas kiaušinio plakiniu ir apibarstomas sezamo sėklomis. Sausainiai yra formuojami rankomis, susukant pynes ar žiedus. Tešla minkštesnė nei kitų sviestinių sausainių, o prieš formuojant nereikia palaikyti šaltai, tad užima mažiau laiko. </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- ABOUT US -->
         <div id="about-us">
            <div class="s-12 m-12 l-6 media-container">
               <img src="img/about1.jpg" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>Taip,<br> mes sausainiai!</h2>
               <p>Esame jauna, bet patyrusi sausainių kepėjų komanda. 
			   Šiame versle dirbame jau daugiau nei keturis metus. Per šį laiką mes 
			   iškepėm daugiau nei 30000 sausainių ir įgyvendinome įvairaus pobūdžio ir sudėtingumo projektus,
			   nuo sausainių iki keksiukų. Dirbame
			   ne tik su didžiausiomis Lietuvos įmonėmis, bet ir su JAV, Rusijoje, Baltarusijoje, Jungtinėje
			   Karalystėje ir Vokietijoje įsikūrusiomis įmonėmis.
               </p>
               <div class="about-us-icons">
                  <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
               </div>
            </article>
         </div>
         <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h2 class="section-title">Mūsų darbai</h2>
               <div class="margin">

					<div class="w3-content w3-display-container">
					  <img class="mySlides" src="img/mummy.jpg" style="width:100%">
					  <img class="mySlides" src="img/scary.jpg" style="width:100%">
					  <img class="mySlides" src="img/sexy.jpg" style="width:100%">
					  <img class="mySlides" src="img/mario.jpg" style="width:100%">
					  <img class="mySlides" src="img/funny_cookies2.jpg" style="width:100%">


					  <button class="w3-button w3-brown w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
					  <button class="w3-button w3-brown w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					
					<script>
						var slideIndex = 1;
						showDivs(slideIndex);

						function plusDivs(n) {
						  showDivs(slideIndex += n);
						}

						function showDivs(n) {
						  var i;
						  var x = document.getElementsByClassName("mySlides");
						  if (n > x.length) {slideIndex = 1}    
						  if (n < 1) {slideIndex = x.length}
						  for (i = 0; i < x.length; i++) {
							 x[i].style.display = "none";  
						  }
						  x[slideIndex-1].style.display = "block";  
						}
					</script>
				</div>

            </div>
         </div>
         <!-- SERVICES -->
         <div id="services">
            <div class="line">
               <h2 class="section-title">Paslaugos</h2>
               <div class="margin">
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-star"></i>
                     <div class="service-text">
                        <h3>Gimtadienis</h3>
                        <p></div>
                  </div>
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-eye"></i>
                     <div class="service-text">
                        <h3>Vestuvės</h3>
                        <p></div>
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom">
                     <i class="icon-heart"></i>
                     <div class="service-text">
                        <h3>Įmonių šventės</h3>
                        <p> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- LATEST NEWS -->
        
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Susisiekime</h2>
			        
               <div class="margin">
			   
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/kitchen.jpeg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>Sausainiai Design</h3>
                     <address>
                        <p><strong>Adresas:</strong> Ulonų g. 5 (5 aukštas), Vilnius</p>
                        <p><strong>Country:</strong> Lietuva</p>
                        <p><strong>E-mail:</strong> info@sausainiai.lt</p>
                     </address>
                     <br />
                     <h3>Social</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Sausainiai-Design">Sausainiai Design</a></p>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/Sausainiai-Design">Sausainiai Design</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/Sausainiai-Design">Sausainiai Design</a></p>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>Susisiekite su mumis</h3>
					 <p class="actions" color="red" style="color:red;">Kad rašytumėte, turite prisijungti</p>              
              
                    <form class="customform" action="">
                      <div class="s-12"><input name="" placeholder="Jūsų el. paštas" title="Your e-mail" type="text" /></div>
                      <div class="s-12"><input name="" placeholder="Jūsų vardas" title="Your name" type="text" /></div>
                      <div class="s-12"><textarea placeholder="Jūsų žinutė" name="" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Siųsti</button></div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAP -->
         <div id="map-block">
            <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=54.7099%2C25.2923&key=AIzaSyA9N8IPog1H9Y-42zkZRpqN_OIHuIhEkTY"allowfullscreen></iframe>
         </div>
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, Sausainiai Design</p>              
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.sausainiaidesign.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Sausainiai Team</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });

            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })
        });
      </script>
   </body>
</html>