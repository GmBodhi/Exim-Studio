<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   
    <meta charset="utf-8">
    <title>Subscribe - Exim Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <meta name="theme-color" content="#111">
    <link rel="stylesheet" href="css/mob.css">
  </head>
  <body style="background:#111;">
<?php
require "Head/header.php"
?>
      <!-- Begin Mailchimp Signup Form -->
      <div class="box" id="mc_embed_signup">
        <form action="https://eximstudio.us19.list-manage.com/subscribe/post?u=d2a7c476edd6e258ab5c6d62e&amp;id=32196e275a"
          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" 
          novalidate>
          <div id="mc_embed_signup_scroll">
            <h1>Subscribe</h1>
            <p id="error" style="display: none;"></p>
            <div class="mc-field-group">
              <label for="mce-EMAIL">Email Address </label> <br>
              <input type="email" value="" name="EMAIL" autofocus required class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group">
              <label for="mce-FNAME">First Name </label> <br>
              <input type="text" value="" name="FNAME" required class="required" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
              <label for="mce-LNAME">Last Name(Optional) </label> <br>
              <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
           <br>
            <div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                class="button submin" disabled>Subscribe</button></div>
          </div>
        </form>
      </div>
      <!--End mc_embed_signup-->
      <script>
        function formvalid(){
          var fname = document.getElementById('mce-FNAME').value;
          var mail = document.getElementById('mce-EMAIL').value;
          var fv = mail.lastIndexOf('@');
          var mv = mail.lastIndexOf('.');
          //console.log( fv + "" + mv);
          if (mail == "") {
              document.getElementById('error').style.display = "none";
          } else {
            if (fv == -1 || mv <= 0 ) {
              document.getElementById('error').style.display = "block";
              document.getElementById('mc-embedded-subscribe').setAttribute("disabled", "");
            } else if (fname == "") {
              document.getElementById('mc-embedded-subscribe').setAttribute("disabled", "");
            }else{
              document.getElementById('error').style.display = "none";
              document.getElementById('mc-embedded-subscribe').removeAttribute("disabled");
            }
          }
        }
       setInterval(() => {
         formvalid();
       }, 10);
       function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>
  </body>
</html>
