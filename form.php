<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>application form</title>

    <link rel="stylesheet" type="text/css" href="cssform.css">
  </head>
  <body>
    <h2>Admisson Form</h2>

    <form class="form" method="POST" action="admission_apply.php">

    <fieldset class="fld">
     

      Name <br>
      <input type="text" name="std_name" id="std_name" value="" required><br>
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

          <option>null</option>
          <option>Play</option>
          <option>Nursary</option>
          <option>One</option>
          <option>Two</option>
          <option>Three</option>
          <option>Four</option>
          <option>Five</option>
          <option>Six</option>
          <option>Seven</option>
          <option>Eight</option>
        </select>
      </div>
      <div class="add-class">
        <label>Admission Class</label>
        <select name="add_class" required>
          <option value="" disabled selected>Select ...</option>
          
          <option>Play</option>
          <option>Nursary</option>
          <option>One</option>
          <option>Two</option>
          <option>Three</option>
          <option>Four</option>
          <option>Five</option>
          <option>Six</option>
          <option>Seven</option>
          <option>Eight</option>
        </select>
      </div>
      <br>
      Password <br>
      <input type="text" name="passwd" id="passwd" value="" ><br>
      <input class="submit-btn" type="submit" name="submit" value=" Register" >

    </fieldset>

    </form>

    </form>
  </body>
</html>
