<?php $this->layout('layouts::index');?>
<!-- Eerste stuk -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers community</title>
    <!-- css inladen-->
    <link rel="stylesheet" href="<?php echo site_url( '/css/.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/footer.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style2.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/.css' ) ?>" media="all">
    
</head>

<div class="container">
    <div class="lifesucks">
        <h1 class="titellife">Life Sucks Sometimes</h1>
        <h3 class="title2life">Maar je staat er niet alleen voor.</h3>
        <p class="titelbeschijving">De transformers community is er voor jongeren die<br>zelfverzekerd willen zijn en tegenslagen omzetten in<br> kracht. We doen dit samen: zo leren we meer<br> en helpen we elkaar om te groeien.</p>
    </div>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yH-YlklV-T4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<!-- Transformers -->

<div class="containerFormers">
    <div class="TransformersTekst">
        <h1>Onze Transformers</h1>
    </div>
    <div class="slider">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="../../images/kopie1.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="../../images/kopie2.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="../../images/kopie3.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div  data-aos="zoom-in-down" class="transformers" id="dash">
        <div class="transformer1">
            <a href="#"><p></p></a>
            <div class="black1"><p>Elwin</p></div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer2">
            <a href="#"><p></p></a>
            <div class="black1"><p>Estrella</p></div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer3">
            <a href="#"><p></p></a>
            <div class="black1"><p>Lisa</p></div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer4">
            <a href="#"><p></p></a>
            <div class="black1"><p>Luca</p></div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer5">
            <a href="#"><p></p></a>
            <div class="black1"><p>Yasmine</p></div>
        </div>
    </div>
</div>

<script>
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-slider', {
        cover      : true,
		heightRatio: 0.5,
    } ).mount();
  } );


  var splide = new Splide( '.splide', {
  type   : 'loop',
  perPage: 3,
  focus  : 'center',
} );

splide.mount();
</script>