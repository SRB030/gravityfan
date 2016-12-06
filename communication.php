<?php
require 'header.php';
?>
<div class="container">
      <div class="jumbotron text-center">
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
</div>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="ajax.js"></script>
<?php
require 'footer.php';
?>
