<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<title>Crestfallers</title>
<link rel="shortcut icon" type="image/x-icon" href="title3.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body class="w3-black">

  <div class="bgimg-4 w3-display-container"id="gallery">
    <div class="w3-display-middle w3-col m4 w3-container">
     <img src="title5.jpg" class="w3-image w3-round" style="width:80%">
    </div>
  </div>
  <style>
  .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgimg-4 {
  background-image: url("img2.jpg");
  min-height: 400px;
}
</style>

  <br><br>


<link type="text/css" rel="stylesheet" href="style.css">
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i> Admin Account  </h2>
<p class="w3-center"><em>Crestfallers</em></p>


  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="title4.jpg" class="w3-image w3-round" style="width:80%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-circle fa-fw w3-text-white w3-xlarge w3-margin-right" aria-hidden="true"></i>Sign-in to monitor Poetry Activities <br>
      </div>
      <form action="login.inc.php" target="" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border w3-black" type="text" placeholder="Username" name="username">
          </div>
        </div>
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border w3-black" type="password" placeholder="Password" name="password">
          </div>
        </div>
        <button class="w3-button w3-black w3-left w3-section" type="submit" name="hello">
          <i class="fa fa-user"></i> LOG IN
        </button>
            </form>
            <a href="index.php"><button class="w3-button w3-black w3-left w3-section" type="submit" name="hello">
          <i class="fa fa-sign-out"></i> Back
        </button></a>
    </div>
  </div>

  </body>
  </html>
