<?php
//checks if form has been submitted
If (isset($_POST[‘submit’])) {
//retrieve variables from form
	$name = $_POST[‘name’];
	$subject = $_POST[‘subject’];
	$mailFrom = $_POST[‘mail’];
	$message = $_POST[‘message’];

	//Recipient
	$mailTo = “after-schoolteacher@protonmail.com”;

	//Headers (Explanatory text)
	$headers = “From: ”.mailFrom;
	$txt = “You have received an e-mail from ”.$name.“.\n\n”.message;

	//Pass in 3 parameters: recipient, subject, and message
mail($mailTo, $subject, $txt, $headers);
header(“Location: index.php?mailsend”);
}
?>
