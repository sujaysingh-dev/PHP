<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Css/Pay.css">
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
            <div class="head">Payment</div>
            <div class="container">

                <div class="button">
                    <button onclick="Student()" class="stu_btn">Student</button>
                    <button onclick="Teacher()" class="tea_btn">Teacher</button>
                </div>

                <form action="Payment.php" method="post" class="top" id="student">
                    <div class="input">
                        <label>Mobile Number</label>
                        <input type="number" name="number">
                    </div>
                    <div class="input">
                        <label>Date of Birth</label>
                        <input type="date" name="d_o_birth">
                    </div>
                    <div class="input">
                        <input type="submit" name="search" value="Search">                        
                    </div>
                </form>

                <form action="Payment.php" method="post" class="bottom" id="teacher">
                    <div class="input">
                        <label>Reg No</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Student Name</label>
                        <input type="text" name="fat_name">
                    </div>
                    <div class="input">
                        <label>Father's Name</label>
                        <input type="text" name="email">
                    </div>
                    <div class="input">
                        <label>Email ID</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Class/ Section/ Roll</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Total Amount</label>
                        <input type="number" name="total_amount">
                    </div>
                    <div class="input">
                        <label>Paid Amount</label>
                        <input type="number" name="paid_amount">
                    </div>
                    <div class="input">
                        <label>Dues Amount</label>
                        <input type="number" name="dues_amount">
                    </div>
                    <div class="input">
                        <input type="submit" name="Pay" value="Proceed">
                    </div>
                </form>

                <form action="Payment.php" method="post" class="top" id="teacher">
                    <div class="input">
                        <label>Mobile Number</label>
                        <input type="number" name="number">
                    </div>
                    <div class="input">
                        <label>Date of Birth</label>
                        <input type="date" name="d_o_birth">
                    </div>
                    <div class="input">
                        <input type="submit" name="search" value="Search">                        
                    </div>
                </form>

                <form action="Payment.php" method="post" class="bottom" id="teacher">
                    <div class="input">
                        <label>Teacher ID</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Teacher Name</label>
                        <input type="text" name="fat_name">
                    </div>
                    <div class="input">
                        <label>Father's Name</label>
                        <input type="text" name="email">
                    </div>
                    <div class="input">
                        <label>Email ID</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Class/ Section</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input">
                        <label>Total Amount</label>
                        <input type="number" name="total_amount">
                    </div>
                    <div class="input">
                        <label>Paid Amount</label>
                        <input type="number" name="paid_amount">
                    </div>
                    <div class="input">
                        <label>Dues Amount</label>
                        <input type="number" name="dues_amount">
                    </div>
                    <div class="input">
                        <input type="submit" name="Pay" value="Proceed">
                    </div>
                </form>

            </div>
        </div>
    </div> 
    <!-- Footer file accessed from component folder -->
    <?php include '../Component/Footer.php'; ?>
</body>
</html>
<script>






</script>
