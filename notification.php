

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- Header area start--> 
<header>
	<label for="check">
	<i class="fas fa-bars" id="sidebar_btn"></i>
	</label>
	<div class="left_area">
	<h3>&nbsp;&nbsp;Wel<span>come</span></h3>
	</div>
	<div class="right_area">
	<a href="logout.php" class="logout_btn">Logout</a>
	 </header>
<!-- Header area end -->
<!-- Side bar start -->
	<div class="sidebar">
	<center>
	<img src="images/profile.jpg" class="profile_image" alt="">
	<h4><?php 	
	include('connection.php');
    session_start();
	echo $_SESSION['username'];
	?></h4>
	</center>
	<a href="index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
	</div>
<!-- Side bar end -->

	<div class="container">
	<div class="backpage" style="margin-top:0%;">
	<a href="dashboard.php"><img src="images/back.png" width="50px" height="30px" style="float:right;"></a>
	</div>
	<table class="table table-success" border="1px" style="padding:50px;width:100%;margin-top:5%;position:absolute;border-collapse:collapse;">
		<tr>
			<th>Subject Knowledge and Professionalism</th>
			<th>Integrity and dedication to work</th>
			<th>Open to new ideas and interest to develop new skills</th>
			<th> Has positive attitude towards work </th>
			<th> Take initiatives beyond normal works</th>
			<th>Punctuality to work</th>
			<th>Communication and Negotiation skills</th>
			<th>Interpersonal relation and Teamwork </th>
			<th>Demonstrate respect for work and ideas</th>
			<th>Willingness to listen to what others say</th>
			<th>Oratory and presentation skills</th>
			<th>Carries out assigned task on time </th>
			<th>Remarks</th>
			</tr>
			<tr>
			<?php 
			include('connection.php');
		
			$id = $_GET['f_id'];
			$query1=mysqli_query($db,"Update feedback SET status=1 where status=0 AND id='$id'");
			$query = mysqli_query($db,"SELECT * FROM feedback where id='$id'");
			if($query-> num_rows > 0){
				while ($row = $query->fetch_assoc()){
					?>
					<td><?php  echo htmlentities($row["q1"]);?></td>
					<td><?php  echo htmlentities($row["q2"]);?></td>
					<td><?php  echo htmlentities($row["q3"]);?></td>
					<td><?php  echo htmlentities($row["q4"]);?></td>
					<td><?php  echo htmlentities($row["q5"]);?></td>
					<td><?php  echo htmlentities($row["q6"]);?></td>
					<td><?php  echo htmlentities($row["q7"]);?></td>
					<td><?php  echo htmlentities($row["q8"]);?></td>
					<td><?php  echo htmlentities($row["q9"]);?></td>
					<td><?php  echo htmlentities($row["q10"]);?></td>
					<td><?php  echo htmlentities($row["q11"]);?></td>
					<td><?php  echo htmlentities($row["q12"]);?></td>
					<td><?php  echo htmlentities($row["remarks"]);?></td>
					</tr>
					<?php
				}
					
			}
			
		?>
	
		
		</table>
		<?php include "footer.php"?>
	</div>
</body>
</html>

?>