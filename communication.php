<?php
require 'header.html';
?>
<div class="communication">
  <form id="form">
    <h4>Email:</h4>
    <input type="email" id="email"  required="required"/><br/>
    <h4>тема сообщения:</h4>
    <input type="text"  id="subject" required="required"/><br/>
    <h4>Текстовое поле:</h4>
    <textarea id="masseg" required="required"></textarea><br/>
    <button>Отправить</button>
  </form>
</div>
<?php
$mail = 'i.pershin.01@mail.ru';

 $email = trim($_POST['mail']);
 $subject = trim($_POST['subject']);
 $masseg = trim($_POST['masseg']);

   $godon = "email:$email \nТема:$subject \nсообщение:$masseg";

mail($mail,$godon, "Content-type: text/plain; charset=\"utf-8\"\n From:$mail");
?>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="ajax.js"></script>
<?php
require 'footer.html';
?>
