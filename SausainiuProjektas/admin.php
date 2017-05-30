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
				   <li><a href="logout.php">Atsijungti</a></li>
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
         <div id="admin">
		 
		 <h2 class="section-title">Vartotojų teisės</h2>
         <!-- CAROUSEL -->
        	<?php
					include "config.php";
					$sql = "SELECT * FROM member";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						while ($row = $result->fetch_assoc()) { ?>
		
							<table><p> <?php echo "Vartotojo ID: ". $row['mem_id']." ."; ?> <?php echo "Vardas: ". $row['username']." ."; ?> <?php echo "Teisės: ". $row['rights']."."; ?> </p>			
							<form method="Post" action="changeSQL.php">
							<input type="hidden" name="id" value=<?php echo $row['mem_id'];?>>
							<input type="radio" name="rights" value="administratorius">administratorius<br>
							<input type="radio" name="rights" value="rasytojas">rasytojas<br>
							<input type="radio" name="rights" value="skaitytojas">skaitytojas<br><br>
							<input type="Submit" value="Pakeisti teises"></table>	
							</form>	
								
								<?php }	
					}else {
						echo "<p>Irasu nera</p>"; } ?>
						
						
						 <h2 class="section-title">Laiškai</h2>
						<?php
						include "configcomment.php";
						$sql = "SELECT * FROM comments";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						while ($row = $result->fetch_assoc()) { ?>
		
							<table><p> <?php echo "Vardas: ". $row['username']." "; ?></br>
							<?php echo "El. paštas: ". $row['userEmail']." "; ?></br>
							<?php echo "Tekstas: ". $row['text']." "; ?></br>
							<?php echo "Data: ". $row['date']." "; ?><?php echo " ". $row['time']." ."; ?></p></table>		
							
							
								
								<?php }	
					}else {
						echo "<p>Irasu nera</p>"; } ?>
						
						
						
						
						
						
						</div>
						</section>
      </section>
      
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