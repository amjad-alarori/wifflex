<?php


class ContactController
{
    public function index()
    {
        require 'views/contact.view.php';
    }

    /**
     * vull $senderMail en $passMail met de inloggegevens van een gmail account
     * zorg dat de instellingen van de gmail is ingesteld.
     * ga naar de instellingen van de mail en zorg dat er in de tabblad 'doorsturen en POP/IMAP'
     * de IMAP is ingeschakeld.
     * vervolgens ga naar 'https://myaccount.google.com/lesssecureapps'
     * en zorg dat de toegang voor de apps met een lagere veiligheid is ingeschakeld.
     */
    public function mailContactForm()
    {
        try {
            $mail = new PHPMailer();

            $senderMail = 'wfsdad20b3@gmail.com';
            $passMail = 'Almere2020!';

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = $senderMail;
            $mail->Password = $passMail;
            $mail->SMTPSecure = 'tls';

            $mail->setFrom($senderMail, 'WFFlix - DOMP project team B3');
            $mail->addAddress($senderMail);
            $mail->isHTML(true);
            $mail->Subject = 'Contact via conatactformulier ' . $_POST['firstname'] . $_POST['lastname'] . ' Wfflix team B3';
            $mail->Body = '<H4>De tekst van de gebruiker vanuit contactformulier:</H4><br />' . $_POST['subject'];

            //die(var_dump($mail));
            if ($mail->send()):
                header('location: /contact?status=sent');
            else:
                header('location: /contact?err=mail kan niet verstuurd worden');
            endif;
        } catch (Exception $e) {
            header('Location: /contact?err=' . $e->getMessage());
        }
    }
}

