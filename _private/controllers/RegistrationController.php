<?php
/**
* registreren van gebruikers
 */
class RegistrationController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('registratie_form');

	}

}

