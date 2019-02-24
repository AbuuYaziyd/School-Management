<?php
  // define variables and set to empty values
  $fullName = $fatherName= $motherName = $presentAddress = $mobileNo = $gender = $dob = $religion = $group = "";
  $fullNameErr = $fatherNameErr= $motherNameErr = $presentAddressErr = $mobileNoErr = $genderErr = $dobErr = $religionErr = $groupErr = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // fullName validation
    if (empty($_POST["fullName"])) {
      $fullNameErr = "Name is required";
    } else {
      $fullName = test_input($_POST["fullName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$fullName)) {
        $fullNameErr = "Only letters and white space allowed"; 
      }
    }
    // fatherName validation
    if (empty($_POST["fatherName"])) {
      $fatherNameErr = "Father Name is required";
    } else {
      $fatherName = test_input($_POST["fatherName"]);
    }
    // motherName Validation
    if (empty($_POST["motherName"])) {
      $motherNameErr = "Mother Name is required";
    } else {
      $motherName = test_input($_POST["motherName"]);
    }
    // Birthday Validation
    if (empty($_POST["dob"])) {
      $dobErr = "Date of Birth field is required";
    } else {
      $dob = test_input($_POST["dob"]);
    }
    /// presentAddress validation
    if (empty($_POST["presentAddress"])) {
      $presentAddressErr = "Address is required";
    } else {
      $presentAddress = test_input($_POST["presentAddress"]);
    }
    // gender validation
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
    // Group Validation
    if (empty($_POST["group"])) {
      $groupErr = "Group is required";
    } else {
      $group = test_input($_POST["group"]);
    }
    $mobileNo = test_input($_POST["mobileNo"]);
    $religion = test_input($_POST["religion"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $errors = $fullNameErr || $fatherNameErr || $motherNameErr || $presentAddressErr || $mobileNoErr || $genderErr || $dobErr || $religionErr || $groupErr;

  if($errors){
    echo "Please fill up every required field correctly..";
  }
  else{
    // Database config
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_management";
    
    try {
      // Database Connection
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Query Statement
      $sql = "INSERT INTO admission_form_all 
      (student_full_name, father_name, mother_name, date_of_birth, present_address, gender, mobile_student, religion, group_name)
      VALUES ('$fullName', '$fatherName', '$motherName', '$dob', '$presentAddress', '$gender', '$mobileNo', '$religion', '$group')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "New record created successfully";
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
  }
?>