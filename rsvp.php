<?php

$from = "DRGN//RSVP@chijiokeandvanessa.com";
$to = "vanessavanessali@gmail.com";
$subject = "Wedding RSVP";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .= "\n";
$body .="Email: ";
$body .=$email;	

$go = mail($to, $subject, $body, "From: <$from>");

if ($go) {
	echo "<script>
         $(window).load(function(){
             $('#thanks-modal').modal('show');
         });
    </script>";
}
else{
 	print("Not successful, pls email bikezonechi@gmail.com");
}



?>
