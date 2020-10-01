<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>HEALTH</title>
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
               <h1>CHILDREN'S HEALTH</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <p><font size="4">Cambridge Colours is on a unique endeavour to bring together education and children’s health on one platform. We believe that one is incomplete without the other and pre-school as an institution is the right place to begin such an effort. A healthy body supports successful learning as much as successful learning supports good health.<br><br>

									Cambridge Colours leadership is working towards a unique but targeted effort of creating a common forum for Educationists, Healthcare Professionals and Special Educators to bring the best internationalpractices to our students.<br>

									Our ultimate mission is to provide a healthy learning environment to all the children under its umbrella through empowerment of our teachers with research-based teaching skills and enriching parents with awareness. <br>

									lease watch this space as we continue to develop this forum.</font></p>
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