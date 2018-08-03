<?php

class Email {

    function setting($to, $subject, $message) {
        $mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = EMAIL_HOST_SMTP;
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_USERNAME;
        $mail->Password = EMAIL_PASSWORD;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setLanguage('ar', URL . 'lib/mail/language/directory/');

        $mail->setFrom(EMAIL_FROM_EMAIL, EMAIL_FROM_NAME);
        $mail->addAddress($to);
        $mail->addReplyTo(EMAIL_REPLYTO_EMAIL, EMAIL_REPLYTO_NAME);
        $mail->addCC(EMAIL_COPY_EMAIL_CC);
        $mail->addBCC(EMAIL_COPY_EMAIL_BCC);

        $mail->addAttachment('/var/tmp/file.tar.gz');
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = $message;
		
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		
        if (!$mail->send()) {
            return FALSE;
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return TRUE;
            //echo 'has ben send messege';
        }
    }

    function Send($to, $subject, $message) {
        if ($to == NULL AND $subject == NULL AND $message == NULL)
            return FALSE;
        $send = $this->setting($to, $subject, $message);
        if (!$send)
            return FALSE;
        return TRUE;
    }
	
}
