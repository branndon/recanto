<?php

    require 'PHPMAiler/PHPMailer.php';
    require 'PHPMAiler/SMTP.php';

    // Campos
    $json = json_decode(file_get_contents("php://input"));
    $nome       = $json->nome;
    $email      = $json->email;
    $telefone   = $json->telefone;
    $mensagem   = $json->mensagem;
    $assunto    = $json->assunto;


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
    $mail->Subject = utf8_decode($assunto) . ' - ' . utf8_decode($nome);

    //Replace the plain text body with one created manually
    $mail->Body    = '<table>
        <tr>
            <td><strong>Nome</strong></td>
            <td>'.utf8_decode($nome).'</td>
        </tr>
        <tr>
            <td><strong>E-mail</strong></td>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <td><strong>Telefone</strong></td>
            <td>'.$telefone.'</td>
        </tr>
        <tr>
            <td><strong>Assunto</strong></td>
            <td>'.utf8_decode($assunto).'</td>
        </tr>
        <tr>
            <td><strong>Mensagem</strong></td>
            <td>'.utf8_decode($mensagem).'</td>
        </tr>
    </table>';

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

?>