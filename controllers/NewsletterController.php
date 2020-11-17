<?php

class NewsletterController
{
    public function subscribe()
    {


        if (isset($_POST['name']) && isset($_POST['email'])) {
            $fullName = $_POST['name'];
            $email = $_POST['email'];

            NewsletterModel::create($email, $fullName);

            // dit stukje kunnen we "eventueel" toevoegen
            // mailTo emailadres waar aanmelding voor nieuwsbrief voor WFFlix binnenkomt
            // headers diegene die zich aanmeldt
            $mailTo = "houwaida.el.amrani@windesheim.nl";
            $headers = "From: " . $email;
            $txt = "je hebt een email ontvangen van" . $fullName;


            header('Location: /');
            // kunnen jullie checken of ik hier iets mis? ik wil het zelf uitzoeken maar wil niet te veel tijd innemen

        }
    }
}