

<?php
  // define variables and set to empty values
  // Student
  $firstName = $middleName = $lastName = $dob = $gender = $address = $religion = $class = "";
  $firstNameErr = $middleNameErr = $lastNameErr = $dobErr = $genderErr = $addressErr = $religionErr = $classErr = "";
  // Father
  $fatherFullName = $fatherProfession = $fatherDesignation = $fatherEmail = $fatherMobile = "";
  $fatherFullNameErr = $fatherProfessionErr = $fatherDesignationErr = $fatherEmailErr = $fatherMobileErr = "";
  // Mother
  $motherFullName = $motherProfession = $motherDesignation = $motherEmail = $motherMobile = "";
  $motherFullNameErr = $motherProfessionErr = $motherDesignationErr = $motherEmailErr = $motherMobileErr = "";
  // Mother
  $guardianFullName = $guardianRelation = $guardianEmail = $guardianMobile = "";
  $guardianFullNameErr = $guardianRelationErr = $guardianEmailErr = $guardianMobileErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // firstName validation
    if (empty($_POST["firstName"])) {
      $firstNameErr = "First Name is required";
    } else {
      $firstName = test_input($_POST["firstName"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
        $firstNameErr = "Only letters and white space allowed"; 
      }
    }
    // Middle Name
    $middleName = test_input($_POST["middleName"]);
    // lastName validation
    if (empty($_POST["lastName"])) {
      $lastNameErr = "Last Name is required";
    } else {
      $lastName = test_input($_POST["lastName"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
        $lastNameErr = "Only letters and white space allowed"; 
      }
    }
    // Birthday Validation
    if (empty($_POST["dob"])) {
      $dobErr = "Date of Birth field is required";
    } else {
      $dob = test_input($_POST["dob"]);
    }
    // Class Validation
    if (empty($_POST["class"])) {
      $groupErr = "Class Name is required";
    } else {
      $group = test_input($_POST["class"]);
    }
    if (empty($_POST["religion"])) {
      $religionErr = "Religion field is required";
    } else {
      $religion = test_input($_POST["religion"]);
    }


    // Address validation
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
      } else {
        $address = test_input($_POST["address"]);
      }
      // gender validation
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }


    // fatherName validation
    if (empty($_POST["fatherFullName"])) {
      $fatherFullNameErr = "Father Name is required";
    } else {
      $fatherFullName = test_input($_POST["fatherFullName"]);
    }
    // motherName Validation
    if (empty($_POST["motherFullName"])) {
      $motherFullNameErr = "Mother Name is required";
    } else {
      $motherFullName = test_input($_POST["motherFullName"]);
    }
    
    
    
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $errors = $firstNameErr || $middleNameErr || $lastNameErr || $dobErr || $genderErr || $addressErr || $classErr || $religionErr;
  
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
      
      if (isset($_POST["firstName"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["class"]) && isset($POST["Password"])){

        $sql = "INSERT INTO admission_form
        (first_name, last_name)
        VALUES ('$firstName', '$lastName')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";



      }
      
      
     
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
  }
  
?>


<?php 
include './layout/header.php';
include './layout/main_sidebar.php';
?>

    <!-- Page wrapper  -->

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">New Student Admission</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Student</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student Form</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid" style="min-height:550px">
            <form class="form-horizontal" id="regform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                <div class="card">
                    <div class="card-body">

                        <div class="row alert alert-info">
                            <div class="col-md-4">
                                <label>Admission in</label>
                                <select name="group">
                                    <option  <?php if (isset($group) && $group=="Class One") echo "selected";?> value="Class One">Class One</option>
                                    <option  <?php if (isset($group) && $group=="Class Two") echo "selected";?> value="Class Two">Class Two</option>
                                    <option  <?php if (isset($group) && $group=="Class Three") echo "selected";?> value="Class Three">Class Three</option>
                                    <option  <?php if (isset($group) && $group=="Class Four") echo "selected";?> value="Class Four">Class Four</option>
                                    <option  <?php if (isset($group) && $group=="Class Five") echo "selected";?> value="Class Five">Class Five</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label >Roll No <span class="badge pl-2 pr-2 badge-success">213</span></label>
                            </div>
                            <div class="col-md-4 text-right">
                                <label class="">Form No <span class="badge badge-light">433542</span></label>
                            </div>
                        </div>

                        <label class="mt-3 h5">Student Name</label>
                        <div class="form-group row mb-3">
                            <div class="col-lg-4">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="firstName" 
                                    value="<?php echo $firstName;?>" 
                                    placeholder="First Name *"
                                >
                                <span class="text-danger"><?php echo $firstNameErr;?></span>
                            </div>
                            <div class="col-lg-4">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="middleName" 
                                    value="<?php echo $middleName;?>" 
                                    placeholder="Middle Name"
                                >
                            </div>
                            <div class="col-lg-4">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="lastName" 
                                    value="<?php echo $lastName;?>" 
                                    placeholder="Last Name *"
                                >
                                <span class="text-danger"><?php echo $lastNameErr;?></span>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-lg-4">
                                <label class="mt-1">Date of Birth</label>
                                <div class="input-group">
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="mydatepicker" 
                                        name="dob" 
                                        value="<?php echo $dob;?>" 
                                        placeholder="dd/mm/yyyy *"
                                    >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <span class="text-danger"><?php echo $dobErr;?></span>
                            </div>
                            <div class="col-lg-3">
                                <div class="ml-3">
                                    <label class="m-t-15">Gender *</label>
                                    <div class="custom-control custom-radio">
                                        <input 
                                            type="radio" 
                                            class="custom-control-input" 
                                            id="male" 
                                            name="gender" 
                                            <?php if (isset($gender) && $gender=="male") echo "checked";?>
                                            value="male"
                                        >
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input 
                                            type="radio" 
                                            class="custom-control-input" 
                                            id="female" 
                                            name="gender" 
                                            <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                            value="female"
                                        >
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input 
                                            type="radio" 
                                            class="custom-control-input" 
                                            id="other" 
                                            name="gender" 
                                            <?php if (isset($gender) && $gender=="other") echo "checked";?>
                                            value="other"
                                        >
                                        <label class="custom-control-label" for="other">Other</label>
                                    </div>
                                    <span class="text-danger"><?php echo $genderErr;?></span>
                                </div>
                                
                                
                            </div>
                            <div class="col-md-3">
                                <label class="m-t-15">Upload Image</label>
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        class="custom-file-input" 
                                        id="validatedCustomFile"
                                    >
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-lg-4">
                            <label class="mt-1">Address</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="address"
                                    value="<?php echo $address;?>"
                                    placeholder="Address *"
                                >
                                <span class="text-danger"><?php echo $addressErr;?></span>
                            </div>
                            <div class="col-lg-4">
                            <label class="mt-1">Religion</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="religion"
                                    value="<?php echo $religion;?>"
                                    placeholder="Religion *"
                                >
                                <span class="text-danger"><?php echo $religionErr;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                    

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Father</h4>
                                
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="fatherFullName" 
                                            name="fatherFullName"
                                            value="<?php echo $fatherFullName;?>"
                                            placeholder="Full Name"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="fatherProfession"
                                            name="fatherProfession"
                                            value="<?php echo $fatherProfession;?>"
                                            placeholder="Profession">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                        type="text" 
                                        class="form-control" 
                                        id="fatherDesignation" 
                                        name="fatherDesignation"
                                        value="<?php echo $fatherDesignation;?>"
                                        placeholder="Designation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="fatherEmail" 
                                            name="fatherEmail"
                                            value="<?php echo $fatherEmail;?>"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="fatherMobile" 
                                            name="fatherMobile"
                                            value="<?php echo $fatherMobile;?>"
                                            placeholder="Phone/Mobile"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Mother</h4>
                                
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="motherFullName" 
                                            name="motherFullNmae"
                                            value="<?php echo $motherFullName;?>"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input type="text" 
                                            class="form-control" 
                                            id="motherProfession" 
                                            name="motherProfession"
                                            value="<?php echo $motherProfession;?>"
                                            placeholder="Profession"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="motherDesignation"
                                            name="motherDesignation"
                                            value="<?php echo $motherDesignation;?>"
                                            placeholder="Designation"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="motherEmail" 
                                            name="motherEmail"
                                            value="<?php echo $motherEmail;?>"
                                            placeholder="Email"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="motherMobile" 
                                            name="motherMobile"
                                            value="<?php echo $motherMobile;?>"
                                            placeholder="Phone/Mobile"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Guardian</h4>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="guardianFullName" 
                                            name="guardianFullName"
                                            value="<?php echo $guardianFullName;?>"
                                            placeholder="Full Name"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="guardianRealation" 
                                            name="guardianRelation"
                                            value="<?php echo $guardianRelation;?>"
                                            placeholder="Relation with Student"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="guardianEmail" 
                                            name="guarduanEmail"
                                            value="<?php echo $guardianEmail;?>"
                                            placeholder="Email"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="guardianMobile" 
                                            name="guardianMobile"
                                            value="<?php echo $guardianMobile;?>"
                                            placeholder="Phone/Mobile"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="border-top">
                    <div class="card-body text-center">
                        <input type="submit" class="btn btn-success" name="submit" value="submit" >
                    </div>
                </div>
            </form>
        </div>
    </div>

    

<?php include './layout/footer.php'; ?>