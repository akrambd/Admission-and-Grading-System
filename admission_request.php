<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admission_req_table.css">
	<!-- <link rel="stylesheet" type="text/css" href="table.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">

	<title>admission_request</title>
	<style type="text/css">
		.right-view{
			float: right;
			padding: 5%;
		}
		.left-view{
			float: left;
			padding: 5%;
		}
		.right-view form input {
			
			margin-bottom: 5px;
			padding: 15px;
		}
		.right-view form input:last-child {
			background-color: green;
			color: white;
			
		}
        .fld {

        	background-color: #bfbfbf;

        }

	</style>
</head>
<body>
   <div class="main">
       
        <div class="menu">
            <?php include 'navbar.html' ?>
        </div>
	</div>
<link rel="stylesheet" type="text/css" href="cssform1.css">
<div class="right-view">
<fieldset class="fld">
	<?php 
		include 'config.php';
		$std_id = null;
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$std_id = $_POST["std_id"];
		}

		$query = "SELECT `std_id`, `std_name`, `birth_date`, `age`, `f_name`, `f_occup`, `nation`, `m_name`, `g_mob`, `par_addr`, `pre_add`, `prev_inst`, `prev_class`, `add_class`, `passwd` FROM `admission` WHERE std_id='$std_id'";
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<form method='POST' action='admission_approved.php'>";
				
				echo "Student ID <input type='text' value='".$row['std_id']."' name='std_id'>";
				echo "Student Name <input type='text' value='". $row['std_name'] ."' name='name'>";

				echo "Date of Birth <input type='text' value='". $row['birth_date'] ."' name='bd'>";
				echo "Age <input type='text' value='". $row['age'] ."' name='age'>";
				echo "Fathers Name <input type='text' value='". $row['f_name'] ."' name='fnm'>";
				echo "Fathers Occupation <input type='text' value='". $row['f_occup'] ."' name='foccup'>";
				echo "Nationality <input type='text' value='". $row['nation'] ."' name='ntn'>";
				echo "Mothers Name <input type='text' value='". $row['m_name'] ."' name='mnm'>";
				echo "Guardian Mobile <input type='text' value='". $row['g_mob'] ."' name='gmob'>";
				echo "Permanent Address <input type='text' value='". $row['par_addr'] ."' name='paraddr'>";
				echo "Present Address <input type='text' value='". $row['pre_add'] ."' name='preaddr'>";
				echo "Previous Institute <input type='text' value='". $row['prev_inst'] ."' name='previnst'>";
				echo "Previous Class<input type='text' value='". $row['prev_class'] ."' name='prevclass'>";
				echo "Admission Class<input type='text' value='". $row['add_class'] ."' name='adclass'>";
				echo "Password for this Student <input type='text' value='" . $row['passwd'] ."' name='passwd'>";
				echo "<input type='submit' value='Approved'/>";
				echo "</form>";
			}
		}
	?>
</fieldset>
</div>



<div class="left-view">
	<?php 
		include 'config.php';
		$query = "SELECT `std_name`, `add_class`,`std_id` FROM `admission` ORDER BY add_class;";
		$result = $conn->query($query);
		if($result->num_rows > 0){
			echo "<table border=2>";
			echo "<tr> <th>Student Name</th> <th>Class</th> <th>Action</th> </tr>";
			while($row = $result->fetch_assoc()){
				echo "<form method='POST' action=''>";
				echo "<tr>";
				echo "<td>". $row['std_name'] ."</td>";
				echo "<td>". $row['add_class'] ."</td>";
				echo "<input type='hidden' value='".$row['std_id']."' name='std_id'>";
				echo "<td><input type='submit' value='Edit'></td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table";
		}else{
			echo "No one is pending";
		}

	?>
</div>
</body>
</html>
