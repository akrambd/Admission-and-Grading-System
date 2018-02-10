<!DOCTYPE html>
<html>
<head>
	<title>Mark Submission / Edition</title>
    <link rel="stylesheet" type="text/css" href="admission_req_table.css">

  <style type="text/css">
    .right-view{
      float: right;
      padding: 5%;
    }
    .left-view{
    margin-top: 9%;
    width: 40%;
    float: left;
    }
    .right-view form input {
      display: block;
      margin-bottom: 5px;
      padding: 15px;
    }
    .right-view form input:last-child {
      background-color: green;
      color: white;
      display: block;
    }


  </style>

</head>
<body>
<div class="left-view ">
	<?php
		include 'config.php';
		
			
			$query = "SELECT `std_name`, `add_class` FROM `admission` ORDER BY add_class;";

			$result = $conn->query($query);
			# Print out on HTML site.. 
			if ($result->num_rows > 0) {
  
  echo "<table class='table' border='4' cellpading='10'>";
        echo "<tr><td><b>Admission Request Pending List</b></td></tr>";
	echo "<table class='table' border='4' cellpading='10'>";
				echo "<tr> <td><b>Student Name</b></td> <td><b>Class</b></td><td><b>Action</b></td></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "<tr><td>".$row["std_name"]. "</td><td>".$row["add_class"]."</td>";
        // echo "<td><input type='submit' value='Edit'></td>";
        // echo "</tr>";
        // echo "</form>";

        echo "<form method='POST' action=''>";
        echo "<tr>";
        echo "<td>". $row['std_name'] ."</td>";
        echo "<td>". $row['add_class'] ."</td>";
        echo "<td><input type='submit' value='Edit'></td>";
        echo "</tr>";
        echo "</form>";

    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}
	$conn->close();




?> 
</div>

</body>
</html>

<!-- For form -->

<!DOCTYPE html>
<html>
  <head>

    <title>List and Edit</title>

    <meta charset="utf-8">
    <title>Admin Pannel</title>

    <link rel="stylesheet" type="text/css" href="cssform1.css">
  </head>
  <body>

            
</div>





  <div class="right-view">
    <h2>Admin Pannel</h2>

    <form class="form" method="POST" action="">

    <fieldset class="fld">
     

      Name <br>
      <input type="text" name="std_name" id="std_name"  value="" required><br>
       Date of Birth <br>
      <input type="date" name="birth_date"  id="birth_date" value="" required><br>
      Age <br>
      <input type="text" name="age" id="age" value="" ><br>
      Fathers Name <br>
      <input type="text" name="f_name" id="f_name" value="" required><br>
      Fathers Occupation <br>
      <input type="text" name="f_occup" id="f_occup" value=""><br>
      Nationality <br>
      <input type="text" name="nation" id="nation" value="" required><br>
      Mothers Name <br>
      <input type="text" name="m_name" id="m_name" value="" ><br>
      Guardian Mobile <br>
      <input type="text" name="g_mob" id="g_mob" value=""><br>
      Permanent address <br>
      <input type="text" name="par_addr" id="par_addr" value="" required><br>
      Present Address <br>
      <input type="text" name="pre_addr" id="pre_addr" value="" required><br>
      Previous Institute <br>
      <input type="text" name="prev_inst" id="prev_inst" value="" ><br>
      <div class="pre-class">
        <label>Previous Class</label>
        <select name="prev_class" required>
          <option value="" disabled selected>Select ...</option>

          <option>Play</option>
          <option>Nursary</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
      <div class="add-class">
        <label>Admission Class</label>
        <select name="add_class" required>
          <option value="" disabled selected>Select ...</option>
          
          <option>Play</option>
          <option>Nursary</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
      <br>
      <input class="submit-btn" type="submit" name="submit" value="Approved" >

    </fieldset>

    </form>

    </form>

    </div>
  </body>
</html>


