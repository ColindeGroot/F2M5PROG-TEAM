<?php $this->layout('layouts::index');?>
    <div>
        <div class="webslider" id="home"></div>
    </div>

    <!-- fotoslider -->

    <!--<div class="slideshow-container">

        <div class="mySlides fade">
        <img src="../../images/kopie3.png" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="../../images/kopie2.png" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="../../images/kopie1.png" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>
        
    </div> 
-->
    <!-- life sucks -->
    <div class="lifesuckssection">
        <div class="lifeSection">
            <h1 class="titellife">Life Sucks Sometimes</h1>
            <h2 class="title2life">Maar je staat er niet alleen voor.</h2>
            <p class="titelbeschijving">De transformers community is er voor jongeren die<br>zelfverzekerd willen zijn en tegenslagen omzetten in<br> kracht. We doen dit samen: zo leren we meer<br> en helpen we elkaar om te groeien.</p>
        
        </div>
        <div class="buttonDiv">
                <a class="lifeButton" href="#">Naar community</a>
        </div>
    </div>

    

    <!-- Fotos van transformers -->
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


    <div class="missie">
        <div class="missieTekst">
            <h1 class="missieTitel">Wij zijn een groeiende beweging van jongeren die zich<br> inzet voor mentale gezondheid.</h1>
            <p class="tekstmissie">We leven in een samenleving waar onvoldoende ruimte is voor onze mentale gezondheid. <br> Daar willen wij samen verandering in brengen!<br> We zijn een community voor jongeren die ervaring en tips uitwisselen op het gebied van mentale gezondheid en persoonlijke <br> Ontwikkeling. Zo creeren we meer openheid en helpen we elkaar om te groeien.</p>
        </div>
        <div class="missievisie">
            <a href="missievisieButton" href="#">Onze Missie & Visie</a>
        </div>
    </div>
    

    <!-- <div class="doneerImpact">
        <div class="doneer">
            <div>
                <h1>Geen tijd, maar wel bijdragen? Doneer!</h1>
                <p>Zou je ons graag willen helpen, maar heb je gewoonweg<br> de tijd niet (en wel een paar eurotjes over)? Dan kan je alsnog<br>impact maken door te doneren wat jij kwijt kan. Hiermee help je<br>ons onder andere om meer (h)erkenning en peer suport te creëren<br>tussen jongeren onderling, en om tools te ontwikkelen die jongeren<br>helpen mentaal gezond te zijn.</p>
            </div>
            <div>
                <a class="doneerButton" href="#">Doneer</a>
            </div>
        </div>
        <div class="impact">
            <h1>Wil je impact maken?</h1>
            <p>Het is onze missie om kennis over mentale gezondheid mainstream<br>te maken en jongeren te empoweren om mentaal gezond te zijn. En<br>daar hebben wij jou bij nodig! Wil jij je ook inzetten voor een<br>samenleving waarin onze mentale gezondheid centraal staat? Meld<br>je dan aan als vrijwilliger!</p>
            <div>
                <a class="impactButton" href="#">Word Transformer</a>
            </div>
        </div>
    </div> -->


    <footer>

    </footer>
 
    

    <script>
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
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
-->