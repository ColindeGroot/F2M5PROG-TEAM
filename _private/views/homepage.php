<?php $this->layout('layouts::index');?>
<!-- Eerste stuk -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers community</title>
    <!-- css inladen-->
    <link rel="stylesheet" href="<?php echo site_url( '/css/tekst.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/home_style.css' ) ?>" media="all">
    
</head>
<div class="container">
    <div class="lifesucks">
        <h1>Praat over dingen<br> die je eerder<br> nergerns kwijt kon.</h1>
        <p>In onze Online Community kan je binnen een<br> 
            veilige omgeving (anoniem) jouw ervaringen<br>
            en gevoelens delen.Hier helpen en steunen <br>
            we elkaar. Ook worden er wekelijks praktische<br>
            tips gedeeld die jou helpen om zelfverzekerd<br>
            te zijn en om te gaan met moeilijke situaties.<br>
        </p>
        
    </div>
    <div class="video">
    <iframe class="videoIframe" src="https://www.youtube.com/embed/yH-YlklV-T4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="balk">ik ben pawel</div>

<!-- Transformers -->

<div class="containerFormers">
    <div class="TransformersTekst">
        <h1 class="OT">Onze Transformers</h1>
    </div>
    <div class="slider">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="Img1Slider" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="Img2Slider" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="Img3Slider" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div  data-aos="zoom-in-down" class="transformers" id="dash">
        <div class="transformer1">
            <div class="black1">
            <a href="#"><p></p></a>
            <p>Elwin</p>
            </div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer2">
            
            <div class="black1">
            <a href="#"><p></p></a>
            <p>Estrella</p>
            </div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer3">
            <div class="black1">
            <a href="#"><p></p></a>
            <p>Lisa</p>
            </div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer4">
            <div class="black1">
            <a href="#"><p></p></a>
            <p>Luca</p>
            </div>
        </div>
        <div  data-aos="zoom-in-down" class="transformer5">
            <div class="black1">
            <a href="#"><p></p></a>
            <p>Yasmine</p>
            </div>
        </div>
    </div>
</div>

<div class="balk"></div>

<div class="tekst">
    <div class="slider2">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../../images/tekst1.png" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="../../images/tekst2.png" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="../../images/tekst3.png" style="width:100%">
            </div>
            
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div> 
    </div>
    <div class="praatOvertekst">
        <h1 class="titellife">Life Sucks Sometimes</h1>
        <h3 class="title2life">Maar je staat er niet alleen voor.</h3>
        <p class="titelbeschijving">De transformers community is er voor jongeren die
            <br>zelfverzekerd willen zijn en tegenslagen omzetten in
            <br> kracht. We doen dit samen: zo leren we meer
            <br> en helpen we elkaar om te groeien.</p>
            <div class="onlineCommunity">
            <a href="#" class="onlineCommunityButton" >Meld je Gratis aan</a>
        </div>
        
    </div>
</div>

<div class="balk">ik ben pawel</div>
<!-- Doneer -->
<div class="doneer">
        <div class="doneerTekst">
            <h1>Geen tijd, maar wel bijdragen? Doneer!</h1>
            <p>Zou je ons graag willen helpen, maar heb je gewoonweg de tijd niet<br> (en wel een paar eurotjes over)?
                Dan kan je alsnog impact maken door te doneren wat jij kwijt kan.<br>
                Hiermee help je ons onder ander om meer (h)erkening en peer suport<br> te cre??ren tussen jongeren onderling, en om tool te ontwikkelen die<br>
                jongeren helpen mentaal gezond te zijn.
            </p>
        </div>
        <div class="doneerButton">
            <a href="#">Doneer</a>
        </div>
    </div>

    <!-- Footer  -->
    <footer>
        <div class="footerLinks">
            <div class="footerLogo">
                <img src="Transformers.webp" alt="">
            </div>
            <h2>Wij empoweren jongeren<br>om mentaal gezond te zijn</h2>
            <p>Stichting Transformers Community is geregisteerd bij<br> de Kamer van Koophandel onder<br> RSIN nummer 861477194</p>
        </div>
        <div class="footerRechts">
            <h2>Let's keep in touch!</h2>
            <p>Wil je verhalen en praktische tips ontvangen? Schrijf je<br> in voor onze nieuwsbrief:</p>
            <input type="text" name="" placeholder="Email*">
            <a href="#">Aanmelden</a> 
            
           

        </div>
      
    </footer>

<script>
    function getWidth() {
  if (self.innerWidth) {
    return self.innerWidth;
  }

  if (document.documentElement && document.documentElement.clientWidth) {
    return document.documentElement.clientWidth;
  }

  if (document.body) {
    return document.body.clientWidth;
  }
}

    var kupa = 2;
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

var slideIndex = 0;
     showSlides();
        
function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
    }

        if (getWidth() < 841) {

            var splide = new Splide( '.splide', {
            type   : 'loop',
            perPage: 1,
            focus  : 'center',
            } );
            console.log(getWidth());

            splide.mount();
        } else {
            var splide = new Splide( '.splide', {
            type   : 'loop',
            perPage: 3,
            focus  : 'center',
        } );

        splide.mount();
    }
        </script>
</script>