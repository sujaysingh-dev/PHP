<?php
    include '../Php/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Css/Admission.css">
    <!-- Dashboard css file export from Assets / Css folder -->
    <link rel="stylesheet" href="../Assets/Css/Dash.css">
    <!-- Header css from component section -->
    <link rel="stylesheet" href="../Assets/Css/Head.css">    
    <!-- Navbar css from component section -->
    <link rel="stylesheet" href="../Assets/Css/Nav-bar.css">
    <!-- Footer css from component section -->
    <link rel="stylesheet" href="../Assets/Css/Foot.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- Header file from component folder accessed -->
    <?php include '../Component/Header.php'; ?>

    <div class="main">
        <!-- Side bar file from compoent folder accessed -->
        <?php  include '../Component/Navbar.php';  ?>

        <div class="page">
            <div class="head">Add Student</div>
            <div class="container">
                <form action="Admission.php" method="POST" class="form" enctype="multipart/form-data">
                    <div class="top">
                        <!-- 
                            CLASS DETAILS FORM
                        -->
                        <div class="input">
                            <label>Class Name</label>
                            <select name="Class_name">
                                <option value="">Select Class</option>
                                <option value="NC">NC</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="One">One</option>
                                <option value="Two">Two</option>
                                <option value="Three">Three</option>
                                <option value="Four">Four</option>
                                <option value="Five">Five</option>
                                <option value="Six">Six</option>
                                <option value="Seven">Seven</option>
                                <option value="Eight">Eight</option>
                                <option value="Nine">Nine</option>
                                <option value="Ten">Ten</option>
                            </select>
                        </div>
                        <div class="input">
                            <label>Section</label>
                            <select name="Section">
                                <option value="">Select Section</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="input">
                            <label>Roll Number</label>
                            <input type="number" name="Roll_no">
                        </div>
                    </div>
                    <!-- 
                        STUDENT DETAILS FORM 
                    -->
                    
                    <div class="bottom">
                        <div class="input-box">
                            <div class="input">
                                <label>Student Name</label>
                                <input type="text" name="Student_name">
                            </div>
                            <div class="input">
                                <label>Father's Name</label>
                                <input type="text" name="Father_name">
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <label>Mother's Name</label>
                                <input type="text" name="Mother_name">
                            </div>
                            <div class="input">
                                <label>Date Of Birth</label>
                                <input type="date" name="D_o_birth">
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <label>Gender</label>
                                <select name="Gender">
                                    <option value="">Select Gendar</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="input">
                                <label>Religion</label>
                                <select name="Religion">
                                    <option value="">Select Religion</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Sikh">Sikh</option>
                                    <option value="Baudh">Baudh</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Muslim">Muslim</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <label>Category</label>
                                <select name="Category">
                                    <option value="">Select Category</option>
                                    <option value="General">General</option>
                                    <option value="OBC">OBC</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                </select>
                            </div>
                            <div class="input">
                                <label>Mobile Number</label>
                                <input type="number" name="Number">
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <label>Email ID</label>
                                <input type="email" name="Email_id">
                            </div>
                            <div class="input">
                                <label>Address</label>
                                <input type="text" name="Address">
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <label>Choose Student Photo</label>
                                <input type="file" name="Photo" class="photo">
                            </div>
                            <div class="btn">
                                <button type="reset" name="Reset">Reset</button>
                                <button type="submit" name="Submit">Submit</button>
                            </div>
                        </div>
                    </div>               
                </form>
            </div>
        </div>
    </div> 

    <!-- Footer file accessed from component folder -->
    <?php include '../Component/Footer.php'; ?>
</body>
</html>
<script src="../Component/Navbar.js"></script>

<?php

    if(isset($_POST['Submit']))
    {
        $class          =       $_POST['Class_name'];
        $section        =       $_POST['Section'];
        $roll           =       $_POST['Roll_no'];
        $name           =       $_POST['Student_name'];
        $fatherName     =       $_POST['Father_name'];
        $motherName     =       $_POST['Mother_name'];
        $dateofbirth    =       $_POST['D_o_birth'];
        $gender         =       $_POST['Gender'];
        $religion       =       $_POST['Religion'];
        $category       =       $_POST['Category'];
        $number         =       $_POST['Number'];
        $email          =       $_POST['Email_id'];
        $address        =       $_POST['Address'];

        $finalName      =       $_FILES['Photo']['name'];
        $tmp_Name       =       $_FILES['Photo']['tmp_name'];
        $folder         =       '../Student_photo/'.$finalName;
        $move           =       move_uploaded_file($tmp_Name, $folder);

        $Query          =       "INSERT INTO student (`Class`, `Section`, `Roll`, `Student_name`, `Father_name`, `Mother_name`, `D_o_birth`, `Gender`, `Religion`, `Category`, `Aadhar_number`, `Mobile_number`, `Email_id`, `Address`) VALUES ($class, $section, $roll, $name, $fatherName, $motherName, $dateofbirth, $gender, $religion, $category, $number, $email, $address, $folder)";

        $Run            =       mysqli_query($Conn, $Query);
   
    }



?>