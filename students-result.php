<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
	
</head>
<body>
 <div class="main">
       
        <div class="menu">
            <?php include 'navbar.html' ?>
        </div>
	</div>

<?php 
	include 'config.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$std_id = $_POST["std_id"];
		$passwd = $_POST["passwd"];

		$sql = "SELECT std_id, passwd FROM student_info WHERE std_id='$std_id' AND passwd='$passwd'";

		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		// $active = $row['active'];
      
	    $count = mysqli_num_rows($result);
			
     	if($count == 1) {
         	$_SESSION['login_student'] = $std_id;
         	$query = "SELECT subject_code,course_name,final_term FROM result_view WHERE  std_id='$std_id'";

			$result = $conn->query($query);


		function calculate_grade($term) {
			if($term < 33){
				$grade = 'F';
			}else{
				if($term >=40 && $term < 50){
					$grade = 'C';
				}
				else if($term >=50 && $term < 60){
					$grade = 'B';
				}
				else if($term >=60 && $term < 70){
					$grade = 'A-';
				}
				else if($term >=70 && $term < 80){
					$grade = 'A';
				}
				else if($term >=80 && $term <= 100){
					$grade = 'A+';
				}else{
					$grade = 'D';
				}
			}
			return $grade;
		}




			if ($result->num_rows > 0) {
		    // output data of each row
				echo "<table class='table' border='4' cellpading='10'>";
				echo "<h1 style='padding-top: 2%;/* margin-bottom: 5px; */text-align:center;'>Final Exam Result</h>";
				echo "<tr> <td><b>Subject Code</b></td> <td><b>Subject name</b></td> <td><b>Grade</b></td></tr>";
			    while($row = $result->fetch_assoc()) {


			    	$final_term = $row['final_term'];
				  $final_term_grade = calculate_grade($final_term);

			    	echo "<tr>";
					echo "<td>". $row['subject_code']. "</td>";
					echo "<td>". $row['course_name']. "</td>";
					// echo "<td>". $row['final_term']. "</td>";
					echo "<td>". $final_term_grade . "</td>";

					// echo "<input type='hidden' value='".$std_id."' name='std_id'>";
					// echo "<input type='hidden' value='".$row['subject_code']."' name='subject_code'>";
					// echo "<td><input type='text' value='".$row['final_term']."' name='final_term'></td>";

					echo "</tr>";
				}
				echo "</table";
			}
			else{
				echo "<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Result Not Publish Yet..!!!</h>";
			}
      	}else {
        $error = "<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Your Login Name or Password is invalid</h>";
        	echo "<h3 class='error'>". $error ."</h3>";
      	}
	}
?>




</body>
</html>