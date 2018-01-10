<?php

  function redirect to ($location) {
    if ($location != NULL) {
        header("Location : {$location}");
        exit;
    }
  }

  //echo "From mail.php";
  function submitMessage($direct, $name, $email, $message) {
    //echo "From submitMessage";
    $to = "email@zacharycarreonweb.com";
    $subject = "Message from user from hosting";
		$extra = "Reply to: " + $email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
		mail($to, $subject, $msg, $extra);
  }
?>
