<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $msg=$_POST['msg'];

  $to='benmarzoug.ameni@gmail.com';
  $subject='Form Submission';
  $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
  $headers="From: ".$email;

  if(mail($to, $subject, $message, $headers)){
    echo "<h1>Sent Successfully Thank You"." ".$name.", I will contact you shortly</h1>";
  }
  else{
    echo "Something went wrong";

  }
}

?>
