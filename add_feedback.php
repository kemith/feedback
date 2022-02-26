<?php
include('connection.php');
if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$quest1 = $_POST['quest1'];
		$quest2 = $_POST['quest2'];
		$quest3 = $_POST['quest3'];
		$quest4 = $_POST['quest4'];
		$quest5 = $_POST['quest5'];
		$quest6 = $_POST['quest6'];
		$quest7 = $_POST['quest7'];
		$quest8 = $_POST['quest8'];
		$quest9 = $_POST['quest9'];
		$quest10 = $_POST['quest10'];
		$quest11 = $_POST['quest11'];
		$quest12 = $_POST['quest12'];
		$remarks = $_POST['remarks'];
		$sql = "INSERT INTO feedback(given_to,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,remarks) VALUES 
		('$user','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$remarks')";
		$run_insert = mysqli_query($db,$sql);
		if($run_insert){
		echo "<script>alert('successfully inserted.')
				location.href = 'dashboard.php?attempt=success';
				</script>";
		}
		else{
			echo "<script>alert('sorry.Error occurred!!!');</script>";
		}
}
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
	<div class="scrollbar">
	 <div class="container">
		
		<h4>&nbsp;&nbsp;The results of this survey will help employees under the UPD to understand and analyze one's promise and &nbsp;&nbsp;weakness based on the judgement of colleagues and head of the Division. This is in an effort to nurture talent, &nbsp;&nbsp;facilitate personal growth and improve the division's overall performance and output.
         The feedback responses &nbsp;&nbsp;collected will be ANONYMOUS and hence everyone is encouraged to give an honest review and assessment.</h4>
        &nbsp;&nbsp;<button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Strongly Agree 5</button>
        <button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Agree 4</button>
        <button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Neutral 3</button>
        <button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px"> Disagree 2</button>
        <button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Strongly Disagree 1</button><br>
		</br></br>
		<form method="post" action ="" enctype="">
         &nbsp;&nbsp;
          Select Employee:
		   <?php 
			include('connection.php');
			$query= mysqli_query($db,"SELECT * FROM users");
	
			?>
			<select name="user">
			<?php
			while($row = mysqli_fetch_array($query)){
			?>
				<option value ="<?php echo $row["id"];?>">
				<?php echo $row["username"];?>
				</option>
			<?php
			}
			?>
		
			</select>  </br>
			</br>
            <table border=1">
                <tr>
                <td><b>1.</b>Subject Knowledge and Professionalism</td>
                <td><input type="radio" name="quest1" value="5" required> 5</td>
                <td><input type="radio" name="quest1" value="4">4</td>
                <td><input type="radio" name="quest1" value="3"> 3</td>
                <td><input type="radio" name=" quest1" value="2">2</td>
                <td><input type="radio" name="quest1" value="1">1</td>
                </tr>
                <tr>
                <td><b>2.</b>Integrity and dedication to work</td>
                <td><input type="radio" name="quest2" value="5" required> 5</td>
                <td><input type="radio" name="quest2" value="4">4</td>
                <td><input type="radio" name="quest2" value="3"> 3</td>
                <td><input type="radio" name=" quest2" value="2">2</td>
                <td><input type="radio" name="quest2" value="1">1</td>
                </tr>

                <tr>
                <td><b>3.</b>Open to new ideas and interest to develop new skills </td>
                <td><input type="radio" name="quest3" value="5" required> 5</td>
                <td><input type="radio" name="quest3" value="4">4</td>
                <td><input type="radio" name="quest3" value="3"> 3</td>
                <td><input type="radio" name=" quest3" value="2">2</td>
                <td><input type="radio" name="quest3" value="1">1</td>
                </tr>
                <tr>
                <td><b>4.</b> Has positive attitude towards work </td>
                <td><input type="radio" name="quest4" value="5" required> 5</td>
                <td><input type="radio" name="quest4" value="4">4</td>
                <td><input type="radio" name="quest4" value="3"> 3</td>
                <td><input type="radio" name=" quest4" value="2">2</td>
                <td><input type="radio" name="quest4" value="1">1</td>
                </tr>
                <tr>
                <td><b>5.</b> Take initiatives beyond normal works</td>
                <td><input type="radio" name="quest5" value="5" required> 5</td>
                <td><input type="radio" name="quest5" value="4">4</td>
                <td><input type="radio" name="quest5" value="3"> 3</td>
                <td><input type="radio" name=" quest5" value="2">2</td>
                <td><input type="radio" name="quest5" value="1">1</td>
                </tr>
                <tr>
                <td><b>6.</b> Punctuality to work </td>
                <td><input type="radio" name="quest6" value="5" required> 5</td>
                <td><input type="radio" name="quest6" value="4">4</td>
                <td><input type="radio" name="quest6" value="3"> 3</td>
                <td><input type="radio" name=" quest6" value="2">2</td>
                <td><input type="radio" name="quest6" value="1">1</td>
                </tr>
                <tr>
                <td><b>7.</b>Communication and Negotiation skills </td>
                <td><input type="radio" name="quest7" value="5" required> 5</td>
                <td><input type="radio" name="quest7" value="4">4</td>
                <td><input type="radio" name="quest7" value="3"> 3</td>
                <td><input type="radio" name=" quest7" value="2">2</td>
                <td><input type="radio" name="quest7" value="1">1</td>
                </tr>
                <tr>
                <td><b>8.</b>Interpersonal relation and Teamwork </td>
                <td><input type="radio" name="quest8" value="5" required> 5</td>
                <td><input type="radio" name="quest8" value="4">4</td>
                <td><input type="radio" name="quest8" value="3"> 3</td>
                <td><input type="radio" name=" quest8" value="2">2</td>
                <td><input type="radio" name="quest8" value="1">1</td>
                </tr>
                <tr>
                <td><b>9.</b>Demonstrate respect for work and ideas</td>
                <td><input type="radio" name="quest9" value="5" required> 5</td>
                <td><input type="radio" name="quest9" value="4">4</td>
                <td><input type="radio" name="quest9" value="3"> 3</td>
                <td><input type="radio" name=" quest9" value="2">2</td>
                <td><input type="radio" name="quest9" value="1">1</td>
                </tr>
                <tr>
                <td><b>10.</b>Willingness to listen to what others say  </td>
                <td><input type="radio" name="quest10" value="5" required> 5</td>
                <td><input type="radio" name="quest10" value="4">4</td>
                <td><input type="radio" name="quest10" value="3"> 3</td>
                <td><input type="radio" name=" quest10" value="2">2</td>
                <td><input type="radio" name="quest10" value="1">1</td>
                </tr>
                <tr>
                <td><b>11.</b>Oratory and presentation skills</td>
                <td><input type="radio" name="quest11" value="5" required> 5</td>
                <td><input type="radio" name="quest11" value="4">4</td>
                <td><input type="radio" name="quest11" value="3"> 3</td>
                <td><input type="radio" name=" quest11" value="2">2</td>
                <td><input type="radio" name="quest11" value="1">1</td>
                </tr>
                <tr>
                <td><b>12.</b>Carries out assigned task on time </td>
                <td><input type="radio" name="quest12" value="5" required> 5</td>
                <td><input type="radio" name="quest12" value="4">4</td>
                <td><input type="radio" name="quest12" value="3"> 3</td>
                <td><input type="radio" name=" quest12" value="2">2</td>
                <td><input type="radio" name="quest12" value="1">1</td>
                </tr>
                </table></br>
				
                <input type="text" name="remarks" placeholder="Additional remarks/ words of encouragement? (Optional)"></br></br>
                <input type="submit" name="submit"  value="Submit">
              </form>
	
	<?php include "footer.php"?>
	
	</div>
	</div>
</body>
</html>