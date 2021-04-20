<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $rate = $_POST['rate'];
  $feedback = $_POST['feedback'];

  $to = 'sofia.amirul@yahoo.com, piamemo2@gmail.com, wig190029@siswa.um.edu.my';

  $headers = "From: " .$email;
  $txt = "You got a feedback!" .$feedback;

  mail($to, $name, $txt, $rate, $headers);
  header('Location: index.html'); //linking to the main page
  exit();

  echo "Thank you for your feedback!";

  //
  // //define çontent
  // $content = $_REQUEST['feedback'];
  //
  // //define message for the content of what's inside the form
  // //also to send it to an email, instead of the website's database
  // $message = "Content: $content";
  //
  // //where the content will be sent to
  // mail('wig190029@siswa.um.edu.my', //the email the content will be sent to
  //   "Feedback & Suggestion received in your OSP website!", //the notification that'll appear
  //   "You got: \n\n
  //                 $message"); //the content of whatever's filled in the feedback & seuggestion form
  //
  // //after user click on Submit
  // //they'll be redirected to main page!
  //
  // die(); //to redirect
?>
