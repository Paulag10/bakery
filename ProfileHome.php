<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Source https://www.w3schools.com/howto/howto_js_slideshow.asp(For the Slide Show)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Bakery.css" rel="stylesheet"/>
        <title></title>
    </head>
    <body>
        <h1>Sweet Shop </h1>
        <aside>

            <ul>


                <ul>

                    <li><a href="index.php?action=list_products"> View Sweets  </a></li>
                    <li><a href="index.php?action=events"> View Events  </a></li>
                    <li><a href="ContactU.php">Contact Us</a></li>
                </ul>
            </ul>
        </aside>
    </head>
<body>

    <div class="center">    
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="images/Smores.jpg" style="width:110%">
            </div>


            <div class="mySlides fade">
                <img src="images/M&MCake.jpg"  style="width:110%">
            </div>

            <div class="mySlides fade">
                <img src="images/Wiped.jpg" style="width:110%">
            </div>
            <div class="mySlides fade">
                <img src="images/MonsterCookie.jpg" style="width:110%">
            </div>
            <div class="mySlides fade">
                <img src="images/Oreo-Truffles.jpg" style="width:110%">
            </div>
            <div class="mySlides fade">
                <img src="images/Rustic.jpg" style="width:110%">
            </div>

        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>



</body>
</html> 


</body>
</html>
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
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000);
    }
</script>
