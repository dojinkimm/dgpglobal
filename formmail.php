<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8">
<META HTTP-EQUIV="refresh" content="0;URL=html/thankyou.html">
<title>Email Form</title>
</head>

<body>
<?php
  $name=addslashes($_POST['name']);
  $subject=addslashes($_POST['subject']);
  $email=addslashes($_POST['email']);
  $title=addslashes($_POST['title']);
  $contact=addslashes($_POST['contact']);
  $company=addslashes($_POST['company']);
  $position=addslashes($_POST['position']);
  $inquiry=addslashes($_POST['inquiry']);
  
 // you can specify which email you want your contact form to be emailed to here

  $toemail = "info@dgpglobal.net";
  $subject = "DGP global - Trade Inquiry";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"".$company." - \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body = "이름: ".$name."<br>\n"
  			."회사: ".$company."<br>\n"
			."직급: ".$position."<br>\n"
            ."이메일: ".$email."<br>\n"
			."연락처: ".$contact."<br>/n"
            ."의뢰 내용:<br>"
            .$inquiry;

  if (!ereg("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email))
  {
    echo "That is not a valid email address.  Please return to the"
           ." previous page and try again.";
    exit;
  }

    mail($toemail, $subject, $body, $headers);
    echo "Thanks for submitting your comments";
?>
</body>
</html>