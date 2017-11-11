<?php

    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Campos
    $json = json_decode(file_get_contents("php://input"));
    $email      = $json->email;

    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;

    $mail->Host = 'br848.hostgator.com.br';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;

    $mail->Username = "suporte@recanto4estacoesigarata.com.br";
    $mail->Password = "Recanto@2017";

    $mail->setFrom('suporte@recanto4estacoesigarata.com.br', utf8_decode('Recanto 4 Estações'));

    $mail->addAddress('arruda.branndon@gmail.com', 'Branndon Arruda');
    // $mail->addReplyTo('replyto@example.com', 'First Last');

    //Set the subject line
    $mail->isHTML(true);
    $mail->Subject = "Cadastro Site";

    //Replace the plain text body with one created manually
    $mail->Body    = '<table>
        <tr>
            <td><strong>E-mail</strong></td>
            <td>'.$email.'</td>
        </tr>
    </table>';

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

?>