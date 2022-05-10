<?php
    require('./PHPMailer1/src/PHPMailer.php');
    require('./PHPMailer1/src/SMTP.php');
    require('./PHPMailer1/src/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    class Email {
        public function __construct()
        {   
            require  'vendor/autoload.php' ;         
            echo'ojfsgihjfdsaghujsd';
            // $mail = new PHPMailer();

            // $mail->isSMTP();                                            //Send using SMTP
            // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            // $mail->Username   = 'lorraineolegario16@gmail.com';                     //SMTP username
            // $mail->Password   = '$Loss205#1002';                               //SMTP password
            // $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // //Recipients
            // $mail->setFrom('lorraineolegario16@gmail.com', 'Lorraine Olegario');
            // $mail->addAddress('lorraineolegario456@gmail.com', 'Lorraine Silva');     //Add a recipient
            // // $mail->addReplyTo('info@example.com', 'Information');
            // // $mail->addCC('cc@example.com');
            // // $mail->addBCC('bcc@example.com');

            // //Attachments
            // // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            // //Content
            // $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = 'Projeto01 do Curso';
            // $mail->Body    = 'Avançar na carreira nunca foi tão importante.</b>';
            // $mail->AltBody = 'O que voce faz para ser melhor que ontem?';

            // if (!$mail->send()) {
            //     echo 'aqui sla';
            //     echo 'Mailler ERROR: '. $mail->ErrorInfo;
            // }else{
            //     echo' PHP enviando email';
            // }
           
        }
    }

    

?>