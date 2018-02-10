<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
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
			$subject_code = $_POST["subject_code"];
			$final_term = $_POST["final_term"];
		}


		$query ="UPDATE `subject` SET `final_term`='$final_term' WHERE std_id='$std_id' AND subject_code='$subject_code'";

		$result = $conn->query($query);
		
		if($result === TRUE){
			echo "<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Result Submitted!!</h1>";
		}
		else{
			echo "Error !!";
		}

	?>
</body>
</html>