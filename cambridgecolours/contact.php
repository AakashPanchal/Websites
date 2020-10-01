<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Contact</title>
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
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
  <?php
  
  include("header.php");
  
  
  ?>
      <section>
         <div id="head">
            <div class="line">
               <h1>CONTACT US</h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
           
			<div class="line">

               <div class="margin">
                  <div class="s-12 l-6">
                     <h2>Cambridge Colors International</h2>
                     <address>
                        <p><i class="icon-home icon"></i>Plot# 159, Block C-8, Opp. Bank of Baroda, Sector - 17, Dwarka</p>
                        <p><i class="icon-globe_black icon"></i>New Delhi-INDIA</p>
						<p><i class="icon-sli-phone icon"></i>+91-81305 30598,+91-79788 25804</p>
                        <p><i class="icon-mail icon"></i>info@cambridgecolours.com</p>
                     </address>
                     <br />
                     <h2>Social</h2>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/cambridgecolours/">Cambridge Colours</a></p>
                     <p><i class="icon-sli-social-linkedin"></i> <a href="https://www.linkedin.com/pulse/cambridge-colours-preschool-awaits-you-passionate-anju-mehta">Cambridge Colours</a></p>
                     <!--<p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="#">Cambridge Colours</a></p>-->
                  </div>
                  <div class="s-12 l-6" >
                     <h2>Contact US</h2>
                     <form class="customform" action="contactmail.php" method="post">
                        <div class="s-12 l-7"><input name="contact_email" placeholder="Your e-mail" title="Your e-mail" type="text" required="required" /></div>
                        <div class="s-12 l-7"><input name="contact_name" placeholder="Your name" title="Your name" type="text" required="required" /></div>
						<div class="s-12 l-7"><input name="csubject" placeholder="Subject" title="csubject" type="text" required="required" /></div>
                        <div class="s-12"><textarea placeholder="Your massage" name="contact_message" rows="5" required="required"></textarea></div>
                        <div class="s-12 m-6 l-4"><button type="submit" name="submit" value="submit" >Submit</button></div>
                     </form>
                  </div>
				  
               </div>
            </div>
         </div>
         <!-- MAP -->	
         <div id="map-block">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d112107.56633015336!2d76.9602416338311!3d28.58893161223946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390d1ab9263cd38d%3A0xd81954da374cdeb3!2scambridgecolours!3m2!1d28.5889496!2d77.03028189999999!5e0!3m2!1sen!2sin!4v1529996254978" width="100%" height="450" frameborder="0" style="border:0"></iframe>
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
