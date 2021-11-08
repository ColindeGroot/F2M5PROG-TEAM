<?php

namespace Website\Controllers;

/**
 * Class RegistratieController
 *
 * Deze handelt het registreren van gebruikers af
 *
 */

class RegistratieController {

    public function form() {

        $template_engine = get_template_engine();
        echo $template_engine->render('registratie_form');
    }

    public function verwerking() {
        // hier wordt het form afgehandeld

        $errors = [];

        // checks: valide email
        $email          = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
        $wachtwoord     = trim( $_POST['wachtwoord']);
        $gebruikersnaam = trim( $_POST['gebruikersnaam']);

        // checks: gebruikersnaam bevat minimaal 3 tekens
        if (strlen( $gebruikersnaam ) < 3 ) {
            $errors['gebruikersnaam'] = 'Gebruikersnaam moet minimaal 3 tekens bevatten';
        }

        if ( $email === false ) {
            $errors['email'] = 'Geen geldig email ingevuld';
        }

        // checks: wachtwoord bevat minimaal 6 tekens
        if (strlen( $wachtwoord ) < 6 ) {
            $errors['wachtwoord'] = 'Geen geldig wachtwoord, minimaal 6 tekens';
        }

        if (count($errors) === 0) {
            // opslaan gebruiker

            // check of gebruiker al bestaat
            $connection = dbConnect();
            $sql        = "SELECT * FROM `gebruikers` WHERE `email` = :email";
            $statement  = $connection->prepare($sql);
            $statement->execute(['email' => $email]);

            if ( $statement->rowCount() === 0) {
                // zo niet, verder met opslaan
                $sql                = "INSERT INTO `gebruikers` (`gebruikersnaam`,`email`, `wachtwoord`) VALUES (:gebruikersnaam, :email, :wachtwoord)";
                $statement          = $connection->prepare($sql);
                $safe_wachtwoord    = password_hash($wachtwoord, PASSWORD_DEFAULT);
                $params             = [
                    'gebruikersnaam'    => $gebruikersnaam,
                    'email'             => $email,
                    'wachtwoord'        => $safe_wachtwoord

                ];
                $statement->execute($params);
                redirect(url('login.form'));

                
            }else {
                //anders foutmelding tonen
                $errors['email'] = 'Dit account bestaat al';
            }
        }

    }

}