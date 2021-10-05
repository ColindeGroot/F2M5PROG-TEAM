<?php $this->layout('layouts::index');?>
    <div>
        <div class="webslider" id="home"></div>
    </div>

    <!-- fotoslider -->

    <div class="slideshow-container">

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

    <!-- life sucks -->
    <div class="lifesuckssection">
        <div class="lifeSection">
            <h1>Life Sucks Sometimes</h1>
            <h2>Maar je staat er niet alleen voor.</h2>
            <p>De transformers community is er voor jongeren die<br>zelfverzekerd willen zijn en tegenslagen omzetten in<br> kracht. We doen dit samen: zo leren we meer<br> en helpen we elkaar om te groeien.</p>
        
        </div>
        <div class="buttonDiv">
                <a class="lifeButton" href="#">Naar community</a>
        </div>
    </div>

    <!-- Fotos van transformers -->
    <div class="transformers" id="dash">
        <div class="transformer1">
            <a href="#"><p></p></a>
            <div class="black1"></div>
        </div>
        <div class="transformer2">
            <a href="#"><p></p></a>
            <div class="black1"></div>
        </div>
        <div class="transformer3">
            <a href="#"><p></p></a>
            <div class="black1"></div>
        </div>
        <div class="transformer4">
            <a href="#"><p></p></a>
            <div class="black1"></div>
        </div>
        <div class="transformer5">
            <a href="#"><p></p></a>
            <div class="black1"></div>
        </div>
    </div>

    

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