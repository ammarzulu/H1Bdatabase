  <?php

  if (isset($_POST['f_submit'])) {

      require_once("conn.php");

      $var_caseNumber = $_POST['f_caseNumber'];
      $var_caseStatus = $_POST['f_caseStatus'];
      $var_caseSubmitted= $_POST['f_caseSubmitted'];
      $var_decisionDate= $_POST['f_decisionDate'];
      $var_visaClass = $_POST['f_visaClass'];
      $var_employmentStartDate = $_POST['f_employmentStartDate'];
      $var_employmentEndDate = $_POST['f_employmentEndDate'];
      $var_employerName = $_POST['f_employerName'];
          $var_employerBusinessDba = $_POST['f_employerBusinessDba'];
      $var_employerAddress = $_POST['f_employerAddress'];
      $var_employerCity = $_POST['f_employerCity'];
      $var_employerState = $_POST['f_employerState'];
          $var_employerPostalCode= $_POST['f_employerPostalCode'];
      $var_employerCountry = $_POST['f_employerCountry'];
      $var_employerProvince = $_POST['f_employerProvince'];
      $var_employerPhone = $_POST['f_employerPhone'];
          $var_employerPhoneExt = $_POST['f_employerPhoneExt'];
      $var_agentRepresentingEmployer = $_POST['f_agentRepresentingEmployer'];
      $var_agentAttorneyName = $_POST['f_agentAttorneyName'];
      $var_agentAttorneyCity = $_POST['f_agentAttorneyCity'];
          $var_agentAttorneyState = $_POST['f_agentAttorneyState'];
      $var_jobTitle = $_POST['f_jobTitle'];
      $var_socCode = $_POST['f_socCode'];
      $var_socName = $_POST['f_socName'];
          $var_naicsCode = $_POST['f_naicsCode'];
      $var_totalWorkers = $_POST['f_totalWorkers'];
      $var_newEmployment = $_POST['f_newEmployment'];
      $var_continuedEmployment = $_POST['f_continuedEmployment'];
          $var_changePreviousEmployment = $_POST['f_changePreviousEmployment'];
      $var_newConcurrentEmployment = $_POST['f_newConcurrentEmployment'];
      $var_changeEmployer = $_POST['f_changeEmployer'];
          $var_amendedPetition = $_POST['f_amendedPetition'];
      $var_fullTimePosition = $_POST['f_fullTimePosition'];
      $var_prevailingWage = $_POST['f_prevailingWage'];
      $var_pwUnitOfPay = $_POST['f_pwUnitOfPay'];
          $var_pwWageLevel = $_POST['f_pwWageLevel'];
      $var_pwSource = $_POST['f_pwSource'];
      $var_pwSourceYear = $_POST['f_pwSourceYear'];
      $var_pwSourceOther = $_POST['f_pwSourceOther'];
          $var_wageRateOfPayFrom = $_POST['f_wageRateOfPayFrom'];
      $var_wageRateOfPayTo = $_POST['f_wageRateOfPayTo'];
      $var_wageUnitOfPay = $_POST['f_wageUnitOfPay'];
      $var_h1bDependent = $_POST['f_h1bDependent'];
          $var_willfulViolator = $_POST['f_willfulViolator'];
      $var_supportH1b = $_POST['f_supportH1b'];
      $var_laborConAgree = $_POST['f_laborConAgree'];
      $var_publicDisclosureLocation = $_POST['f_publicDisclosureLocation'];
          $var_worksiteCity = $_POST['f_worksiteCity'];
      $var_worksiteCounty = $_POST['f_worksiteCounty'];
      $var_worksiteState = $_POST['f_worksiteState'];
      $var_worksitePostalCode = $_POST['f_worksitePostalCode'];
          $var_originalCertDate = $_POST['f_originalCertDate'];


      $query = "INSERT INTO mega_table(CASE_NUMBER,CASE_STATUS,CASE_SUBMITTED,DECISION_DATE,VISA_CLASS,EMPLOYMENT_START_DATE,
  EMPLOYMENT_END_DATE,EMPLOYER_NAME,EMPLOYER_BUSINESS_DBA,EMPLOYER_ADDRESS,EMPLOYER_CITY,EMPLOYER_STATE,
  EMPLOYER_POSTAL_CODE,EMPLOYER_COUNTRY,EMPLOYER_PROVINCE,EMPLOYER_PHONE,EMPLOYER_PHONE_EXT,
  AGENT_REPRESENTING_EMPLOYER,AGENT_ATTORNEY_NAME, AGENT_ATTORNEY_CITY,AGENT_ATTORNEY_STATE,JOB_TITLE,
  SOC_CODE,SOC_NAME,NAICS_CODE,TOTAL_WORKERS,NEW_EMPLOYMENT,CONTINUED_EMPLOYMENT,
  CHANGE_PREVIOUS_EMPLOYMENT,NEW_CONCURRENT_EMPLOYMENT,CHANGE_EMPLOYER,AMENDED_PETITION,FULL_TIME_POSITION,
  PREVAILING_WAGE,PW_UNIT_OF_PAY,PW_WAGE_LEVEL,PW_SOURCE,PW_SOURCE_YEAR,PW_SOURCE_OTHER,
  WAGE_RATE_OF_PAY_FROM,WAGE_RATE_OF_PAY_TO, WAGE_UNIT_OF_PAY,H1B_DEPENDENT,WILLFUL_VIOLATOR,
  SUPPORT_H1B,LABOR_CON_AGREE,PUBLIC_DISCLOSURE_LOCATION,WORKSITE_CITY,WORKSITE_COUNTY,WORKSITE_STATE,
    WORKSITE_POSTAL_CODE,ORIGINAL_CERT_DATE)"
            . "VALUES (:caseNumber, :caseStatus,  :caseSubmitted, :decisionDate, :visaClass, :employmentStartDate, :employmentEndDate , :employerName, :employerBusinessDba , :employerAddress, :employerCity , :employerState,:employerPostalCode, :employerCountry , :employerProvince , :employerPhone , :employerPhoneExt, :agentRepresentingEmployer, :agentAttorneyName , :agentAttorneyCity , :agentAttorneyState , :jobTitle, :socCode , :socName , :naicsCode , :totalWorkers , :newEmployment , :continuedEmployment, :changePreviousEmployment,:newConcurrentEmployment  , :changeEmployer, :amendedPetition , :fullTimePosition , :prevailingWage , :pwUnitOfPay ,:pwWageLevel , :pwSource , :pwSourceYear, :pwSourceOther, :wageRateOfPayFrom, :wageRateOfPayTo , :wageUnitOfPay, :h1bDependent , :willfulViolator , :supportH1b, :laborConAgree , :publicDisclosureLocation, :worksiteCity , :worksiteCounty, :worksiteState , :worksitePostalCode, :originalCertDate)";

    try
    {
      $prepared_stmt = $dbo->prepare($query);
      
      $prepared_stmt->bindValue(':caseNumber', $var_caseNumber, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':caseStatus', $var_caseStatus, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':caseSubmitted', $var_caseSubmitted, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':decisionDate', $var_decisionDate, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':visaClass', $var_visaClass, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employmentStartDate', $var_employmentStartDate, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employmentEndDate', $var_employmentEndDate, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerName', $var_employerName, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerBusinessDba', $var_employerBusinessDba, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerAddress', $var_employerAddress, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerCity', $var_employerCity, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerState', $var_employerState, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerCountry', $var_employerCountry, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerPostalCode', $var_employerPostalCode, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerProvince', $var_employerProvince, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerPhone', $var_employerPhone, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':employerPhoneExt', $var_employerPhoneExt, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':agentRepresentingEmployer', $var_agentRepresentingEmployer, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':agentAttorneyName', $var_agentAttorneyName, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':agentAttorneyCity', $var_agentAttorneyCity, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':agentAttorneyState', $var_agentAttorneyState, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':jobTitle', $var_jobTitle, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':socCode', $var_socCode, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':socName', $var_socName, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':naicsCode', $var_naicsCode, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':totalWorkers', $var_totalWorkers, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':newEmployment', $var_newEmployment, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':continuedEmployment', $var_continuedEmployment, PDO::PARAM_INT);
      $prepared_stmt->bindValue(':changePreviousEmployment', $var_changePreviousEmployment, PDO::PARAM_INT);
      $prepared_stmt->bindValue(':newConcurrentEmployment', $var_newConcurrentEmployment, PDO::PARAM_INT);
      $prepared_stmt->bindValue(':changeEmployer', $var_changeEmployer, PDO::PARAM_INT);
      $prepared_stmt->bindValue(':amendedPetition', $var_amendedPetition, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':fullTimePosition', $var_fullTimePosition, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':prevailingWage', $var_prevailingWage, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':pwUnitOfPay', $var_pwUnitOfPay, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':pwWageLevel', $var_pwWageLevel, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':pwSource', $var_pwSource, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':pwSourceYear', $var_pwSourceYear, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':pwSourceOther', $var_pwSourceOther, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':wageRateOfPayFrom', $var_wageRateOfPayFrom, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':wageRateOfPayTo', $var_wageRateOfPayTo, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':wageUnitOfPay', $var_wageUnitOfPay, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':h1bDependent', $var_h1bDependent, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':willfulViolator', $var_willfulViolator, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':supportH1b', $var_supportH1b, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':laborConAgree', $var_laborConAgree, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':publicDisclosureLocation', $var_publicDisclosureLocation, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':worksiteCity', $var_worksiteCity, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':worksiteCounty', $var_worksiteCounty, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':worksiteState', $var_worksiteState, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':worksitePostalCode', $var_worksitePostalCode, PDO::PARAM_STR);
      $prepared_stmt->bindValue(':originalCertDate', $var_originalCertDate, PDO::PARAM_STR);
      $result = $prepared_stmt->execute();

    }
    catch (PDOException $ex)
    { // Error in database processing.
      echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }

}

?>

<html>
  <head>
    <!-- THe following is the stylesheet file. The CSS file decides look and feel -->
    <link rel="stylesheet" type="text/css" href="project.css" />
  </head> 

  <body>
    <div id="sidenav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Mega_Table.php">Megatable</a></li>
        <li><a href="getData.php">Get Case</a></li>
        <li><a href="updateData.php">Update Case</a></li>
        <li><a href="insertCase.php">Insert Case </a></li>
        <li><a href="deleteData.php">Delete Case</a></li>
        <li><a href="analytics.php">Analytics</a></li>
      </ul>
    </div>

<h1> Insert Case </h1>

<h3>Note: The fields of Case Number, Employer Address, Case Submitted, Employer Postal Code, Agent Attorney Name(if it is given), Employer Name, Soc code, Job title should not be left blank</h3>

    <form method="post">


      <label for="id_caseNumber">Case Number</label>
      <input type="text" name="f_caseNumber" id="id_caseNumber">

      <label for="id_caseStatus">Case Status</label>
      <input type="text" name="f_caseStatus" id="id_caseStatus">

      <label for="id_caseSubmitted">Case Submitted </label>
      <input type="text" name="f_caseSubmitted" id="id_caseSubmitted">

       <label for="id_decisionDate">Decision Date</label>
      <input type="text" name="f_decisionDate" id="id_decisionDate"> 

      <label for="id_visaClass">Visa Class</label>
      <input type="text" name="f_visaClass" id="id_visaClass">

      <label for="id_employmentStartDate">Employment Start Date</label>
      <input type="text" name="f_employmentStartDate" id="id_employmentStartDate">

      <label for="id_employmentEndDate">Employment End Date</label>
      <input type="text" name="f_employmentEndDate" id="id_employmentEndDate">

      <label for="id_employerName">Employer Name</label>
      <input type="text" name="f_employerName" id="id_employerName">

      <label for="id_employerBusinessDba">Employer Business DBA</label>
      <input type="text" name="f_employerBusinessDba" id="id_employerBusinessDba"> 

      <label for="id_employerAddress">Employer Address</label>
      <input type="text" name="f_employerAddress" id="id_employerAddress">

      <label for="id_employerCity">Employer City</label>
      <input type="text" name="f_employerCity" id="id_employerCity">

      <label for="id_employerState">Employer State</label>
      <input type="text" name="f_employerState" id="id_employerState">

      <label for="id_employerPostalCode">Employer Postal Code</label>
      <input type="text" name="f_employerPostalCode" id="id_employerPostalCode"> 

      <label for="id_employerCountry">Employer Country</label>
      <input type="text" name="f_employerCountry" id="id_employerCountry">

      <label for="id_employerProvince">Employer Province</label>
      <input type="text" name="f_employerProvince" id="id_employerProvince">

      <label for="id_employerPhone">Employer Phone</label>
      <input type="text" name="f_employerPhone" id="id_employerPhone">

      <label for="id_employerPhoneExt">Employer Phone Ext</label>
      <input type="text" name="f_employerPhoneExt" id="id_employerPhoneExt">

      <label for="id_agentRepresentingEmployer"> Agent Representing Employer</label>
      <input type="text" name="f_agentRepresentingEmployer" id="id_agentRepresentingEmployer"> 

      <label for="id_agentAttorneyName"> Agent Attorney Name</label>
      <input type="text" name="f_agentAttorneyName" id="id_agentAttorneyName"> 

      <label for="id_agentAttorneyCity"> Agent Attorney City</label>
      <input type="text" name="f_agentAttorneyCity" id="id_agentAttorneyCity"> 

      <label for="id_agentAttorneyState"> Agent Attorney State</label>
      <input type="text" name="f_agentAttorneyState" id="id_agentAttorneyState"> 

      <label for="id_jobTitle">Job Title</label>
      <input type="text" name="f_jobTitle" id="id_jobTitle">

      <label for="id_socCode">SOC Code</label>
      <input type="text" name="f_socCode" id="id_socCode">

      <label for="id_socName">SOC Name</label>
      <input type="text" name="f_socName" id="id_socName">

      <label for="id_naicsCode">NAICS Code</label>
      <input type="text" name="f_naicsCode" id="id_naicsCode">

      <label for="id_totalWorkers">Total Workers</label>
      <input type="text" name="f_totalWorkers" id="id_totalWorkers">

      <label for="id_newEmployment">New Employement</label>
      <input type="text" name="f_newEmployment" id="id_newEmployment">

      <label for="id_continuedEmployment"> Continued Employment</label>
      <input type="text" name="f_continuedEmployment" id="id_continuedEmployment"> 

      <label for="id_changePreviousEmployment"> Change Previous Employement</label>
      <input type="text" name="f_changePreviousEmployment" id="id_changePreviousEmployment"> 

      <label for="id_newConcurrentEmployment">New Concurrent employement</label>
      <input type="text" name="f_newConcurrentEmployment" id="id_newConcurrentEmployment"> 

      <label for="id_changeEmployer">Change Employer</label>
      <input type="text" name="f_changeEmployer" id="id_changeEmployer">

      <label for="id_amendedPetition">amended Petition</label>
      <input type="text" name="f_amendedPetition" id="id_amendedPetition">

      <label for="id_fullTimePosition">Full Time Position</label>
      <input type="text" name="f_fullTimePosition" id="id_fullTimePosition">

        <label for="id_prevailingWage">Prevailing Wage</label>
      <input type="text" name="f_prevailingWage" id="id_prevailingWage"> 

      <label for="id_pwUnitOfPay">PW Unit Of Pay</label>
      <input type="text" name="f_pwUnitOfPay" id="id_pwUnitOfPay">

      <label for="id_pwWageLevel">PW Wage Level</label>
      <input type="text" name="f_pwWageLevel" id="id_pwWageLevel">

      <label for="id_pwSource">PW Source</label>
      <input type="text" name="f_pwSource" id="id_pwSource">

      <label for="id_pwSourceYear">PW Source Year</label>
      <input type="text" name="f_pwSourceYear" id="id_pwSourceYear">

      <label for="id_pwSourceOther">PW Source Other</label>
      <input type="text" name="f_pwSourceOther" id="id_pwSourceOther">

      <label for="id_wageRateOfPayFrom"> Wage Rate Of Pay From</label>
      <input type="text" name="f_wageRateOfPayFrom" id="id_wageRateOfPayFrom">

      <label for="id_wageRateOfPayTo"> Wage Rate of Pay To</label>
      <input type="text" name="f_wageRateOfPayTo" id="id_wageRateOfPayTo">

      <label for="id_wageUnitOfPay">Wage Unit Of Pay</label>
      <input type="text" name="f_wageUnitOfPay" id="id_wageUnitOfPay"> 

      <label for="id_h1bDependent">H1B Dependent</label>
      <input type="text" name="f_h1bDependent" id="id_h1bDependent">

      <label for="id_willfulViolator">Willful Violator</label>
      <input type="text" name="f_willfulViolator" id="id_willfulViolator">

      <label for="id_supportH1b">Support H1B </label>
      <input type="text" name="f_supportH1b" id="id_supportH1b">

        <label for="id_laborConAgree">Labor Con Agree</label>
      <input type="text" name="f_laborConAgree" id="id_laborConAgree"> 

      <label for="id_publicDisclosureLocation">Public Disclosure Location</label>
      <input type="text" name="f_publicDisclosureLocation" id="id_publicDisclosureLocation">

      <label for="id_worksiteCity">Worksite City</label>
      <input type="text" name="f_worksiteCity" id="id_worksiteCity">

      <label for="id_worksiteCounty">Worksite County</label>
      <input type="text" name="f_worksiteCounty" id="id_worksiteCounty">

      <label for="id_worksiteState">Worksite State</label>
      <input type="text" name="f_worksiteState" id="id_worksiteState">

      <label for="id_worksitePostalCode">Worksite Postal Code</label>
      <input type="text" name="f_worksitePostalCode" id="id_worksitePostalCode">

      <label for="id_originalCertDate">Original Cert Date</label>
      <input type="text" name="f_originalCertDate" id="id_originalCertDate">

      <input type="submit" name="f_submit" value="Submit">
    </form>
    <?php
      if (isset($_POST['f_submit'])) {
        if ($result) { 
    ?>
          Case data was inserted successfully. 
    <?php 
        } else { 
    ?>
          <h3> Sorry, there was an error. Case data was not inserted. </h3>
    <?php 
        }
      } 
    ?>


    
  </body>
</html>