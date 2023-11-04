<?php

function filtrele($deger){
    $IslemBir = trim($deger);  // trim() metotu başındaki ve sonundaki boşlukları temizler
    $IslemIki = strip_tags($IslemBir); // strip_tags() htmk karakter içerikleri yok edildi.
    $IslemUc =  htmlspecialchars($IslemIki, ENT_QUOTES); // TIRNAKLARI YOK EDER ,KESME İŞARETİ
    return $IslemUc;
}

$isim = filtrele($_POST["isim"];)
$telefon = filtrele($_POST["numara"]);
$email = filtrele($_POST["email"]);
$konu = filtrele($_POST["konu"]);
$mesaj = filtrele($_POST["mesaj"]);




header("Content-Type:text/html; charset=UTF-8");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ibrahimtoksoy8@gmail.com';                     //SMTP username
    $mail->Password   = 'dfdgfdgfd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('$_POST["isim"]', 'Umut İbrahim');
    $mail->addAddress('ibrahimtoksoy8@gmail.com', 'Umut İbrahim');     //Add a recipient
    $mail->addReplyTo('ibrahimtoksoy8@gmail.com', 'Umut İbrahim');
    


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mailin Konusu';
   
    
    $mail->Body    = 'Mailin Gövdesi</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients(html okuyamayan sunucular için)';

    $mail->send();
    echo 'Message başarıyla gönderildi';
} catch (Exception $e) {
    echo "Mail Gönderim Hatası /> Hata Açıklaması : {$mail->ErrorInfo}";
}



?>