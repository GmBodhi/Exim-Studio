  <!DOCTYPE html>
  <html>
    <head>
      
      <link rel="stylesheet" href="../../css/home.css">
      <link rel="stylesheet" href="../../css/mob.css">
      <link rel="stylesheet" href="../../css/style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="theme-color" content="#111">
      <link rel="shortcut icon" href="../../img/chem3d.jpg" type="image/jpg">
      <title>Organic reations</title>
    </head>
    <body style="background:#1c1c1c;">

  <?php
  require '../../Head/header.php';

   ?>

   <a href="../"><i id="bbt" class="material-icons" style="font-size:20px;border: 1px solid #fff;background:#fff;text-decoration:none;border-radius:100%;color:#111;padding:7px 7px 7px 7px;box-shadow: 2px 2px 5px #545454;margin-top:5px;position:sticky;top:0.5%;left:0.5%;">arrow_back</i></a>

    <div id="search">
      <h2>Organic reations</h2>
      <input type="text" id="Input" onkeyup="Function()" placeholder="Search for 3D models..." title="Search for 3D models...">

      <ul id="UL">
      	<li><a href="SN1">SN1 ( Nucleophilic Substitution Reaction )</a></li>
      	<li><a href="SN2">SN2 ( Nucleophilic Substitution Reaction )</a></li>

      </ul>
    </div>
    <div id="particles-js"></div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>
    <script src="../../js/app2.js"></script>

    <script>
    function Function() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        ul = document.getElementById("UL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
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
      document.getElementById("search").style.width = "80%";

    } else {
      document.getElementById("search").style.width = "50%";
      document.getElementById("bbt").style.left = "8%";
      document.getElementById("bbt").style.top = "15%";
      document.getElementById("bbt").style.position = "fixed";
    }
    }

    var x = window.matchMedia("(max-width: 600px)")
    ction(x)
    x.addListener(ction)
    </script>
    <script>
        function border() {
          var x = document.getElementById("chem");
          x.className = "active";
        }
        border();
    </script>
    </body>
  </html>
