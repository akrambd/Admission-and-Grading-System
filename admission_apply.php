
<!DOCTYPE html>
<html>
<head>
	<title>subission</title>

	<link rel="stylesheet" type="text/css" href="admission_req_table.css">
	<!-- <link rel="stylesheet" type="text/css" href="table.css"> -->
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madrasha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Get values from form 
$name=$_POST['std_name'];
$bd=$_POST['birth_date'];
$age=$_POST['age'];
$fnm=$_POST['f_name'];
$foccup=$_POST['f_occup'];
$ntn=$_POST['nation'];
$mnm=$_POST['m_name'];
$gmob=$_POST['g_mob'];
$paraddr=$_POST['par_addr'];
$preaddr=$_POST['pre_addr'];
$previnst=$_POST['prev_inst'];
$prevclass=$_POST['prev_class'];
$adclass=$_POST['add_class'];
$passwd=$_POST['passwd'];



// Insert data into mysql 




$query="INSERT INTO `admission`(`std_name`, `birth_date`, `age`, `f_name`, `f_occup`, `nation`, `m_name`, `g_mob`, `par_addr`, `pre_add`, `prev_inst`, `prev_class`, `add_class`, `passwd`) VALUES ('$name','$bd','$age','$fnm','$foccup','$ntn','$mnm','$gmob','$paraddr','$preaddr','$previnst','$prevclass','$adclass', '$passwd')";


if (mysqli_query($conn, $query)) 
{
    echo "<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Registered successfully</h>";
} 
else 
{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>


</body>
</html>