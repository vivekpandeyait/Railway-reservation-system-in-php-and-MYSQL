<?php
//the subject
$sub = "indain railway";
//the message

$msg = "your otp is ".rand(12222,345555);
$data= "http://vivekpandeyresume.000webhostapp.com/";
//recipient email here
$rec = "vivekpandey.nielit.gov.in@gmail.com";
//send email
if(mail($rec,$sub,$data)){
    echo "mail send";
}

?>