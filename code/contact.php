<?php

require_once 'config.php';
if (!empty($_POST["send"])) {
  $name = $_POST["userName"];
  $email = $_POST["userEmail"];
  $content = $_POST["content"];
  $time = time();
  $message = '';
  
  //for mailing
  $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
  $subject = "Contact form";
  if (mail($CFG->receiver_email, $subject, $content, $mailHeaders)) {
    $message .= "Your contact information is received successfully.";
    $type = "success";
  }
  //for storing in database
  $conn = new mysqli($CFG->servername, $CFG->username, $CFG->password, $CFG->dbname) or die("Connection Error: " . mysqli_error($conn));
  mysqli_query($conn, "INSERT INTO user (name, email, message, contact_time) VALUES ('" . $name . "', '" . $email . "','" . $content . "','" . $time . "')");
  $insert_id = mysqli_insert_id($conn);
  if (!empty($insert_id)) {
    $message .= "Your contact information is saved successfully. We will get back to you shortly";
    $type = "success";
  }

}
require_once "contact-view.php";
?>