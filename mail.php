<html>
<body>

<?php
$to="nitinvaishwade@gmail.com";
$subject="Qtpi Contact people";
$email=$_POST['email'];
$message=$_POST['message'];
$header="From:$email";
mail($to,$subject,$message,$header);
echo"your message has been send";    

?>

</body>
</html>