<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?php echo site_url( '/css/style2.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>

    <!-- Javascript files -->
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="../../../splide-3.2.5/dist/css/splide.min.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<script src="../../../splide-3.2.5/dist/js/splide.min.js"></script>

</head>
<body>
    
    <!-- Navagation & header -->
    <div class="navheader">
        <div class="logo">
            <a href=""><img src="../../../images/Transformers.webp" alt=""></a>
        </div>
        <nav class="navbar">
            <a href="#" id="home">Home</a>
            <a href="#">Over ons</a>
            <a href="#">Word Transformer</a>
            <a href="#">Contact</a>
        </nav>
        <div class="inlogbuttons">
            <a href="#">Aanmelden</a>
            <a href="#">Inloggen</a>
            <div class="navbar_buttons" > 
            <div><a class="cta-button" href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?>>Registreer</a></div>
            <div><a class="cta-button" href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> <?php endif ?>>login</a></div>
        </div>
        </div>
    </div>



    <!-- <div class="navheader">
        <header class="header">
            <div class="logo">
                <a href="index.html">Logo</a>
            </div>
            <nav class="navbar" id="#topnav">
                <a href="#home">Home</a>
                <a href="overons.html">Over ons</a>
                <a href="wordtransformer.html ">Word Transformer</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="inlogbuttons">
                <a href="#">Aanmelden</a>
                <a href="#">Inloggen</a>
            </div>

        </header>
        
    </div> -->

    <!-- <nav>
         <div class="logo">
            Brand
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About ons</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Inloggen</a></li>
            <li><a href="#">Aanmelden</a></li>
         </ul>
      </nav>
       -->
    <!-- webslider coolin -->
    <?php echo $this->section( 'content' ) ?>



<!--
      <script type="module">
      import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

      const swiper = new Swiper(...)
    </script>
-->
<script>
  AOS.init();
</script>
</body>
</html> 
