<?php
// If the all the variables are set when the Submit button is clicked...
if (isset($_POST['field_submit'])) {
    // Refer to conn.php file and open a connection.
    require_once("conn.php");
    // Will get the value typed in the form text field and save into variable
    $var_applicant = $_POST['field_applicant'];
    // Save the query into variable called $query. Note that :ph_director is a place holder
    $query = "SELECT * FROM mega_table WHERE case_number = :ph_applicant";

try
    {
      // Create a prepared statement. Prepared statements are a way to eliminate SQL INJECTION.
      $prepared_stmt = $dbo->prepare($query);
      //bind the value saved in the variable $var_director to the place holder :ph_director  
      // Use PDO::PARAM_STR to sanitize user string.
      $prepared_stmt->bindValue(':ph_applicant', $var_applicant, PDO::PARAM_STR);
      $prepared_stmt->execute();
      // Fetch all the values based on query and save that to variable $result
      $result = $prepared_stmt->fetchAll();

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
    
    <h1> Search Applicant by Case Number</h1>
    <!-- This is the start of the form. This form has one text field and one button.
      See the project.css file to note how form is stylized.-->
    <form method="post">

      <label for="id_CaseNumber">Case Number</label>
      <!-- The input type is a text field. Note the name and id. The name attribute
        is referred above on line 7. $var_director = $_POST['field_director']; id attribute is referred in label tag above on line 52-->
      <input type="text" name="field_applicant" id = "id_Case">
      <!-- The input type is a submit button. Note the name and value. The value attribute decides what will be dispalyed on Button. In this case the button shows Submit.
      The name attribute is referred  on line 3 and line 61. -->
      <input type="submit" name="field_submit" value="Submit">
    </form>
    
    <?php
      if (isset($_POST['field_submit'])) {
        // If the query executed (result is true) and the row count returned from the query is greater than 0 then...
        if ($result && $prepared_stmt->rowCount() > 0) { ?>
              <!-- first show the header RESULT -->
              <h2>Results</h2>
              <!-- THen create a table like structure. See the project.css how table is stylized. -->
              <table>
                <!-- Create the first row of table as table head (thead). -->
                <thead>
                   <!-- The top row is table head with four columns named -- ID, Title ... -->
                  <tr>
                    <th>ID</th>
                    <th>Case Number</th>
                    <th>Status</th>
                    <th>Case Submitted</th>
                    <th>Decision Date</th>
                    <th>Visa Class</th>
                    <th>Employment Start Date</th>
                    <th>Employment End Date</th>
                    <th>Employer Name</th>
                    <th>Employer Business DBA</th>
                    <th>Employer Address</th>
                    <th>Employer City</th>
                    <th>Employer State</th>
                    <th>Employer Postal Code</th>
                    <th>Employer Country</th>
                    <th>Employer Province</th>
                    <th>Employer Phone</th>
                    <th>Employer Phone Ext</th>
                    <th>Agent Representing Employer</th>
                    <th>Agent Attorney Name</th>
                    <th>Agent Attorney City</th>
                    <th>Agent Attorney State</th>
                    <th>Job Title</th>
                    <th>SOC Code</th>
                    <th>SOC Name</th>
                    <th>NAICS Code</th>
                    <th>Total Workers</th>
                    <th>New Employment</th>
                    <th>Continued Employment</th>
                    <th>Change Previous Employment</th>
                    <th>New Concurrent Employment</th>
                    <th>Change Employer</th>
                    <th>Amended Petition</th>
                    <th>Full Time Position</th>
                    <th>Prevailing Wage</th>
                    <th>PW Unit of Pay</th>
                    <th>PW Wage Level</th>
                    <th>PW Source</th>
                    <th>PW Source Year</th>
                    <th>PW Source Other</th>
                    <th>Wage Rate of Pay From</th>
                    <th>Wage Rate of Pay To</th>
                    <th>Wage Unit of Pay </th>
                    <th>H1B Dependent</th>
                    <th>Willfull Violator</th>
                    <th>Support H1B</th>
                    <th>Labor Con Agree</th>
                    <th>Public Disclosure Location</th>
                    <th>Worksite City</th>
                    <th>Worksite County</th>
                    <th>Worksite State</th>
                    <th>Worksite Postal Code</th>
                    <th>Original Cert Date</th>
                  </tr>
                </thead>
                 <!-- Create rest of the the body of the table -->
                <tbody>
                   <!-- For each row saved in the $result variable ... -->
                  <?php foreach ($result as $row) { ?>
                
                    <tr>
                       <!-- Print (echo) the value of mID in first column of table -->
                      <td><?php echo $row["CASE_ID"]; ?></td>
                      <!-- Print (echo) the value of title in second column of table -->
                      <td><?php echo $row["CASE_NUMBER"]; ?></td>
                      <!-- Print (echo) the value of movieYear in third column of table and so on... -->
                      <td><?php echo $row["CASE_STATUS"]; ?></td>
                      <td><?php echo $row["CASE_SUBMITTED"]; ?></td>
                      <td><?php echo $row["DECISION_DATE"]; ?></td>
                      <td><?php echo $row["VISA_CLASS"]; ?></td>
                      <td><?php echo $row["EMPLOYMENT_START_DATE"]; ?></td>
                      <td><?php echo $row["EMPLOYMENT_END_DATE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_NAME"]; ?></td>
                      <td><?php echo $row["EMPLOYER_BUSINESS_DBA"]; ?></td>
                      <td><?php echo $row["EMPLOYER_ADDRESS"]; ?></td>
                      <td><?php echo $row["EMPLOYER_CITY"]; ?></td>
                      <td><?php echo $row["EMPLOYER_STATE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_POSTAL_CODE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_COUNTRY"]; ?></td>
                      <td><?php echo $row["EMPLOYER_PROVINCE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_PHONE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_PHONE_EXT"]; ?></td>
                      <td><?php echo $row["AGENT_REPRESENTING_EMPLOYER"]; ?></td>
                      <td><?php echo $row["AGENT_ATTORNEY_NAME"]; ?></td>
                      <td><?php echo $row["AGENT_ATTORNEY_CITY"]; ?></td>
                      <td><?php echo $row["AGENT_ATTORNEY_STATE"]; ?></td>
                      <td><?php echo $row["JOB_TITLE"]; ?></td>
                      <td><?php echo $row["SOC_CODE"]; ?></td>
                      <td><?php echo $row["SOC_NAME"]; ?></td>
                      <td><?php echo $row["NAICS_CODE"]; ?></td>
                      <td><?php echo $row["TOTAL_WORKERS"]; ?></td>
                      <td><?php echo $row["NEW_EMPLOYMENT"]; ?></td>
                      <td><?php echo $row["CONTINUED_EMPLOYMENT"]; ?></td>
                      <td><?php echo $row["CHANGE_PREVIOUS_EMPLOYMENT"]; ?></td>
                      <td><?php echo $row["NEW_CONCURRENT_EMPLOYMENT"]; ?></td>
                      <td><?php echo $row["CHANGE_EMPLOYER"]; ?></td>
                      <td><?php echo $row["AMENDED_PETITION"]; ?></td>
                      <td><?php echo $row["FULL_TIME_POSITION"]; ?></td>
                      <td><?php echo $row["PREVAILING_WAGE"]; ?></td>
                      <td><?php echo $row["PW_UNIT_OF_PAY"]; ?></td>
                      <td><?php echo $row["PW_WAGE_LEVEL"]; ?></td>
                      <td><?php echo $row["PW_SOURCE"]; ?></td>
                      <td><?php echo $row["PW_SOURCE_YEAR"]; ?></td>
                      <td><?php echo $row["PW_SOURCE_OTHER"]; ?></td>
                      <td><?php echo $row["WAGE_RATE_OF_PAY_FROM"]; ?></td>
                      <td><?php echo $row["WAGE_RATE_OF_PAY_TO"]; ?></td>
                      <td><?php echo $row["WAGE_UNIT_OF_PAY"]; ?></td>
                      <td><?php echo $row["H1B_DEPENDENT"]; ?></td>
                      <td><?php echo $row["WILLFUL_VIOLATOR"]; ?></td>
                      <td><?php echo $row["SUPPORT_H1B"]; ?></td>
                      <td><?php echo $row["LABOR_CON_AGREE"]; ?></td>
                      <td><?php echo $row["PUBLIC_DISCLOSURE_LOCATION"]; ?></td>
                      <td><?php echo $row["WORKSITE_CITY"]; ?></td>
                      <td><?php echo $row["WORKSITE_COUNTY"]; ?></td>
                      <td><?php echo $row["WORKSITE_STATE"]; ?></td>
                      <td><?php echo $row["WORKSITE_POSTAL_CODE"]; ?></td>
                      <td><?php echo $row["ORIGINAL_CERT_DATE"]; ?></td>
                    <!-- End first row. Note this will repeat for each row in the $result variable-->
                    </tr>
                  <?php } ?>
                  <!-- End table body -->
                </tbody>
                <!-- End table -->
            </table>
  
        <?php } else { ?>
          <!-- IF query execution resulted in error display the following message-->
          <h3>Sorry, no results found for Case <?php echo $_POST['field_applicant']; ?>. </h3>
        <?php }
    } ?>


    
  </body>
</html>






