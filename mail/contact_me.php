<?php
// if(empty($_POST['name'])      ||
//    empty($_POST['phone'])     ||
//    {
//    echo "No arguments Provided!";
//    return false;
//    }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
   
$to = '??????????@mail.ru';
$email_subject = "Website Contact Form:  $name";
$email_body = "Заявка с веб-сайта.\n\n"."Детали заявки:\n\Имя: $name\n\Телефон: $phone\n";
$headers = "From: noreply@badboyvapeshop.ru\n"; 
$headers .= "Reply-To: $phone,' ', $name";   
mail($to,$email_subject,$email_body,$headers);
// return true;         
?>
