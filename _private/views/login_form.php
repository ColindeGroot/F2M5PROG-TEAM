<?php $this->layout('layouts::index');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/registratie.css' ) ?>" media="all">


<div class="signupSection">
  <div class="info">
    <h2 class="text-head">Geen account?</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p class="text-left">Heeft u nog geen account?</p>
    <p class="text-left">Klik dan <a href="signup.html" style="color: #1E07A0;">hier</a> om een account aan te maken.</p>
  </div>
  <form action="<?php echo url("handleLoginForm")?>" method="POST" class="signupForm" name="signupform">
    <div class="right-section">
      <h2 class="text-head">Log in</h2>
      <ul class="noBullet">
        <li>
          <label for="username"></label>
          <input type="text" class="inputFields" id="username" name="user" placeholder="Gebruikersnaam" value="" oninput="return userNameValidation(this.value)" required/>
        </li>
        <li>
          <label for="password"></label>
          <input type="password" class="inputFields" id="password" name="pass" placeholder="Wachtwoord" value="" oninput="return passwordValidation(this.value)" required/>
        </li>
        <li>
          <label for="email"></label>
          <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
        </li>
        <li id="center-btn">
          <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
        </li>
      </ul>
    </div>
  </form>
</div>