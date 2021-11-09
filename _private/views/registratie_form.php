<?php $this->layout('layouts::website');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/registratie.css' ) ?>" media="all">

<div class="registratie-container">
    <div>
        <img class="registratie_image" src="<?php echo site_url( '/images/signup_image.png' ) ?>" alt="image">
    </div>
    <div class="registratie_box">
        <div>
            <h3>Join onze community</h3>
            <p>Praat samen met andere jong volwassen door een account aan te maken.</p>
        </div>
        <form action="<?php echo url("registratie.verwerking")?>" method="POST">
        
            <input minlength="3" class="form_element" type="text" name="gebruikersnaam" value="" id="gebruikersnaam" placeholder="gebruikersnaam">
                
            <input class="form_element" type="email" name="email" value="" id="email" placeholder="email">

            <input minlength="6" class="form_element" type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord">

            <button class="form_element cta-button" type="submit">Registreer</button>

        </form>
</div>