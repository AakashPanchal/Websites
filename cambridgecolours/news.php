<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>News</title>
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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	  
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
<?php

include("header.php");

?>
      <section>
<div id="head">
            <div class="line">
               <h1>News</h1>
            </div>
         </div>			 
         <div id="content">
            <div class="line">
			<div class="container">
			
			<div class='alert alert-success'><strong>Notification : </strong>The PTM for the month will be on 30th December 2017 from 10.30 AM to 12.30 PM</div>
			
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home"><b>Latest News</b></a></li>
    <li><a data-toggle="pill" href="#menu1"><b>All News</b></a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Latest News</h3>
	  <p><b><font size="6">16, Dec 2017</font></b></p>
	  <p><b><font size="4">Children s Hea lth</font></b></p>
	  <p><font size="3">Cambridge Colours is on a unique endeavour to bring together education and children’s health on one platform. 
						We believe that one is incomplete without the other and pre-school as an institution is the right place to begin such an effort.
						A healthy body su</font></p>  
	  
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>All News</h3>
	<fieldset>
      <p><b><font size="6">16, Dec 2017</font></b></p>
	  <p><b><font size="4">Children s Hea lth</font></b></p>
	  <p><font size="3">Cambridge Colours is on a unique endeavour to bring together education and children’s health on one platform. 
						We believe that one is incomplete without the other and pre-school as an institution is the right place to begin such an effort.
						A healthy body su</font></p>
						</fieldset>
    </div>
</div>
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <p><b><font size="6">Gallery</font></b></p>
               <p class="subtitile"><font size="4">Cambridge Colours International is an elementary education initiative from Education and Health International, 
									an Education and Training organization.</font>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="gallery/12.jpg">      
                     
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="gallery/11.jpg">      
                     
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="gallery/26.jpg">      
                     
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="gallery/23.jpg">      
                     
                  </div>
               </div>
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