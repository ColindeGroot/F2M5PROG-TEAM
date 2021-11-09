<?php

namespace Website\Controllers;

/**
* registreren van gewbruikers
 */
class RegistrationController {

	public function home() {

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');

	}

}

