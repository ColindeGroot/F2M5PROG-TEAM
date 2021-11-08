<?php

namespace Website\Controllers;

/**
 * Class LoginController
 */

class LoginController
{

	public function login_form()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('login_form');
	}

	public function handleLoginForm()
	{
		//Form valideren: email en wachtwoord ingevuld?
		$result = validateRegistrationData($_POST);
		//print_r($result);

		//Checken: bestaat de gebruiker met dat email wel?
		if (userNotRegistered($result['data']['gebruikersnaam'])) {
			$result['errors']['gebruikersnaam'] =  'Deze gebruiker is niet bekend';
		} else {
			//Controleren wachtwoord klopt (password_verify)
			$user = getUserByGebruikersnaam($result['data']['gebruikersnaam']);
			echo $user['wachtwoord'];
			if (password_verify($result['data']['wachtwoord'], $user['wachtwoord'])) {
				//Gebruiker inloggen
				loginUser($user);
				//Gebruiker doorsturen naar eigen dashboard(alleen ingelogde gebruikers)
				redirect(url('feed'));
			} else {
				$result['errors']['wachtwoord'] =  'Wachtwoord is niet correct';
			}
		}
		//Anders foutmeldingen tonen in het inlogformulier
		$template_engine = get_template_engine();
		echo $template_engine->render('login_form', ['errors' => $result['errors']]);
	}

	public function userDashboard()
	{

    // checken of echt bent ingelogd
		loginCheck();

		$template_engine = get_template_engine();
		echo $template_engine->render('feed');
	}
	public function logout( ){
		logoutUser();
		redirect(url('home'));
	}
}