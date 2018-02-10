<!DOCTYPE html>
<html>
<head>
	<title>Admin pannel</title>
	<link rel="stylesheet" type="text/css" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">



    	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}


.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.element{
	text-align: center;
}

</style>
</head>
<body>
 <div class="main">
       
        <div class="menu">
            <?php include 'navbar.html' ?>
        </div>
	</div>


<div class="element">
<h2>Admin Pannel</h2>


<a class="button button1" href="admission_request.php">Admission Approve</a>
<a class="button button1" href="submission_result.php">Result Submission</a>


</div>
</body>
</html>



</body>
</html>