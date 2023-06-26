<?php
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['sub'])) {$sub = $_POST['sub'];}
 if (isset($_POST['body'])) {$body = $_POST['body'];}

 $address = "hlinakcurbag@gmail.com";

 $mes = "Имя: $name \nE-mail: $email \nТема: $sub \nСообщение: $body";

 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 if ($send == 'true')
 {
 echo "Сообщение отправлено";
 }
 else
 {
 echo "Сообщение не отправлено";
 }
?>