<?php
	$name_error = $email_error = $phone_error = "";
	$name = $email = $phone = $message = $topic = $success ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user-name"])) {
    $name_error = "Proszę poprawnie uzupełnić to pole.";
  } else {
    $name = test_input($_POST["user-name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Proszę poprawnie uzupełnić to pole."; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Proszę poprawnie uzupełnić to pole.";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Proszę poprawnie uzupełnić to pole"; 
    }
  }
  
  if (empty($_POST["phone-number"])) {
    $phone_error = "Proszę poprawnie uzupełnić to pole. Przykład: 0500133222"; 
  } else {
    $phone = test_input($_POST["phone-number"]);
    //check if e-mail address is well-formed
   if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Proszę poprawnie uzupełnić to pole. Przykład: 0500133222"; 
    }
  }
  
  if (empty($_POST["topic"])) {
    $topic = "";
  } else {
    $topic = test_input($_POST["topic"]);
  }
  
  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $email_error == '' and $phone_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'jwm.tomasz.mazurkiewicz@gmail.com';
      if (mail($to, $topic, $message)){
		  $success ="Dziękujemy za wysłanie wiadomości.";
          $name = $email = $phone = $message = '';
      }
  }
  else{
		   $success ="Proszę uzupełnić wszystkie pola poprawnie";
	  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	