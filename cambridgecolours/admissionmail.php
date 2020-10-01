			<?php
    if(isset($_POST['submit']))
    {
        $programme = $_POST["programme"];
		$cname = $_POST["name"];
		$cdob = $_POST["dob"];
		$cage = $_POST["age"];
		$cgender = $_POST["gender"];
		$caddress = $_POST["add"];
		$cstrong = $_POST["strong"];
		$careas = $_POST["area"];
		$prelation = $_POST["relation"];
		$page = $_POST["p_age"];
		$pname = $_POST["pname"];
		$pprofession = $_POST["profession"];
		$pemail = $_POST["email"];// Get Name value from HTML Form
        $pphone = $_POST["phone"]; // Get Email Value
        
         
        $to = "info@cambridgecolours.com"; // You can change here your Email
        $subject = "'$pname' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>


						<tr>
	
                            <td style='width:150px'><strong>Select Programme </strong></td>
                            <td style='width:400px'>$programme</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Name of child: </strong></td>
                            <td style='width:400px'>$cname</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Date of Birth of Child: </strong></td>
                            <td style='width:400px'>$cdob</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Age of child: </strong></td>
                            <td style='width:400px'>$cage</td>
                        </tr>
						                        <tr>
							
                            <td style='width:150px'><strong>Gender of child: </strong></td>
                            <td style='width:400px'>$cgender</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Address: </strong></td>
                            <td style='width:400px'>$caddress</td>
                        </tr>
						
						

						                        <tr>
							
							
                            <td style='width:150px'><strong>Strong points of your child: </strong></td>
                            <td style='width:400px'>$cstrong</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Areas that need attention: </strong></td>
                            <td style='width:400px'>$careas</td>
                        </tr>
					
						                        
						<tr>
							
							
                            <td style='width:150px'><strong>Parent Relation: </strong></td>
                            <td style='width:400px'>$prelation</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Parent Age: </strong></td>
                            <td style='width:400px'>$page</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Parent Name: </strong></td>
                            <td style='width:400px'>$pname</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Parent Profession: </strong></td>
                            <td style='width:400px'>$pprofession</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong>Email: </strong></td>
                            <td style='width:400px'>$pemail</td>
                        </tr>
						                        <tr>
                            <td style='width:150px'><strong> Phone: </strong></td>
                            <td style='width:400px'>$pphone</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <info@cambridgecolours.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id


           if(mail($to,$subject,$message,$headers)){
            // Message if mail sent
			echo $success = "<div class='alert alert-success'>Your Application has been sent successfully.</div>";
			echo "<script>setTimeout(\"location.href = 'admission.php';\",1500);</script>";
            
        }
 
        else{
            // Message if mail NOT sent
			echo $trouble = "<div class='alert alert-success'>something goes out wrong</div>";
			echo "<script>setTimeout(\"location.href = 'admission.php';\",1500);</script>";
        }
    }
	
?>