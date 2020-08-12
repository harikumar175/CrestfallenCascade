<!DOCTYPE html>
<html>
<title>Crestfallers</title>
<link rel="shortcut icon" type="image/x-icon" href="title3.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */

/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */

/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">
<nav class=" w3-bar-block w3-small w3-hide-small w3-center">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="emotional.php" class="w3-button w3-block w3-black"><h6><i class="fa fa-heartbeat"></i> Emotions</h6></a>
    </div>
    <div class="w3-col s3">
      <a href="phobic.php" class="w3-button w3-block w3-black"><h6><i class="fa fa-snowflake-o"></i> Phobic</h6></a>
    </div>
    <div class="w3-col s3">
      <a href="dream.php" class="w3-button w3-block w3-black"><h6><i class="fa fa-heart-o"></i> Dream</h6></a>
    </div>
    <div class="w3-col s3">
      <a href="memory.php" class="w3-button w3-block w3-black"><h6><i class="fa fa-connectdevelop"></i> Memory</h6></a>
    </div>
</div>

    </div>
  </nav>
  </div>
</div>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="emotional.php" class="w3-bar-item w3-button" style="width:25% !important"><h6 style="color:white">Emotions</h6></a>
    <a href="phobic.php" class="w3-bar-item w3-button" style="width:25% !important"><h6>Phobic</h6></a>
    <a href="dream.php" class="w3-bar-item w3-button" style="width:25% !important"><h6>Dream</h6></a>
    <a href="memory.php" class="w3-bar-item w3-button" style="width:25% !important"><h6>Memory</h6></a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <br>
  <header class="w3-container w3-padding-32 w3-center w3-black" >
    <img src="dream.png" alt="boy" class="w3-image w3-animate-fading" width="250" height="450">


  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About</h2>
    <hr style="width:150px" class="w3-opacity">
    <p class="w3-text-white">Dreams is the recollection of the situation, and it further takes the signal; face of emotions, feelings. Our own past and future are dependent on dreams. Many people recollect their past, happy moments and think about it, many of them think about their future as to in what way will their future be build up. So you see there are many reasons to prove that dreams are necessary in every ones life.
    </p><br>
    <hr class="w3-opacity">
  </div>


  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="poem">
    <h2 class="w3-text-light-grey">POEMS</h2>
    <hr style="width:150px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <h2 class="w3-center">Resilience</h2>
      <h5 class="w3-right">-Hema</h5>
      <div class="w3-row-padding" style="margin:0 -12px">
      <pre><h6 class="w3-center">
Yes, she has been fractured
ruptured and broken.
All the lustre she had faded;
and what others would do is just mourn.
 
Loss, loss, loss!
Her blithe friends and family,
Everyone pointed out her flaws.
HOPE that’s what kept her lively.
 
Understanding things are circumstantial
she hoped that things would get right.
Did things which made her life substantial,
thereby slowly peeped the rays of light.
 
She picked herself from the dark
and now what she made was others to spark.
She may have lost a move not the game,
Now resilience is her new name....

</h6></pre>

 <h3 class="w3-padding-24 w3-text-light-grey">Description</h3>
 <h9>Resilience is not a trampoline, where you’re down one moment and up the next. It’s more like climbing a mountain without a trail map. It takes time, strength, and help from people around you, and you’ll likely experience setbacks along the way. But eventually you reach the top and look back at how far you’ve come.Some people equate resilience with mental toughness, but demonstrating resilience includes working through emotional pain
 </h9> <button class="w3-button w3-black w3-right w3-section" type="submit" name="submit" >
   <i class="fa fa-times"></i> Delete
 </button>
 <hr class="w3-opacity">
 <div class="w3-row-padding" style="margin:0 -16px">

   <?php
    include('dbh.inc.php');
    $sqlget="SELECT*FROM dream";
    $sqldata=mysqli_query($conn,$sqlget);
   while($row=mysqli_fetch_array($sqldata))
   {
  echo"<h2 class='w3-center'>";
     echo $row['title'];
     echo"</h2>";
     echo "<h5 class='w3-right'>";
     echo $row['author'];
     echo"</h5>";
     echo"<div class='w3-row-padding' style='margin:0 -12px'>";
     echo"<pre>";
     echo"<h6 class='w3-center'>";
  echo $row['poem'];
  echo"</h6>";
  echo"</pre>";
  echo"<h3 class='w3-padding-24 w3-text-light-grey'>Description</h3>";
  echo"<h9>";
  echo $row['description'];
  echo"</h9>";
  echo"<hr class='w3-opacity'>";

  ?><a href='crud4.php?delete=<?php echo $row['si_no'];?>';
      <?php
      echo"<center>";
  echo"<button class='w3-button w3-black w3-middle w3-section' type='submit' name='delete'>";
    echo"<i class='fa fa-times'></i>";
    echo" Delete";
    echo"</button>";
    echo"</center>";
    echo"</a>";
  ?>
  <?php
  }

  ?>

    <!-- End photo grid -->
    </div>

  <!-- End Portfolio Section -->
  </div>


  <!-- Contact Section -->
  <div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">For Queries</h3>
  <p class="w3-center"><em>We'd  &nbsp;<i class="fa fa-heart w3-text-red"></i>love to hear your feedback!</em></p>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="title3.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">

      <p>You can just leave a note:)</p>
      <?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['message'];

  $to='crestfallencascade@gmail.com';
  $message="Name: ".$name."\n\n"."Email: ".$email."\n\nWrote the following message: ".$msg;
  $header="From :".$email;
  mail($to,$header,$message);
  echo"<h4>Thank You!".$name."We'll contact you soon.</h4>";

}

 ?>
      <form action="" target="" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border w3-black" type="text" placeholder="Name"  name="name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border w3-black" type="text" placeholder="Email" name="email">
          </div>
        </div>
        <input class="w3-input w3-border w3-black" type="text" placeholder="Message"  name="message">
        <button class="w3-button w3-black w3-right w3-section" type="submit" name="submit" >
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>

  <!-- End Contact Section -->
  </div>
</div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 ">
    <a href="mainadmin.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-left w3-margin-right"></i>Back</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover w3-hover-text-blue"></i>
      <i class="fa fa-instagram w3-hover w3-hover-text-pink"></i>
      <i class="fa fa-snapchat w3-hover w3-hover-text-yellow"></i>
      <i class="fa fa-pinterest-p w3-hover w3-hover-text-red"></i>
      <i class="fa fa-twitter w3-hover w3-hover-text-light-blue"></i>

    </div>
    <p>Copyright &copy;CrestfallenCascade</p>
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
