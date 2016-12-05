

<?php
$to="nitin@qtpi.in";
$subject="Qtpi Contact people";
$email=$_POST['email'];
$message=$_POST['message'];
$header="From:$email";
// mail($to,$subject,$message,$header);
// echo"your message has been send";
if (mail($to,$subject,$message,$header))
   {
       print "Your message is sent.";
   }
   else
   {
       print "Your message is not sent.
       <br>Please go <a href=\"javascript:history.back();\">back</a> and send again.";
   }
?>
