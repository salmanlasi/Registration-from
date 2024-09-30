

<?php
session_start();

// If user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// User is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .home-container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .home-container h2 {
            margin-bottom: 20px;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="home-container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You have successfully logged in.</p>

    <!-- Logout Button -->
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</body>
</html>
