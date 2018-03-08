<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
 
     
    $id=$_POST["txteml"];
   
   

        
    
$message="dsfjvkje ekjfekgegdbkjfbej";
          
          
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 2;

// enable SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->SMTPAutoTLS=false;
// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'shahdemo1234@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = '12345678shahdemo';

// add a subject line

$mail->Subject ='forgot password';

// Sender email address and name
$mail->SetFrom('shahdemo1234@gmail.com', 'shah demo');

$email1=$id;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
   
    $msg = "Mail send successfully";
   
    header('Location:Inquiry');    

} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg.'</br>';
 
 
?>
  <button class="btn btn-primary"><a href="login.php" >Back to Login</a></button>