<?php

if ($_POST['url'] == 'http://') {

$EmailFrom = Trim(stripslashes($_POST['EmailFrom']));
$EmailTo = "youremail@yoursite.com";
$Subject = "Inquiry | Your/Company Name";
$name = Trim(stripslashes($_POST['name']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

$validationOK=true;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=fail.php\">";
exit;
}

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email Address: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
 
if ($success){
print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";
}
else{
print "<meta http-equiv=\"refresh\" content=\"0;URL=fail.php\">";
}

}

?>