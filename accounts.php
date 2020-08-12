<!DOCTYPE html>
<title>Crestfaller</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="title3.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-black">

<!-- Top container -->
  <header class="w3-container w3-padding-32 w3-center w3-black" >
<img src="title2.jpg" alt="boy" class="w3-image w3-animate-fading" width="330" height="530">
<center><h4>Account Holders</h4>

</header>

<!-- Overlay effect when opening sidebar on small screens -->


<!-- !PAGE CONTENT! -->

  <!-- Header -->


<style>
table {

border-collapse: collapse;
width: 100%;
}

table td, table th {
border: 1px solid white;
padding: 8px;
}

table tr:nth-child(even){background-color: black;}

table tr:nth-child(odd) {
background-color: black;
}

table tr:hover {background-color: #403b3b;}

table th {
padding-top: 10px;
padding-bottom: 10px;
text-align: left;
background-color: #403b3b;
color: white;
}
</style>

<div class="w3-container">

  <?php
 include('dbh.inc.php');
 $sqlget="SELECT*FROM login";
 $sqldata=mysqli_query($conn,$sqlget);
echo"<table >";
echo" <tr>
   <th><b>Si.No</b></th>
    <th><b>Name </b></th>
    <th><b>Username</b></th>
    <th><b>Email Id</b></th>
    <th><b>Date of Birth</b></th>
    <th><b>Description</b></th>
    <th><b>Genre</b></th>
    <th><b>Password</b></th>
     </tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
  echo"<tr><td>";
  echo $row['id'];
  echo"</td><td><b>";
  echo $row['name'];
  echo"</b></td><td>";
  echo $row['username'];
  echo"</td><td>";
  echo $row['emailid'];
  echo"</td><td>";
  echo $row['Dateofbirth'];
  echo"</td><td><b>";
  echo $row['description'];
  echo"</b></td><td>";
  echo $row['genre'];
  echo"</td><td>";
  echo $row['pwd'];
  echo"</td></tr>";
}
echo"</table>";
?>

<br>

  </div>
  <hr>







  <!-- End page content -->
</div>
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


</body>
</html>
