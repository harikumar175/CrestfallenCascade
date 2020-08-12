

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

  <br><br>


<link type="text/css" rel="stylesheet" href="style.css">
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i><u>Create a new account</u></h2>
<p class="w3-center"><i class="fa fa-snowflake-o"></i><em>Crestfallers</em></p>

<?php
  if(isset($_POST['hello']))
  {
include_once'dbh.inc.php';

$name=$_POST['name'];
$username=$_POST['username'];
$emailid=$_POST['emailid'];
$date=$_POST['date'];
$discription=$_POST['description'];
$genre=$_POST['genre'];
$password=$_POST['password'];
$sql="INSERT INTO login(name,username,emailid,Dateofbirth,description,genre,pwd) VALUES('$name','$username','$emailid','$date','$discription','$genre','$password');";
mysqli_query($conn,$sql);
  echo"<h6 class='w3-center'>Congrats ".$name." Account Created Successfully.</h6>";
}
?>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="title4.jpg" class="w3-image w3-round" style="width:75%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-circle fa-fw w3-text-white w3-xlarge w3-margin-right" aria-hidden="true"></i>Its quick and easy <br>
      </div>
      <form action="" target="" method="POST">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Name</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="Name" name="name">
                </div>
              </div>

              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Username</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="Username" name="username">
                </div>
              </div>

              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Email Id</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="Email Id" name="emailid">
                </div>
              </div>


              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Your Birthday</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="(dd/mm/yyyy)" name="date">
                </div>
              </div>

              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Tell a few words about yourself</h5>
                  <textarea rows="4" cols="50" class="w3-input w3-border w3-black" type="text" placeholder="A new Crestfaller.." name="description"></textarea>
                </div>
              </div>


              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
              <h5 class="w3-text-light-grey">What genre of poems do you prefer?</h5>
              <input class="w3-input w3-border w3-black" type="text" placeholder="Genre.." name="genre">
            </div>
            </div>


            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <h5 class="w3-text-light-grey">New Password</h5>
              <input class="w3-input w3-border w3-black" type="password" placeholder="New Password" name="password">
              </div>
            </div>

            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <button class="w3-button w3-black  w3-section" type="submit" name="hello">
              <i class="fa fa-user"></i> Signup
            </button>
          </div>
            </form>
    </div><br>
    <footer class="w3-center w3-black w3-padding-64 ">

      <a href="index.php" class="w3-button w3-black"><h6><i class="fa fa-arrow-left w3-margin-right"></i>Exit</h6></a>
      <div class="w3-xlarge w3-section">

      <i class="fa fa-facebook-official w3-hover w3-hover-text-blue"></i>
      <i class="fa fa-instagram w3-hover w3-hover-text-pink"></i>
      <i class="fa fa-snapchat w3-hover w3-hover-text-yellow"></i>
      <i class="fa fa-pinterest-p w3-hover w3-hover-text-red"></i>
      <i class="fa fa-twitter w3-hover w3-hover-text-light-blue"></i>

    </div>
    <p>Copyright &copy;CrestfallenCascade</p>
  </footer>
  </div>


  </body>
  </html>
