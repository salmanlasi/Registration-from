






<?php
include_once('config/dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .input-box {
            margin-bottom: 20px;
        }
        .input-box input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
        }
        .btn, .btn2{
            background-color: #28a745;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn, .btn2:hover {
            background-color: #218838;
        }

        .btn2 {
            margin-top: 1em;
           
        }
        .btn2 a{
            text-decoration: none;
            list-style: none;
            color: white;
        }
        .error, .success {
            margin-top: 15px;
            padding: 10px;
            color: white;
            font-weight: bold;
        }
        .error {
            background-color: #e74c3c;
        }
        .success {
            background-color: #2ecc71;
        }
        form p{
            color: gray;
        }
    </style>
</head>
<body> 


    <div class="login-container">
        <h1>Registration Form</h1>
        <h2>Login</h2>
        <form action="login.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>     
            <p class="error"><?php echo $_GET['error']; ?></p>        <?php } ?>
            <div class="input-box">
                <input type="email" name="email" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="upassword" placeholder="Password" required>
            </div>

            
            <button type="submit" name="submit" class="btn">Login</button>
           <p> ------------or-----------</p>
            <button type="submit" name="done" class="btn2"><a href="register.php">Register Now</a></button>
        </form>
    </div>

</body> 
</html>







