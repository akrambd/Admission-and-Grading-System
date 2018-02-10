<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
include 'config.php';


$query ="INSERT INTO result_view SELECT * FROM subject";

		$result = $conn->query($query);


	if (mysqli_query($conn, $query)) 
{
    echo "<h1 style='padding-top: 2%;/* margin-bottom: 5px; */text-align:center;'>Result Submitted</h>";
} 
else 
{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}



?>







</body>
</html>