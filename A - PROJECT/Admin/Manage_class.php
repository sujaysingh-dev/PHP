<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Css/Manage-class.css">

    <link rel="stylesheet" href="../Assets/Css/Student.css">
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
            <div class="head">Manage Class</div>
            <div class="container">
               
                <table>
                    <td><input type="submit" name="NC" value="NC"></td>
                    <td> <input type="submit" name="LKG" value="LKG"></td>
                    <td> <input type="submit" name="UKG" value="UKG"></td>
                    <td> <input type="submit" name="One" value="One"></td>
                    <td><input type="submit" name="Two" value="Two"></td>
                    <td><input type="submit" name="Three" value="Three"></td>
                    <td><input type="submit" name="Four" value="Four"></td>
                    <td><input type="submit" name="Five" value="Five"></td>
                    <td><input type="submit" name="Six" value="Six"></td>
                    <td> <input type="submit" name="Seven" value="Seven"></td>
                    <td><input type="submit" name="Eight" value="Eight"></td>
                    <td><input type="submit" name="Nine" value="Nine"></td>
                    <td><input type="submit" name="Ten" value="Ten"></td>
                </table>
            
                <div class="data-box">
                    <table>
                        <thead>
                            <th>Reg No</th>
                            <th width="55px">Photo</th>
                            <th width="200px">Student Name</th>
                            <th width="200px">Father's Name</th>
                            <th width="60px">Gender</th>
                            <th width="300px">Email ID</th>
                            <th width="90px">Mobile No</th>
                            <th width="50px">Class</th>
                            <th width="70px">Section</th>
                            <th width="50px">Roll</th>
                            <th width="160px" colspan="4">Operation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../Assets/Image/class.jpg"></td>
                                <td>Sujay Singh</td>
                                <td>Uday Singh</td>
                                <td>Male</td>
                                <td>Sujaysingh@gamil.com</td>
                                <td>1234567890</td>
                                <td>Eight</td>
                                <td>50</td>
                                <td>A</td>
                                <td><button><i class="fa-solid fa-eye"></i></button></td>
                                <td><button><i class="fa-solid fa-file-pen"></i></button></td>
                                <td><button><i class="fa-solid fa-trash"></i></button></td>
                                <td><button><i class="fa-solid fa-print"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <!-- Footer file accessed from component folder -->
    <?php include '../Component/Footer.php'; ?>
</body>
</html>

<script src="../Component/Navbar.js"></script>