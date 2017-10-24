<?php
  session_start();
if(isset($_POST['email'])) {
        // EDIT THE 2 LINES BELOW AS REQUIRED
     //$to = $_POST['email'];
     
     //$email_subject = "JECoMM's got talent - Avvenuta iscrizione evento";
   //  $redirect_after_success = "https://www.facebook.com/JECoMMs-got-talent-2-1721373041434256/";
   
function died($error) {
echo "<script type='text/javascript'>window.history.back();</script>";
$_SESSION['error']= $error;
$_SESSION['success']= null;
die();
   
    }
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
       !isset($_POST['surname']) ||
       !isset($_POST['email']) ||
       !isset($_POST['area'])) {
 
        died('Compilare Nome, Cognome, Email e Area.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
  $surname = $_POST['surname']; // required
 
    $email_from = $_POST['email']; // required
 $area = $_POST['area']; // required
 
    $message = $_POST['message']; // required
 
      
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.';
 
  }
 
 
 

 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 // compone the message
  
     
 
$email_message = '<html><body>';
$email_message .= '<p>';
$email_message .= "<br>";
$email_message .='Grazie '.($name)." per aver completato l'iscrizione!"."\r\n<br>"."\r\n<br>";
$email_message .="Ti aspettiamo presso lo "."<a href='http://www.studiofotograficomilano.net/'>Studio Fotografico Milano.net</a>"." sabato 18 giugno alle 9:30. A presto!"."\r\n<br>"."\r\n<br>";
$email_message .= "Questi sono i dettagli che hai fornito:\r\n<br>";
$email_message .= "Nome: ".($name)."\r\n<br>";
$email_message .= "Cognome: ".($surname)."\r\n<br>";
$email_message .= "Email: ".($email_from)."\r\n<br>";
$email_message .= "Area: ".($area)."\r\n<br>";
$email_message .= "Note: ".($message)."\r\n<br>";
$email_message .= "<br>";
$email_message .= "<br>";
$email_message .= '</p>';
$email_message .='</body></html>';


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

    function clean_string($string) {
 
      $bad = array(
                "content-type:"
                ,"mime-version:"
                ,"multipart/mixed"
		,"Content-Transfer-Encoding:"
                ,"bcc:"
		,"cc:"
		,"to:"
  );
 
      return str_replace($bad,"",$string);
 
    }

 
 //write file    
$myfile = "partecipanti.csv";
$timestamp=date("Y-m-d_H:i:s");

$txt ='"'.$timestamp.'","'.$user_ip.'","'.$name.'","'.$surname.'","'.$email_from.'","'.$area.'","'.$message.'"'."\r\n";

file_put_contents ($myfile, $txt,FILE_APPEND | LOCK_EX);
     
   


 
  


 
// create email headers
$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "From: noreplay@jecomm.it\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= "Bcc: got_talent_2@jecomm.it" . "\r\n".'X-Mailer: PHP/' . phpversion();
 
mail($to, $email_subject, $email_message, $headers);
$_SESSION['success']= "Grazie Per esserti iscritto, \n\nRiceverai una email con i dettagli della tua iscrizione. \n\nControlla eventualmente anche la casella dello Spam";

$_SESSION['error']=null;
echo "<script type='text/javascript'>window.history.back();</script>";


die();
 
}
 
?>