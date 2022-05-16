<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <link rel="stylesheet" href="css/class2.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
        <div class="form-validation col-md-6" style="margin-left:15rem">
            <form method="post" action="" id="frm" >
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Enter Name">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuid" name="stuid" placeholder="Enter ID">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Birth Date">
                </div>
                <div class="row mb-3">
                    <select name="gender">
                        <option disabled selected value="Select Gender">Select Gender</option>
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select>
                </div>
                <div class="row mb-3">
                     <select name="booldgrp">
                        <option disabled selected value="Select Boold Group">Select Boold Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                 </div>
                <div class="row mb-3">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <div class="row mb-3">
                    <input type="submit" class="btn btn-success" id="submitbtn" name ="submitbtn" action="">
                </div>
            </form>
        </div>
        
</body>
</html>
<?php 
    $submitbutton= $_POST['submitbtn'];
    if($submitbutton)
    {
        $stuname       = $_POST['stuname'] ;
        $stuid         = $_POST['stuid'] ;
        $phone         = $_POST['phone'] ;
        $gender        = $_POST['gender'] ;
        $booldgrp      = $_POST['booldgrp'] ;
        $dob           = $_POST['dob'] ;
        $pass          = $_POST['pass'] ;
        $address       = $_POST['address'] ;

        $user = "root";
        $pass = "";
        $db = "registration_form_c193055";
        $db =mysqli_connect("localhost",$user,$pass,$db);
        mysqli_query($db,"INSERT INTO studentinfo(stuname,stuid,phone,gender,booldgrp,dob,pass,address) values('$stuname','$stuid','$phone','$gender','$booldgrp','$dob','$pass','$address')");
    }
    else
    {
        echo "Error !!!";
    }
?>