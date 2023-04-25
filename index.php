<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname      = $_POST['first_name'];
    $lname      = $_POST['last_name'];
    $mdname     = $_POST['middlename'];
    $phone      = $_POST['phone'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $DOB        = $_POST['DOB'];
    $hobby      = $_POST['hobby'];

    if(empty($fname) || (empty($lname) || empty($phone) || empty($email) || empty($gender))){
        echo "Please fill all required fields.";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid email address";
    }
    else{
        define('DB_SERVER','localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'reghere');


        $join = mysqli_connect(DB_USER,DB_USER,DB_PASS,DB_NAME);

        if(!$join){
            die("Connection to database failed: " . mysqli_connect_error());
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="school form">
    <title>Login Form</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col-md-8 reg-card">
                <h2 class="text-center">Register Here</h2>
                <div class="container">
                    <img src="" alt="" srcset=""><br>
                    <label for="prifilePic" class="text-center">Prile picture</label>
                </div>
                <form method="POST">
                    <!-- First name and last name starting point  -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="fw-bold">First name <span class="text-danger">*</span></label>
                             <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="fw-bold">Last name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                    </div>
                    <!-- Ending Point for first and last name -->

                    <!-- Starting point for middle name and phone number -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="middlename" class="fw-bold">Middle name</label>
                             <input type="text" name="middlename" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="fw-bold">Phone<span class="text-danger">*</span></label>
                            <input type="tel" name="phone" class="form-control">
                        </div>
                    </div>
                    <!-- Ending Point for middle name and mobile -->

                    <!-- starting point for username and email -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="username" class="fw-bold">choose username</label>
                             <input type="text" name="username" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="fw-bold">Email<span class="text-danger">*</span></label>
                            <input type="email" name="last_name" class="form-control">
                        </div>
                    </div>
                    <!-- Ending point for username and email -->

                    <!--Starting point for gender ,date of birth and hobby -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="first_name" class="fw-bold">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="gay">Gay</option>
                                <option value="trans">Trans</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="DOB" class="fw-bold">Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" name="DOB" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="hobby" class="fw-bold">Hobby</label>
                            <select name="hobby" id="gender" class="form-control">
                                <option value="Gaming">Gaming</option>
                                <option value="Music">Music</option>
                                <option value="Reading">Reading</option>
                                <option value="Sport">Sport</option>
                            </select>
                        </div>
                    </div><br>
                    <!-- Ending point  -->
                  <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="form-control submit fw-bold hover-is-no">Register</button>
                      </div>
   
                  </div>
                </form>
               
            </div>
            <div class="col-md-2"></div>

        </div>
   </div>
</body>
</html>


