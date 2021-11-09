<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?php echo site_url( '/css/home_style.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/registratie.css' ) ?>" media="all">
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
