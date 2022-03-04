<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<style>
body{
	margin:0;
	padding:0;
	font-family:"Roboto", sans-serif;
	}
</style>
	
</head>
<body>
<input type="checkbox" id="check">

<!-- Header area start -->
<header>
	<label for="check">
	<i class="fas fa-bars" id="sidebar_btn"></i>
	</label>
	<div class="left_area">
	<h3>&nbsp;&nbsp;Wel<span>come</span></h3>
	</div>
	<div class="right_area">
	<a href="logout.php" class="logout_btn">Logout</a>
	<?php
    $user=$_SESSION['username'];
	$query3=mysqli_query($db,"SELECT * FROM users where username='$user'");
	$row=mysqli_fetch_array($query3);
	$id=$row['id'];
	$query2 = mysqli_query($db,"SELECT * FROM feedback f WHERE  f.status=0 AND f.given_to='$id'");
	$count = mysqli_num_rows($query2);
	?>  
	<div class="navbar1">
	<div class="dropdown1">
	<button class="dropbtn1"><span>
      <img src="images/bell.png" height="45px" width="50px"><?php if($count>0){
	  echo $count;}
	  else{
	  echo "No feedback";}
		  ?></span>
	<i class="fa fa-caret-down"></i>
	</button>
	<div class="dropdown-content1">
	<?php 
	 foreach($query2 as $row){
    ?>
     <a href="notification.php?f_id=<?php echo htmlentities ($row['id']);?>">You have a new feedback</a>
	<?php
	 }
    ?>	 
  </div>
  </div>
  </div>
  </div>
</header>
<!-- Header area end -->
<!-- Side bar start -->
	<div class="sidebar">
	<center>
	<img src="images/profile.jpg" class="profile_image" alt="">
	<h4><?php 	
	include('connection.php');
	echo $_SESSION['username'];
	?></h4>
	</center>
	<a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
	<a href="add_feedback.php"><i class="fa fa-plus-circle"></i><span>Give Feedback</span></a>
	<a href="myfeedback.php"><i class="fas fa-table"></i><span>Display Feedback</span></a>
	</div>
<!-- Side bar end -->

	<div class="content">
	<?php include "footer.php"?>
	</div>
</body>
</html>