<!DOCTYPE html>
<html>
<title>Crestfallers</title>
<link rel="shortcut icon" type="image/x-icon" href="title3.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Megrim">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parisienne">
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

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#poem" class="w3-button w3-block w3-black">POEM</a>
    </div>
    <div class="w3-col s3">
      <a href="#home" class="w3-button w3-block w3-black">QUOTES</a>
    </div>
    <div class="w3-col s3">
      <a href="accounts.php" class="w3-button w3-block w3-black">ACCOUNTS</a>
    </div>
    <div class="w3-col s3">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-block w3-black">SIGNOUT</button>

  <div id="id01" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-black">
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h2><i class="fa fa-user"></i>&nbsp;Signout</h2>
      </header>
      <div class="w3-container w3-black">
        <h4>Are you sure you want to signout?</h4>
      </div>
      <footer class="w3-container w3-black">
      <a href="index.php">  <button class="w3-button w3-black w3-left w3-section " type="submit">
           Yes
        </button></a>&nbsp;&nbsp;
      <a href="mainadmin.php">  <button class="w3-button w3-black w3-left w3-section" type="submit">
           No
        </button></a><br>
      </footer>
    </div>
  </div>
</div>

    </div>
  </div>


<!-- Navbar on small screens (Hidden on medium and large screens) -->


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" >
    <img src="title2.jpg" alt="boy" class="w3-image" width="230" height="430">
    <h3 style=font-family:"Parisienne">"R<span style="color:red">evol</span>ution is <span style="color:red">Love</span>"</h3>
    <h2 style=font-family:"Parisienne">Admin Page</h2>
    <img src="sakura.jpg" alt="boy" class="w3-image" width="400" height="600">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About</h2>
    <hr style="width:200px" class="w3-opacity">
    <p class="w3-text-white">MEMORIES probably the hardest thing to get over.For you too probably .most people start writing coz of that. And I am no exception. And writing does help you to bring your soul out. Probably it’s the best way you could. Maybe talking wouldn’t help you but a pen and paper would do much a great job. And write to feed your thoughts and soul and not others. So yah this is a place none judge and you can pour out your heart. Well poems had been a tool to vent out the chains holding me from the past. There are people around you constantly teaching you what life is either by standing by you or turning against you.That’s how it works, no change. But you can bring a change to your within by penning your feelings. Than spoken words, written words has its own charm and spell. Lets put out our writeups to bring out the charm. Let the poems do the rest of talking!!
    </p>
  </div>
    <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: black;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}
</style>
</head>

  <br>
  <br>
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="home">
  <h2 class="w3-text-light-grey" >Qoutes</h2>
  <hr style="width:200px" class="w3-opacity">

<div class="slideshow-container" >

  <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM quotes";
   $sqldata=mysqli_query($conn,$sqlget);
  while($row=mysqli_fetch_array($sqldata))
  {
  echo"<div class='mySlides'>";
    echo"<h4>";
    echo"<q style='color:white';>";
    echo $row['quotes'];
    echo"</q>";
    echo"</h4>";

    echo"<p style='color:white';>";
    echo $row['author'];
    echo"</p>";
    ?>
    <a href='crud1.php?delete=<?php echo $row['si_no'];?>';
      <?php
      echo"<center>";
  echo"<button class='w3-button w3-black w3-middle w3-section' type='submit' name='delete'>";
    echo"<i class='fa fa-paper-plane'></i>";
    echo"Delete";
    echo"</button>";
    echo"</center>";
    echo"</a>";
  ?>
  <?php
  echo"</div>";
}
?>


<div class="mySlides">
  <h4><q style="color:white";>I love you the more in that I believe you had liked me for my own sake and for nothing else</q></h4>
  <p style="color:white";>- Sarah</p>
  <center><button class="w3-button w3-black w3-middle w3-section " type="submit">
    <i class="fa fa-paper-plane"></i> Delete
  </button></center>
</div>

<div class="mySlides">
<h4>  <q style="color:white";>Dream without fear.Love without limits</q></h4>
  <p style="color:white";>- Sarah</p>
  <button class="w3-button w3-black w3-middle w3-section " type="submit">
    <i class="fa fa-paper-plane"></i> Delete
  </button>
</div>

<div class="mySlides">
<h4>  <q style="color:white";>Love is cause of extreme happiness and even extreme sorrow.</q></h4>
  <p style="color:white";>- Sarah</p>
  <center><button class="w3-button w3-black w3-middle w3-section " type="submit">
    <i class="fa fa-paper-plane"></i> Delete
  </button></center>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>




<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<hr class="w3-opacity">  </div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-container w3-middle">
<center>  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black w3-middle"><h3 style=font-family:"Parisienne"><u>Create a Quote</u></h3></button></center>

  <div id="id02" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-black">
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
      <h2><i class="fa fa-snowflake-o"></i>&nbsp;Create a Qoute</h2>
      </header>
      <?php
        if(isset($_POST['submit']))
        {
      include_once'dbh.inc.php';

      $quotes=$_POST['quotes'];
      $author=$_POST['author'];
      $sql="INSERT INTO quotes(quotes,author) VALUES('$quotes','$author');";
      mysqli_query($conn,$sql);

      }
      ?>
      <div class="w3-container w3-black">
        <form action="" target="" method="POST">
          <h4 class="w3-text-light-grey">Quotes</h4>

          <div class="w3-full">
            <textarea class="w3-input w3-border w3-black" type="text" placeholder="Quotes"  name="quotes"></textarea>
          </div><br>

          <h6 class="w3-text-light-grey">Author</h6>

          <div class="w3-full">
            <input class="w3-input w3-border w3-black" type="text" placeholder="Author"  name="author">
          </div>
          <footer class="w3-container w3-black">
            <button class="w3-button w3-black w3-left w3-section " type="submit" name="submit">
              <i class="fa fa-paper-plane"></i> Submit
            </button>
          </footer>
        </form>
      </div>

    </div>
  </div>
</div>



  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="poem">
    <h2 class="w3-text-light-grey">POEMS</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <h2 class="w3-center">Dysphoria</h2>
      <h5 class="w3-right">-Hema</h5>
      <div class="w3-row-padding" style="margin:0 -12px">
      <pre><h6 class="w3-center">
She stood there clad in white
ready to take over me.
Since when i lost my light;
she made her presence without any fee.

Light; that was him in my life. 
We were never him and I t’was us.
Until death pleasured him with a cruel knife,
leaving me all alone with a tangled mess

Locked myself in a doorless cage of loneliness,
since then she started paying visits.
Fear of deprivation and emptiness;
Made me keep my friends in limits.

There i lay wide awake due to insomnia
She made it all happen.
Her name was thantophobia,
Fear of losing your loved one....

</h6></pre>

 <h3 class="w3-padding-24 w3-text-light-grey">Description</h3>
 <h9>Intense states of distress and unease increase the risk of suicide, as well as being unpleasant in themselves. Relieving dysphoria is therefore a priority of psychiatric treatment. One may treat underlying causes such as depression or bipolar disorder as well as the dysphoric symptoms themselves.Juz came out to bring how they feel.Introverted...
 </h9>
 <hr class="w3-opacity">
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
</h9>
<hr class="w3-opacity">
<a href="emotional.php"><center><button class="w3-button w3-black w3-middle"><h3 style=font-family:"Parisienne"><u>More Collections of Poems</u></h3></button></center></a>
<a href="createpoem.php"><center><button class="w3-button w3-black w3-middle"><h3 style=font-family:"Parisienne"><u>Create a Poem</u></h3></button></center></a>
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
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
