<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style for mob.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="We make what we learn..!">
    <meta name="theme-color" content="#111111">
    <meta name="author" content="Gautam">
    <meta name="keywords" content="Chemistry, Physics, Maths, Mathematics, PhysiX, Chem3D, Numerous, Eximstudio, eximstudio, exim studio">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Exim Studio</title>
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/jpg">
    <style>
      .social{
        font-size: 25px;
        color: #111;
        margin-right: 10px;
        text-align: center;
      }
.inter{
  border-bottom: 1.5px solid #fff;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #818181; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #4e4e4e; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #2b2b2b; 
  border-radius: 3px;
}
    </style>
  </head>
  <body style="background:#7c7c7c;">
    <div class="topnav" id="myTopnav">
      <a href='Donate'>Donate</a>
      <a href="/subscribe">subscribe</a>
      <a href="team">About</a>
      <a href="compute/">Numerus</a>
      <a href="PhysiX/">PysiX</a>
      <a href="Chem3D/">Chem3D</a>
      <a href="/" class="active">Home</a>



      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
        <div class="swiper-container">
          <div class="parallax-bg" style="background:#7c7c7c" data-swiper-parallax="-23%"></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a class="slide-link" href="Chem3D/">
              <div class="title" data-swiper-parallax="-300">Chem3D</div>
              <div class="subtitle" data-swiper-parallax="-200">Enjoy our free Chemistry 3D resources..!</div>
              <div class="text" data-swiper-parallax="-100">
                <p>Can't visualize...? Don't worry we are here to help you..!
		With our 3D resources, you can easily understand every concept.
 		</p>
              </div></a>
            </div>
            <div class="swiper-slide"><a class="slide-link" href="PhysiX/">
              <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">PhysiX</div>
              <div class="subtitle" data-swiper-parallax="-200">Beta version is Live now..!</div>
              <div class="text" data-swiper-parallax="-100">
                <p>We make <span class="inter" style=""><b>interactive</b></span> 3D resources for physics</p>
              </div></a>
            </div>
            <div class="swiper-slide"><a class="slide-link" href="compute/">
              <div class="title" data-swiper-parallax="-300">Numerus</div>
              <div class="subtitle" data-swiper-parallax="-200">Comming Soon..!</div>
              <div class="text" data-swiper-parallax="-100">
                <p></p>
              </div></a>
            </div>
          </div>

          <div class="swiper-pagination swiper-pagination-white"></div>

          <div class="swiper-button-prev swiper-button-white"></div>
          <div class="swiper-button-next swiper-button-white"></div>
        </div>
        <footer style="text-align:center;">
            <a style="text-decoration:none;color:#000;float:center;" href="/"><h2>Exim Studio</h2></a>
            <a id="fb" class="social" href="https://facebook.com/Eximstudio" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a id="tw" class="social" href="https://twitter.com/Eximstudio" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a id="wa" class="social" href="https://wa.me/message/PPCTLRRX77FZB1" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a id="in" class="social" style="margin-right:5px;" href="https://www.instagram.com/eximstudio" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> <br>
            <a href="legal"></a>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
        speed: 600,
        parallax: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,

        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
    
    <script>
    function ction(x) {
    if (x.matches) {

    } else {
      //nothing
    }
    }
    var x = window.matchMedia("(max-width: 768px)")
    ction(x)
    x.addListener(ction)
    </script>
  </body>
</html>
