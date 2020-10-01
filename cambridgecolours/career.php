<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>CAREERS</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">	  
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
<?php

include("header.php");

?>
      <section>
         <div id="head">
            <div class="line">
               <h1>CAREERS</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
			<p><b><font size="4">ARE YOU READY TO CHANGE A CHILD'S LIFE TODAY? Join our team.</font></b></p><br><br>
               <p><font size="3">Cambridge ColorsPreschools offer a warm, fun, inviting, safe environment. They are designed this way not only for our children and our families, but also for our people.<br>
								We offer an enjoyable, team-oriented, challenging, yet supportive setting, where we all work together toward the betterment of each and every child in our preschool. 
								A place where every day we do the most important job in the world, and we all proudly help children to succeed.</font></p><br>
						<a class="button rounded-btn submit-btn s-12 l-4 center" href="contact.php"><i class="icon-sli-login icon2x"></i>Contact us today</a>			

            </div>
         </div>
      </section>
      <!-- FOOTER -->   
<?php

include("footer.php");

?>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });	
          
      </script>  
   </body>
</html>