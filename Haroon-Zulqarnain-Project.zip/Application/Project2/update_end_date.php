<?php
// If the all the variables are set when the Submit button is clicked...
if (isset($_POST['field_submit'])) {
    // Refer to conn.php file and open a connection.
    require_once("conn.php");
    // Will get the value typed in the form text field and save into variable
    $var_applicant = $_POST['field_applicant'];
    $var_end_date= $_POST['field_end_date'];
    // Save the query into variable called $query. Note that :director is a place holder
    $query= "UPDATE Mega_Table SET employment_end_date=:end_date WHERE case_number=:applicant;" 
    . "Call update_end_date(:applicant,:end_date)";

try
    {
      // Create a prepared statement. Prepared statements are a way to eliminate SQL INJECTION.
      $prepared_stmt = $dbo->prepare($query);
      //bind the value saved in the variable $var_director to the place holder :director  
      // Use PDO::PARAM_STR to sanitize user string.
      $prepared_stmt->bindValue(':applicant', $var_applicant, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':end_date', $var_end_date, PDO::PARAM_STR);
      
      // Fetch all the values based on query and save that to variable $result
      $result = $prepared_stmt->execute();

    }
    catch (PDOException $ex)
    { // Error in database processing.
      echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}
?>

<html>
<!-- Any thing inside the HEAD tags are not visible on page.-->
  <head>
    <!-- THe following is the stylesheet file. The CSS file decides look and feel -->
    <link rel="stylesheet" type="text/css" href="project.css" />
  </head> 
<!-- Everything inside the BODY tags are visible on page.-->
  <body>

    <div id="sidenav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Mega_Table.php">Megatable</a></li>
        <li><a href="getData.php">Get Case </a></li>
        <li><a href="updateData.php">Update Case</a></li>
        <li><a href="insertCase.php">Insert Case</a></li>
        <li><a href="deleteData.php">Delete Case</a></li>
        <li><a href="analytics.php">Analytics</a></li>
      </ul>
    </div>
    
    <h1> Update Applicant's Employment End Date</h1>
    <!-- This is the end of the form. This form has one text field and one button.
      See the project.css file to note how form is stylized.-->
    <form method="post">

      <label for="id_CaseNumber">Case Number</label>

      <input type="text" name="field_applicant" id = "id_CaseNumber">

      <label for="id_end_date">New Employment End Date</label>
      <input type="text" name="field_end_date" id = "id_end_date">
      <!-- The input type is a submit button. Note the name and value. The value attribute decides what will be dispalyed on Button. In this case the button shows Submit.
      The name attribute is referred  on line 3 and line 61. -->
      <input type="submit" name="field_submit" value="Submit">
    </form>
    
    <?php
      if (isset($_POST['f_submit'])) {
        if ($result) { 
       
    ?>
          Employment End Date  was updated successfully. 
    <?php 
        } else { 
    ?>
          <h3> Sorry, there was an error. Case data was not updated. </h3>
    <?php 
        }
      } 
    ?>

    
  </body>
</html>

