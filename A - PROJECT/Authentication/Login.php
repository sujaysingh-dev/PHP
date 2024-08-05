<?php
    include('../Php/Connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Login.css">
    <title>Admin-Login</title>
</head>
<body>
    <form action="Login.php" method="post" enctype="multipart/form-data">
        <div class="card">
            <h2>Admin Login</h2>
            <label>User Name</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <div class="btn">
                <button type="submit" name="create">Create</button>
                <button type="submit" name="login">Login</button>
            </div>
        </div>
    </form>
</body>
</html>

<?php

    if(isset($_POST['create']))
    {
        echo "create";
    }

    
    if(isset($_POST['login']))
    {
        $username   =   $_POST['username'];
        $password   =   $_POST['password'];        
        $query  =   "SELECT * FROM admin WHERE Userid = '$username' AND Password = '$password'";
        $run    =   mysqli_query($Conn, $query);
        $row = mysqli_fetch_array($run, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($run);           
        if($count == 1)
        {  
            ?>  <script>window.open('../Admin/Dashboard.php','_self')</script>  <?php
        }  
        else
        {  
            ?>  <script>alert('Access Denied, Try Again...')</script>  <?php
        }     
    }

?>