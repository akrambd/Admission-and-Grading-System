<!DOCTYPE html>
<html>
<head>
	<title>Classes And Students</title>
	<!-- <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8"> -->
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



	<form action="" method="POST">
		<input type="submit" name="class" value="Play">
		<input type="submit" name="class" value="Nursary">
		<input type="submit" name="class" value="One">
		<input type="submit" name="class" value="Two">
		<input type="submit" name="class" value="Three">
		<input type="submit" name="class" value="Four">
		<input type="submit" name="class" value="Five">
		<input type="submit" name="class" value="Six">
		<input type="submit" name="class" value="Seven">
		<input type="submit" name="class" value="Eight">
	</form>
	<br><br>

	<?php 
		include 'config.php';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$class = $_POST["class"];
			
			$query = "SELECT std_id, std_name FROM student_info WHERE add_class='$class'";

			$result = $conn->query($query);
			# Print out on HTML site.. 
			if ($result->num_rows > 0) {
		    // output data of each row
				echo "<table class='table' border='4' cellpading='10'>";
				echo "<tr> <td><b>Student ID</b></td> <td><b>Student Name</b><td><b>Action</b></td></tr>";
			    while($row = $result->fetch_assoc()) {
			    	echo "<form method='POST' action='mark-submit.php'>";
			    	echo "<tr>";
					echo "<td>". $row['std_id']. "</td>";
					echo "<td>". $row['std_name']. "</td>";

					echo "<input type='hidden' value='".$row['std_id']."' name='std_id'>";
					echo "<input type='hidden' value='".$class."' name='class'>";
					
					echo "<td><input type='submit' value='submition'>";
					echo "</tr>";
					echo "</form>";
				}
				echo "</table";
			}
			else{
				// echo "<p class='error'>Sorry!! No Students.</p>";

				echo"<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Sorry!! No Students</h>";
			}
		}
	?>
</body>
</html>