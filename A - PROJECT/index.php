<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-KART</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button{
        font-size: 1.2rem;
        border: 2px solid green;
        padding: .2rem 2rem;
        background: green;
        color: white;
        transition: .5s;
    }
    button:hover{
        background: white;
        color: green;
        cursor: pointer;
    }
</style>
<body>
    <button type="submit" onclick="login()">Login Here</button>
</body>
</html>
<script>
    function login()
    {
        window.open("Authentication/Login.php","_self");
    }
</script>