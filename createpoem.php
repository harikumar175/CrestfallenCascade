

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
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i><u>Post a Poem</u>  </h2>
<p class="w3-center"><i class="fa fa-snowflake-o"></i><em>Crestfallers</em></p>


  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="title4.jpg" class="w3-image w3-round" style="width:75%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-circle fa-fw w3-text-white w3-xlarge w3-margin-right" aria-hidden="true"></i>Please provide respectful words and avoid errors as possible <br>

      </div>
      <?php
        if(isset($_POST['hello']))
        {
      include_once'dbh.inc.php';

      $title=$_POST['title'];
      $author=$_POST['author'];
      $poem=$_POST['poem'];
      $description=$_POST['description'];
      $sql="INSERT INTO emotional(title,author,poem,description) VALUES('$title','$author','$poem','$description');";
      mysqli_query($conn,$sql);
      echo"<h6 class='w3-left'>Congrats ".$author." Your poem has been posted in <i class='fa fa-heartbeat'></i> Emotions genre. Have a look.</h6>";
      }
      if(isset($_POST['phobic']))
        {
      include_once'dbh.inc.php';

      $title=$_POST['title'];
      $author=$_POST['author'];
      $poem=$_POST['poem'];
      $description=$_POST['description'];
      $sql="INSERT INTO phobic(title,author,poem,description) VALUES('$title','$author','$poem','$description');";
      mysqli_query($conn,$sql);
      echo"<h6 class='w3-left'>Congrats ".$author." Your poem has been posted in <i class='fa fa-snowflake-o'></i> Phobic genre. Have a look.</h6>";
      }
      if(isset($_POST['dream']))
        {
      include_once'dbh.inc.php';

      $title=$_POST['title'];
      $author=$_POST['author'];
      $poem=$_POST['poem'];
      $description=$_POST['description'];
      $sql="INSERT INTO dream(title,author,poem,description) VALUES('$title','$author','$poem','$description');";
      mysqli_query($conn,$sql);
      echo"<h6 class='w3-left'>Congrats ".$author." Your poem has been posted in <i class='fa fa-heart-o'></i> Dream genre. Have a look.</h6>";
      }
      if(isset($_POST['memories']))
        {
      include_once'dbh.inc.php';

      $title=$_POST['title'];
      $author=$_POST['author'];
      $poem=$_POST['poem'];
      $description=$_POST['description'];
      $sql="INSERT INTO memory(title,author,poem,description) VALUES('$title','$author','$poem','$description');";
      mysqli_query($conn,$sql);
      echo"<h6 class='w3-left'>Congrats ".$author." Your poem has been posted in <i class='fa fa-connectdevelop'></i> Memory genre. Have a look.</h6>";
      }
      ?>


      <form action="" target="" method="POST">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Title</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="Title" name="title">
                </div>
              </div>

              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Author</h5>
                  <input class="w3-input w3-border w3-black" type="text" placeholder="Author" name="author">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Poem</h5>
                  <textarea rows="4" cols="50" class="w3-input w3-border w3-black" type="text" placeholder="Post your Poem here..." name="poem"></textarea>
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <h5 class="w3-text-light-grey">Share a few words what made you to write this poem</h5>
                  <textarea rows="5" cols="50" class="w3-input w3-border w3-black" type="text" placeholder="Share your thoughts" name="description"></textarea>
                </div>
              </div>
              <h5 class="w3-text-light-grey">What genre do you prefer to post your poem</h5>
              <button class="w3-button w3-black w3-left w3-section" type="submit" name="hello">
                <i class="fa fa-heartbeat"></i> Emotional
              </button><button class="w3-button w3-black w3-left w3-section" type="submit" name="phobic">
                <i class="fa fa-snowflake-o"></i> Phobic
              </button>
              <button class="w3-button w3-black w3-left w3-section" type="submit" name="dream">
                <i class="fa fa-heart-o"></i> Dream
              </button>
              <button class="w3-button w3-black w3-left w3-section" type="submit" name="memories">
                <i class="fa fa-connectdevelop"></i> Memories
              </button>

            </form>
    </div>

  </div>

  </body>
  </html>
