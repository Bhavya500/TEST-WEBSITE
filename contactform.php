<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $name = $_POST['name'];

  $mailTo = "tanishqbhavya@gmail.com";
  $header = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $header);
header("Location: index.php?mailsend");

}