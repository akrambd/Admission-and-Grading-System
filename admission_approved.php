<!DOCTYPE html>
<html>
<head>
	<title>subission</title>
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
if($_SERVER["REQUEST_METHOD"] == "POST"){

// Get values from form 
$std_id=$_POST["std_id"];
$name=$_POST["name"];
$bd=$_POST["bd"];
$age=$_POST["age"];
$fnm=$_POST["fnm"];
$foccup=$_POST["foccup"];
$ntn=$_POST["ntn"];
$mnm=$_POST["mnm"];
$gmob=$_POST["gmob"];
$paraddr=$_POST["paraddr"];
$preaddr=$_POST["preaddr"];
$previnst=$_POST["previnst"];
$prevclass=$_POST["prevclass"];
$adclass=$_POST["adclass"];
$passwd=$_POST["passwd"];

}

// Insert data into mysql 




  $query1="INSERT INTO `student_info`(`std_id`, `std_name`, `birth_date`, `age`, `f_name`, `f_occup`, `nation`, `m_name`, `g_mob`, `par_addr`, `pre_add`, `prev_inst`, `prev_class`, `add_class`, `passwd`) VALUES ('$std_id','$name','$bd','$age','$fnm','$foccup','$ntn','$mnm','$gmob','$paraddr','$preaddr','$previnst','$prevclass','$adclass', '$passwd')";


if ($adclass== "Play"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','P001','Arabic','$adclass'),
				('$std_id','P002','Bangla','$adclass'),
				('$std_id','P003','English','$adclass'), 
				('$std_id','P004','Mathmatics','$adclass'),
				('$std_id','P005','FIQAH','$adclass'), 
				('$std_id','P006','Hadith','$adclass'),
				('$std_id','P007','Learn writing','$adclass')";


	}


	if ($adclass== "Nursary"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','N001','Arabic','$adclass'),
				('$std_id','N002','Bangla','$adclass'),
				('$std_id','N003','English','$adclass'), 
				('$std_id','N004','Mathmatics','$adclass'),
				('$std_id','N005','FIQAH','$adclass'), 
				('$std_id','N006','Hadith','$adclass'),
				('$std_id','N007','Learn writing','$adclass')";


	}






	if ($adclass== "One"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','1001','Arabic','$adclass'),
				('$std_id','1002','Bangla','$adclass'),
				('$std_id','1003','English','$adclass'), 
				('$std_id','1004','Mathmatics','$adclass'),
				('$std_id','1005','FIQAH','$adclass'), 
				('$std_id','1006','Hadith','$adclass'),
				('$std_id','1007','Word Book','$adclass')";


	}


	if ($adclass== "Two"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','2001','Hadith','$adclass'),
				('$std_id','2002','Arabic','$adclass'),
				('$std_id','2003','FIQAH','$adclass'), 
				('$std_id','2004','Bangla','$adclass'),
				('$std_id','2005','English','$adclass'), 
				('$std_id','2006','Mathmatics','$adclass')";

	}     


		if ($adclass== "Three"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','3001','Tafsir','$adclass'),
				('$std_id','3002','Hadith','$adclass'),
				('$std_id','3003','Arabic','$adclass'),
				('$std_id','3004','FIQAH','$adclass'), 
				('$std_id','3005','Bangla','$adclass'),
				('$std_id','3006','English','$adclass'), 
				('$std_id','3007','Mathmatics','$adclass'),
				('$std_id','3008','Social Science','$adclass'),
				('$std_id','3009','Science','$adclass')";
}

	if ($adclass== "Four"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','4001','Tafsir','$adclass'),
				('$std_id','4002','Hadith','$adclass'),
				('$std_id','4003','Arabic 1','$adclass'),
				('$std_id','4004','Arabic 2','$adclass'),
				('$std_id','4005','FIQAH','$adclass'), 
				('$std_id','4006','Bangla','$adclass'),
				('$std_id','4007','English','$adclass'), 
				('$std_id','4008','Mathmatics','$adclass'),
				('$std_id','4009','Social Science','$adclass'),
				('$std_id','4010','Science','$adclass')";
}

		if ($adclass== "Five"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','5001','Tafsir','$adclass'),
				('$std_id','5002','Arabic 1','$adclass'),
				('$std_id','5003','Arabic 2','$adclass'),
				('$std_id','5004','FIQAH','$adclass'),
				('$std_id','5005','Bangla 1','$adclass'), 
				('$std_id','5006','Bangla 2','$adclass'),
				('$std_id','5007','English','$adclass'), 
				('$std_id','5008','Mathmatics','$adclass'),
				('$std_id','5009','Social Science','$adclass'),
				('$std_id','5010','Science','$adclass')";
}



		if ($adclass== "Six"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','6001','Tafsir','$adclass'),
				('$std_id','6002','Hadith','$adclass'),
				('$std_id','6003','Arabic 1','$adclass'),
				('$std_id','6004','Arabic 2','$adclass'),
				('$std_id','6005','FIQAH','$adclass'), 
				('$std_id','6006','Bangla 1','$adclass'),
				('$std_id','6007','Bangla 2','$adclass'),
				('$std_id','6008','English','$adclass'), 
				('$std_id','6009','Mathmatics','$adclass'),
				('$std_id','6010','Social Science','$adclass'),
				('$std_id','6011','Science','$adclass'),
				('$std_id','6012','English Grammar','$adclass')";
}



		if ($adclass== "Seven"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','7001','Tafsir','$adclass'),
				('$std_id','7002','Hadith','$adclass'),
				('$std_id','7003','Arabic 1','$adclass'),
				('$std_id','7004','Arabic 2','$adclass'),
				('$std_id','7005','FIQAH','$adclass'),
				('$std_id','7006','Sirat','$adclass'), 
				('$std_id','7007','History','$adclass'),
				('$std_id','7008','Bangla 1','$adclass'),
				('$std_id','7009','Bangla 2','$adclass'),
				('$std_id','7010','English','$adclass'), 
				('$std_id','7011','English Grammar','$adclass'),
				('$std_id','7012','Mathmatics','$adclass'),
				('$std_id','7013','Social Science','$adclass'),
				('$std_id','7014','Science','$adclass')";
}

		if ($adclass== "Eight"){

		$query="INSERT INTO `subject`(`std_id`,`subject_code`, `course_name`,`class`) 
		VALUES  ('$std_id','8001','Tafsir','$adclass'),
				('$std_id','8002','Hadith','$adclass'),
				('$std_id','8003','Arabic 1','$adclass'),
				('$std_id','8004','Arabic 2','$adclass'),
				('$std_id','8005','Akaidth & FIQAH','$adclass'),
				('$std_id','8006','Bangla 1','$adclass'),
				('$std_id','8007','Bangla 2','$adclass'),
				('$std_id','8008','Mathmatics','$adclass'),
				('$std_id','8009','English 1','$adclass'), 
				('$std_id','8010','English 2','$adclass'),
				('$std_id','8011','Social Science','$adclass'),
				('$std_id','8012','Science','$adclass'),
				('$std_id','8013','Agriculture','$adclass'),
				('$std_id','8014','Sirat','$adclass')";
}


 $query2="DELETE FROM `admission` WHERE std_id='$std_id'";



if (mysqli_query($conn, $query)) 
{
    echo "<h1 style='padding-top: 5%;/* margin-bottom: 10px; */text-align:center;'>Admission Done!!!</h>";
} 
else 
{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}



if (mysqli_query($conn, $query1)) 
{
    echo "";
} 
else 
{
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
}


if (mysqli_query($conn, $query2)) 
{
    echo "";
} 
else 
{
    echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
}

?>

</body>
</html>
