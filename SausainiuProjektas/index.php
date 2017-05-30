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
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <ul class="left">
				  <li><a href="Login.php">Prisijungti</a></li>
				  <li><a href="SignUp.php">Registruotis</a></li>
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
                     <li><a href="index.php#features">Mes siūlome</a></li>
                     <li><a href="index.php#about-us">Apie mus</a></li>
                     <li><a href="index.php#our-work">Mūsų darbai</a></li>
                     <li><a href="index.php#services">Paslaugos</a></li>
                     <li><a href="index.php#contact">Kontaktai</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <!-- CAROUSEL -->
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
               <h1>Amazing Responsive Business Template</h1>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Susisiekime</a></div>
            </div>
         </div>
         <!-- FEATURES -->
         <div id="features">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-tablet icon3x"></i>
                     <h2>Geros kainos garantiją</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-isight icon3x"></i>
                     <h2>Funkcionalumą</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-star icon3x"></i>
                     <h2>Tvarkinga kodą</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-heart icon3x"></i>
                     <h2>Nepriekaištingą dizainą</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nonummy.</p>
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
               <p>Per visą įmonės veiklos laikotarpį įgyvendinome įvairaus pobūdžio ir sudėtingumo projektus,
			   nuo korporatyvinių interneto svetainių iki individualių ir specializuotų web sprendimų. Dirbame
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
					  <img class="mySlides" src="img/img2.jpg" style="width:100%">
					  <img class="mySlides" src="img/img3.jpg" style="width:100%">
					  <img class="mySlides" src="img/img4.jpg" style="width:100%">
					  <img class="mySlides" src="img/img5.jpg" style="width:100%">
					  <img class="mySlides" src="img/img6.jpg" style="width:100%">

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
                     <i class="icon-vector"></i>
                     <div class="service-text">
                        <h3>Mes</h3>
                        <p>esame jauna, bet patyrusi internetinių svetainių kūrėjų komanda. 
						Šiame versle dirbame jau daugiau nei keturis metus. Per šį laiką mes 
						užbaigėme daugiau nei 300 projektų. Pagrindinės mūsų paslaugos yra 
						elektroninių parduotuvių kūrimas, bei reprezentacinių svetainių kūrimas. 
						Taip pat dirbame internetinio marketingo srityje, žinoma kaip SEO.</div>
                  </div>
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-eye"></i>
                     <div class="service-text">
                        <h3>SEO paslaugos</h3>
                        <p>Per ilgą darbo patirtį sukaupėme daugybę internetinio marketingo ir SEO 
						žinių bagažą. Turime didžiulius resursus, galinčius pakelti jūsų verslą į 
						Google TOP10. SEO pripažinta pačia efektyviausia reklamos forma gyvuojančia 
						internete. Dauguma specialistų tvirtina jog jeigu jūsų nėra Google paieškoje, 
						vadinasi jūsų verslas dar neegzistuoja. Kviečiame jus įsitikinti interneto efekto 
						jėga Jūsų verslui.</div>
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom">
                     <i class="icon-random"></i>
                     <div class="service-text">
                        <h3>Svetainės reklama</h3>
                        <p>Susikūrus efektyvią svetainę, liko paskutinis žingsnis, tai padaryti jūsų 
						veidą matomą internete. Daugumai klientų tai atrodo visiškai nesuprantamas etapas, 
						tačiau mes esama profesionalai marketingo pasaulyje, dirbame jau virš 5 metų. Nešame 
						savo klientams vartotojus, skambučius ir žinoma užsakymus. Kaip mes ta padarome 
						negalime atskleisti, tačiau ką galiu pasakyti tai jog konsultacijos metu gausite išsamią 
						informacija kur naudosime jūsų pinigus ir kiek rezultato tai atneš. </div>
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
                    <img src="img/contact.jpg" alt="">
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