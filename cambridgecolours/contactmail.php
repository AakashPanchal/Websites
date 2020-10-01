	<?php
    if(isset($_POST['submit']))

    {
        $name = $_POST['contact_name']; // Get Name value from HTML Form
        $email_id = $_POST['contact_email'];// Get Email Value
		$csubject = $_POST['csubject'];		
        $msg = $_POST['contact_message']; // Get Message Value
         
        $to = "info@cambridgecolours.com"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
						<tr>
                            <td style='width:150px'><strong>Subject: </strong></td>
                            <td style='width:400px'>$csubject</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
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
			
		    echo $success = "<div class='alert alert-success'>Your message has been sent successfully.</div>";
			echo "<script>setTimeout(\"location.href = 'contact.php';\",1500);</script>";
			
			
			
			    
        }
		
        else{
            // Message if mail NOT  sent
			
			echo $trouble = "<div class='alert alert-success'>something goes out wrong</div>";
			echo "<script>setTimeout(\"location.href = 'contact.php';\",1500);</script>";

        }
    }
?>