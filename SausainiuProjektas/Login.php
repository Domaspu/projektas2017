<?php
session_start();
$error = null;
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Sausainiai Design</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
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
                     <li><a href="index.php#carousel">Pagrindinis</a></li>
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
	  <br>
      <section>         
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Prisijungti</h2>
		
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">                    
                  </div>                  
                  <div class="s-12 m-12 l-5">                    
                    <form class="customform" method="post" action="Login-php.php">
                      <div class="s-12"><input name="username" placeholder="Vartotojo vardas" title="username" type="text" /></div>
                      <div class="s-12"><input name="password" placeholder="Vartotojo slaptažodis" title="password" type="password" /></div>                      
                      <div class="s-12 m-12 l-4"><button class="color-btn" name="submit" type="submit">Prisijungti</button></div>
                    </form>
                  </div>
               </div>
            </div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
        
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