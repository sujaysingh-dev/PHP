<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Assets/Image/class.jpg">
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
            <div class="head">Admin Dashboard</div>
            <div class="card">
                <div class="top">
                    <div class="img">
                        <img src="../Assets/Image/school.jpg">
                    </div>
                    <div class="img">
                        <img src="../Assets/Image/class.jpg">
                    </div>
                    <div class="img">
                        <img src="../Assets/Image/hall.jpg">
                    </div>
                    <div class="img">
                        <img src="../Assets/Image/library.jpg">
                    </div>
                    <div class="img">
                        <img src="../Assets/Image/computer.jpeg">
                    </div>
                    <div class="img">
                        <img src="../Assets/Image/play.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Footer file accessed from component folder -->
    <?php include '../Component/Footer.php'; ?>
</body>
</html>

<script src="../Component/Navbar.js"></script>