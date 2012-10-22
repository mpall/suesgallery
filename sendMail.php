<?PHP

$message = $_GET['message'] ;
$emailFrom = $_GET['emailFrom'] ;
              
mail( "sue@suesgallery.x10.mx", "From website", $message, "From: $emailFrom" ); 

print "Your message has been sent, click <a href='./test.html'>here</a> to return to the main page";

?> 

<?php
 require_once "Mail.php";
 
 $from = "<suesgallery1@gmail.com>";
 $to = "<marcuspallot@hotmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 
 $username = "suesgallery1@gmail.com";
 
 $from = "<suesgallery1@gmail.com>";
 
  echo("<br>");
  echo("from: " . $from);
  echo("<br>");
  echo("to: " . $to);
  echo("<br>");
  echo("subject: " . $subject);
  echo("<br>");
  echo("body: " . $body);
  echo("<br>");
  echo("host: " . $host);
  echo("<br>");
  echo("port: " . $port);
  echo("<br>");
  echo("username: " . $username);
  echo("<br>");
  echo("password: " . $password);
  echo("<br>");
  
 
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>
