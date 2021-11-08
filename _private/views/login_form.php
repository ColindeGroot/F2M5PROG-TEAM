
<?php $this->layout('layouts::website');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/registratie.css' ) ?>" media="all">

<div>
    <img class="registratie_image" src="<?php echo site_url('/images/signup_image.png');?>" alt="image">
</div>
<div class="registratie_box">
    <div>
        <h3>Welkom terug</h3>
        <p>Log hier in</p>
    </div>
    <form action="<?php echo url("login.handle")?>" method="POST">
    
        <input class="form_element" type="text" name="gebruikersnaam" value="<?php echo input('gebruikersnaam')?>" id="gebruikersnaam" placeholder="gebruikersnaam">
        <?php if ( isset($errors['gebruikersnaam'])): ?>
    <?php echo $errors['gebruikersnaam']?>
<?php endif; ?>
        <input class="form_element" type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord">
<?php if ( isset($errors['wachtwoord'])): ?>
    <?php echo $errors['wachtwoord']?>
<?php endif; ?>
        <button class="form_element cta-button" type="submit">Login</button>

    </form>