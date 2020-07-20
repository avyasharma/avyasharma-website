<?php
$email = $_POST['emailInfo'];//get email from form
$subject = $_POST['subjectInfo'];//get subject of email from form
$message = $_POST['write'];//get body of email from form

$body="You've been emailed by ".$email.".\n\Subject:".$subject."\nMessage:\n".$message;
$mailTo = "avya@avyasharma.com";
$header = "From: website@avyasharma.com";

if($email!='' && $subject!='' && $message!=''){
  mail($mailTo, $subject, $body, $header);
} else{
  echo "<script>alert('Please fill in all text fields.');</script>";
}

header("Location: index.html#contact-page")
?>
