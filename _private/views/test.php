<?php $this->layout('layouts::index');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/registratie.css' ) ?>" media="all">


<div class="signupSection" style="height: 650; top: 50%;">
  <div class="info">
    <h2>Heeft u al een account?</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Klik dan <a href="form.html" style="color: rgb(159, 5, 5);">hier</a> om te inloggen</p>
  </div>
  <form style="height: 90.8%" action="<?php echo url("register.handle")?>" method="POST" class="signupForm" name="signupform">
    <h2>Account maken</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Gebruikersnaam" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password1"></label>
        <input type="password" class="inputFields" id="password" name="password1" placeholder="Wachtwoord" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li>
          <label for="password2"></label>
          <input type="password" class="inputFields" id="password" name="password2" placeholder="Herhaal wachtwoord" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li>
          <label for="voornaam"></label>
          <input type="text" class="inputFields" id="voornaam" name="voornaam" placeholder="Voornaam" value="" required/>
      </li>
      <li>
          <label for="achternaam"></label>
          <input type="text" class="inputFields" id="achternaam" name="achternaam" placeholder="Achternaam" value="" required/>
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Registreren">
      </li>
    </ul>
  </form>
  kanus
  
</div>