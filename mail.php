<?php 
    include('class.phpmailer.php'); // Retrieve the email template required 
    $message = file_get_contents('mail_templates/sample_mail.html'); 
    $message = str_replace('%testusername%', $username, $message); 
    $message = str_replace('%testpassword%', $password, $message); 
    $mail = new PHPMailer(); $mail->IsSMTP(); // This is the SMTP mail server 

    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'mygmailid@gmail.com'; 
    $mail->Password = 'mypassword'; 
    $mail->SetFrom('fromgmail@gmail.com', 'Pricol Technologies'); 
    $mail->AddAddress('addaddress@gmail.com'); 
    $mail->Subject = 'Your account information';
    $mail->MsgHTML($message);
    $mail->IsHTML(true); 
    $mail->CharSet="utf-8";
    //$mail->AltBody(strip_tags($message)); 
    if(!$mail->Send()) {  
    echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    ?>