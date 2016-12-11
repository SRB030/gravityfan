<?php
if(isset($_POST['sumbit'])){
    if(trim($_POST['email'])){
        $hasError = true;
    }else{
        $email = trim($_POST['email']);
    }
    if(trim($_POST['subject'])){
        $hasError = true;
    }else{
        $subject = trim($_POST['subject']);
    }
    if(trim($_POST['masseg'])){
        $hasError = true;
    }else{
        if(function_exists('stripslashes')){
            $masseg = stripslashes(trim($_POST['masseg']));
        }else{
            $masseg = trim($_POST['masseg']);
        }
    }
}
         if(isset($hasError)){
             $usermail = 'i.pershin.01@mail.ru';
             mail($usermail,$subject,$email,$masseg);
         }
?>