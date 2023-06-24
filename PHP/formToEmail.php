<?php
  header('Access-Control-Allow-Origin: http://localhost:3000');
  if (!isset($_POST['submit'])) {
    echo "error; you need to submit the form!";
  }
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];

  if (empty($firstName) || empty($lastName)) {
    echo "First Name and Last Name are mandatory!";
    exit;
  }

  $emailFrom = 'zchamp1000@gmail.com';
  $emailSubject = "$firstName $lastName's Job Application";
  $emailBody = "You have received a new application from $firstName $lastName\n".
    "First Name: $firstName\n".
    "Last Name: $lastName".

  $to = 'zchamp1000@gmail.com';
  $headers = 'From: $emailFrom \r\n';

  mail($to, $emailSubject, $emailBody, $headers);

?>

  