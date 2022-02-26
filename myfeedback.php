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
	
	<a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
	<a href="add_feedback.php"><i class="fa fa-plus-circle"></i><span>Give Feedback</span></a>
    <a href="myfeedback.php"><i class="fas fa-table"></i><span>Display Feedback</span></a>  
	</div> 
  
</div>
<!-- Side bar end -->
		
			<?php 
			include('connection.php');
			$user=$_SESSION['username'];
			$query1=mysqli_query($db,"SELECT * FROM users where username='$user' ");
			$row=mysqli_fetch_array($query1);
			$id=$row['id'];
			$result_per_page=5;
			$cnt=1;
			$query = mysqli_query($db,"SELECT * FROM feedback where given_to='$id' AND status=1 ORDER BY id DESC");
			$number_of_results = mysqli_num_rows($query);
			//determine  no of total page available
			$number_of_pages = ceil($number_of_results/$result_per_page);
			//determine which page the visitor is currently on
			if(!isset($_GET['page'])){
				$page=1;
			}
			else{
				$page=$_GET['page'];
			}
			//determine the sql LIMIT starting numbers for the results on the displaying page
			$this_page_first_result=($page-1)*$result_per_page;
			//retrieve selected results from database and display them on the page
			$sql="SELECT * FROM feedback where given_to='$id' AND status=1 ORDER BY id DESC LIMIT " .$this_page_first_result . ',' .$result_per_page;
			$result = mysqli_query($db,$sql);
				if($query-> num_rows > 0){?>
				<div class="container">
				<table align="center" border="2" style="margin-left:0%;margin-top:-2%;">

			
			<th>Slno</th>
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
			
			
			<tr><?php
				$count = 1;
				while($row=mysqli_fetch_array($result)){
					?>
					<td><?php echo $count++;?></td>
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
				
				$cnt=$cnt+1;
				}
					
		
			
		?>
		</table></div>
		
	<div class="pagination" style="margin-left:5%;margin-top:45%;position:absolute;">
	<?php
		for($page=1;$page<=$number_of_pages;$page++){
			echo '<a href="myfeedback.php?page=' .$page . '" style="background-color:#f44336;display:inline-block;padding:10px 10px;">'.$page. '</a>';
		}
		}				
				
	?>
	
	</div>
							
</body>
</html>