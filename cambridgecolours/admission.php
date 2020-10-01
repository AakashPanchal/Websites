<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admission</title>
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
   
   <style type="text/css">
.captcha
{
width:60px; 
background-image:url(cat.png); 
font-size:20px; 
border: 1px solid;
}
.color
{
	color:#FF0000;
}

.changeonfocus:focus{
   background-image: url('img/330x190-3.jpeg');
}

</style>
   
   
      <!-- TOP NAV WITH LOGO -->  
<?php

include("header.php");

?>
      <section>
         <div id="head">
            <div class="line">
               <h1>ADMISSIONS</h1>
            </div>
         </div>
		  <div id="content" class="left-align contact-page">
           
			<div class="line">
			



		 <?php
			if(isset($_POST['submit']))
			{
			

			}


			//Random Number Generation
			$rand=substr(rand(),0,4); //only show 4 numbers

			?>


<fieldset>
		<div class="margin">
                  <div class="s-12 l-6">
				  
				       <h2>Information related to the child:</h2>
                     <form class="customform" method="post" name="form1" action="admissionmail.php" >
					 <p>Programmes:</p>
						<div class="s-12 l-7">
						<select name="programme" required >
						<option value="">Select Programme</option>
						<option value="Li’l Munchkins (1.5 - 2.5 years)">Li’l Munchkins (1.5 - 2.5 years)</option>
						<option value="Aqua Turtles (2.5 - 3.5 years)">Aqua Turtles (2.5 - 3.5 years)</option>
						<option value="The Humming Birds (3.5 - 4.5 years)">The Humming Birds (3.5 - 4.5 years)</option>
						<option value="The Highlanders (4.5 – 5.5 years)">The Highlanders (4.5 – 5.5 years)</option>
						<option value="Prarambh (Mother Toddler Programme)">Prarambh (Mother Toddler Programme)</option>
						<option value="Eden Gardens (1.5 - 8 years)">Eden Gardens (1.5 - 8 years)</option>
						<option value="Vibrance: After School Programme">Vibrance: After School Programme</option>
						</select></div>
						
						<div class="s-12 l-7"><label>Full Name</label><input name="name" placeholder="Full name" title="full name" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Date Of Birth</label><input type="date" name="dob" required="required"></div>
						<div class="s-12 l-7"><label>Age</label><input type="number" name="age" placeholder="Age" min="" max="" required></div>
						<div class="s-12 l-7"><label>Gender</label>
						<select name="gender" >
						<option value="">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></div>
						<div class="s-12"><label>Address</label><textarea placeholder="Address" name="add" rows="5" required="required"></textarea></div>
						<hr>
						<div class="s-12 l-7"><h2>More Info about your child:</h2></div>
                        <div class="s-12 l-7"><label>Strong points of your child</label><input name="strong" placeholder="Strong points of your child" title="Strong points of your child" type="text" required="required" /></div>
                        <div class="s-12 l-7"><label>Areas that need attention</label><input name="area" placeholder="Areas that need attention" title="Areas that need attention" type="text" required="required" /></div>
						<hr>
						<div class="s-12 l-7"><h2>Information Related To The Participant’s Parent:</h2></div>
						<div class="s-12 l-7"><label>Relation</label><input name="relation" placeholder="Relation" title="Relation" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Age</label><input type="number" name="p_age" min="" max="" placeholder="Age"></div>
						<div class="s-12 l-7"><label>Name</label><input name="pname" placeholder="Full name" title="full name" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Profession</label><input name="profession" placeholder="Profession" title="profession" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Email</label><input name="email" placeholder="Email ID" title="profession" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Phone</label><input name="phone" placeholder="Phone Number" title="phone" type="text" required="required" /></div>
						<div class="s-12 l-7"><label>Captcha</label><input name="chk" placeholder="Captcha Code" title="security" type="text" required="required" id="chk"/>
						
						<input type="text" value="<?=$rand?>" id="ran" readonly="readonly">
						<div>
						<span id="error" class="color"></span>
						</div>
						<input type="button" value="Refresh Code" onclick="captch()" /></div>
                        <div class="s-12"><br></div>
                        <div class="s-12 m-6 l-4"><button type="submit" name="submit" value="submit" onclick="return validation();">Submit Application</button></div>
                     </form>
					 </fieldset>
                  </div>
				  
               </div>
            </div>
         </div>
		 


<!-- HTML Form -->
<!-- End Form -->




<script type="text/javascript">

//Javascript Referesh Random String

function captch() {
    var x = document.getElementById("ran")
    x.value = Math.floor((Math.random() * 10000) + 1);
}

//Javascript Captcha validation


function validation()
{

if(document.form1.name.value=="")
{
document.getElementById("name").innerHTML="Enter your Name!";
document.form1.name.focus();
return false;
}

if(document.form1.chk.value=="")
{
document.getElementById("error").innerHTML="Enter Captcha!";
document.form1.chk.focus();
return false;
}


if(document.form1.ran.value!=document.form1.chk.value)
{
document.getElementById("error").innerHTML="Captcha Does Not Matched!";
document.form1.chk.focus();
return false;
}

return true;
}



</script>

		 
		 
		 
		 
		 
		</section>
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