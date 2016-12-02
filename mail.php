<html>
<body>

<?php
$to="nitinvaishwade@gmail.com";
$subject="Qtpi Contact people";
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$header="From:$email";
$send=mail($to,$subject,$message,$header);
if($send)
{print('<a href="www.qtpi.in">Thank you for contecting us</a>');}
else
{print"We encounted an error sending your mail";}
?>

</body>
</html>