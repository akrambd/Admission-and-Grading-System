<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mark Submission / Edition</title>
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
			$class = $_POST["class"];
			
			$query = "SELECT subject.subject_code, subject.final_term, subject.course_name FROM subject WHERE subject.class='$class' AND subject.std_id='$std_id'";

			$result = $conn->query($query);
			# Print out on HTML site.. 
			if ($result->num_rows > 0) {
		    // output data of each row
				echo "<table class='table' border='4' cellpading='10'>";
				echo "<h1 style='padding-top: 2%;/* margin-bottom: 5px; */text-align:center;'>Result Submission</h>";
				echo "<tr> <td><b>Subject Code</b></td> <td><b>Subject Name</b></td> <td><b>Final</b></td> <td><b>Action</b></td></tr>";
			    while($row = $result->fetch_assoc()) {
			    	echo "<form method='POST' action='mark-submitted.php'>";
			    	echo "<tr>";
					echo "<td>". $row['subject_code']. "</td>";
					echo "<td>". $row['course_name']. "</td>";
					echo "<input type='hidden' value='".$std_id."' name='std_id'>";
					echo "<input type='hidden' value='".$row['subject_code']."' name='subject_code'>";
					
					echo "<td><input type='text' value='".$row['final_term']."'  name='final_term'></td>";
					echo "<td><input type='submit' value='Submit'></td>";

					echo "</tr>";
					echo "</form>";
				}
				echo "</table";
			}
			else{
				echo "<p class='error'>Sorry!! This student is not eligible for geting this grade.</p>";
			}
		}
	?>
</body>
</html>