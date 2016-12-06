<?php
$mail = 'i.pershin.01@mail.ru';

 $email = trim($_POST['mail']);
 $subject = trim($_POST['subject']);
 $masseg = trim($_POST['masseg']);

   $godon = "email:$email \nТема:$subject \nсообщение:$masseg";

mail($mail,$godon, "Content-type: text/plain; charset=\"utf-8\"\n From:$mail");
?>