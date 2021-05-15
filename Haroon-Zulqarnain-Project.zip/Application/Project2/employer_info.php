<?php

    // Refer to conn.php file and open a connection.
    require_once("conn.php");
    // Will get the value typed in the form text field and save into variable
    // Save the query into variable called $query. Note that :ph_director is a place holder
    $query = "SELECT DISTINCT EMPLOYER_NAME,EMPLOYER_BUSINESS_DBA,EMPLOYER_PHONE, EMPLOYER_PHONE_EXT, EMPLOYER_PROVINCE,TOTAL_WORKERS FROM EMPLOYER_INFO LIMIT 1000";

try
    {
      // Create a prepared statement. Prepared statements are a way to eliminate SQL INJECTION.
      $prepared_stmt = $dbo->prepare($query);

      $prepared_stmt->execute();
      // Fetch all the values based on query and save that to variable $result
      $result = $prepared_stmt->fetchAll();

    }
    catch (PDOException $ex)
    { // Error in database processing.
      echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
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
    
    <h1> EMPLOYER INFO </h1>
<h3>Click on following to get information on following tables</h3>
<ul>
        <li><a href="agent_info.php">Agent Info</a></li>
        <li><a href="case_info.php">Case Info</a></li>
        <li><a href="employer_info.php">Employer Info </a></li>
        <li><a href="employer_info_address.php">Employer Info Address</a></li>
        <li><a href="employment_history.php">Employment History</a></li>
        <li><a href="employment_info.php">Employment Info</a></li>
        <li><a href="employment_info_additional.php">Employment Info Additional</a></li>
        <li><a href="legal_info.php">Legal Info</a></li>
        <li><a href="wage_info.php"> Wage Info </a></li>
        <li><a href="worksite_info.php">Worksite Info</a></li>
      </ul>
    
    

              <!-- first show the header RESULT -->
              <h2>Results</h2>
              <!-- THen create a table like structure. See the project.css how table is stylized. -->
              <table>
                <!-- Create the first row of table as table head (thead). -->
                <thead>
                   <!-- The top row is table head with four columns named -- ID, Title ... -->
                  <tr>
                    
                    <th>Employer Name</th>
                    <th>Employer Business DBA</th>
                    
                    <th>Employer Province</th>
                    <th>Employer Phone</th>
                    <th>Employer Phone Ext</th>
                    <th>Total Workers</th>
                   
                  </tr>
                </thead>
                 <!-- Create rest of the the body of the table -->
                <tbody>
                   <!-- For each row saved in the $result variable ... -->
                  <?php foreach ($result as $row) { ?>
                
                    <tr>

                      <td><?php echo $row["EMPLOYER_NAME"]; ?></td>
                      <td><?php echo $row["EMPLOYER_BUSINESS_DBA"]; ?></td>

                      <td><?php echo $row["EMPLOYER_PROVINCE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_PHONE"]; ?></td>
                      <td><?php echo $row["EMPLOYER_PHONE_EXT"]; ?></td>
                      
                      <td><?php echo $row["TOTAL_WORKERS"]; ?></td>
                      
                    </tr>
                  <?php } ?>
                  <!-- End table body -->
                </tbody>
                <!-- End table -->
            </table>
  



    
  </body>
</html>
