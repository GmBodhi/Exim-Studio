<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="theme-color" content="#111">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Donate - Exim Studio</title>
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/jpg">
    <style>
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
  <body style="background:#111;height:100%;">

    <div class="topnav" id="myTopnav">
      <a href="" class="active">Donate</a>
      <a href="/subscribe">subscribe</a>
      <a href="team">About</a>
      <a href="compute/">Numerus</a>
      <a href="PhysiX/">PysiX</a>
      <a href="Chem3D/">Chem3D</a>
      <a href="/">Home</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div>
      <div style="width:100%;height:auto;align:center;">
        <div id="11" style="color:#fff;position:absolute;top:29%;left:50%;transform: translateX(-50%);"  data-aos="fade-up"data-aos-duration="3000"
       data-aos-anchor-placement="top-center">
       <h1>We don't accept money at the moment..!</h1>
        </div>
      </div>
      <div id="22" style="position:absolute;top:36%;left:50%;transform: translateX(-50%);text-align:center;">
        <div style="color:#fff;"  data-aos="fade-up"data-aos-duration="1000"data-aos-delay="1500"
         data-aos-anchor-placement="top-center">
         <h1>But you can donate some 3D models..!</h1>
        </div>
      </div>
      <div id="33" style="position:absolute;top:43%;left:50%;transform: translateX(-50%);text-align:center;">
        <div style="color:#fff;"  data-aos="fade-up"data-aos-duration="1500" data-aos-delay="3000"
       data-aos-anchor-placement="top-bottom">
      <h1>To donate send an E-mail to</h1>
        </div>
      </div>
      <div id="44" style="position:absolute;top:50%;left:50%;transform: translateX(-50%);text-align:center;">
        <div style="color:#fff;"  data-aos="fade-up" data-aos-duration="2000" data-aos-delay="3000"
       data-aos-anchor-placement="top-bottom">
      <h1><a style="color:#0043c9;" href="mailto:contact@eximstudio.com">contact@eximstudio.com</a></h1>
        </div>
      </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  <script>
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
    document.getElementById("11").style.top = "16%";
    document.getElementById("22").style.top = "36%";
    document.getElementById("33").style.top = "53%";
    document.getElementById("44").style.top = "65%";
  } else {
    //nothing
  }
  }
  var x = window.matchMedia("(max-width: 750px)")
  ction(x)
  x.addListener(ction)
  </script>
     
  </body>
</html>
