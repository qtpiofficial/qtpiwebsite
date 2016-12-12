<?php
$to = 'nitinvaishwade@gmail.com';
$subject = 'this is mail test';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$message = <<<EMAIL

$name
$email
$message

EMAIL;
$header = '$email';

if($_POST){
    mail($to, $subject, $message, $header);
    $feedback = 'thanks for contact us';

}



?>
<!doctype html>
<html lang='en'>
<head>
    <meta charset="utf-8" />
    <title>contact mail</title>
    <style type="text/css">
        form{
            width: 400px;
        }
        form ul {
            list-style-type: none;
        }
        form ul li {
            margin: 15px 0;
        }
        form lable {
            display: block;
            font-size: 2em;
        }
        form input, textarea {
            font-size: 2em;
            padding: 5px;
            border: #ccc 3px solid;
            width: 100%
        }
    </style>
    </head>
<body>
    <div id='wrapper'>
    <div id='content'>
        <ul id='nav'>
         <li><a href="index.html">home</a></li>
        <li><a href="contact.php">contact</a></li>
        </ul>
        <h2>contact</h2>
        <p id="feedback"><?php echo $feedback; ?></p>
        <form action="?" method="post">
            <ul>
            
              <li>
                <lable for="name">name:</lable>
                  <input type="text" name="name" id="name" />
                </li>
                
                <li>
                <lable for="email">email:</lable>
                  <input type="text" name="email" id="email" />
                </li>
                <li>
                  <label for="message">message</label>
                    <textarea id="message" name="message" cols="42" rows="9"></textarea>
                </li>
                <li> <input type="submit" value="submit" ></li>
            </ul>
          
        </form>
        </div>
    </div>
    </body>
</html>