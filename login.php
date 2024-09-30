
<?php
session_start(); 
require_once("config/dbconn.php");

if (isset($_POST['email']) && isset($_POST['upassword'])) { 

    function validate($data) {       
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);    
        return $data;    
    }  

    $uname = validate($_POST['email']);  
    $pass = validate($_POST['upassword']); 

    if (empty($uname)) { 
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if (empty($pass)) { 
        header("Location: index.php?error=Password is required");
        exit();
    }
    else {  
        $sql = "SELECT * FROM faizan WHERE email='$uname' AND upassword='$pass'";  
        $result = mysqli_query($mysqli, $sql);

        // Check if the query was successful
        if (!$result) {
            // Output the error and stop the script
            die("Query failed: " . mysqli_error($mysqli));
        }

        if (mysqli_num_rows($result) === 1) {  
            $row = mysqli_fetch_assoc($result);   
            if ($row['email'] === $uname && $row['upassword'] === $pass) {  
                echo "Logged in!";   
                $_SESSION['username'] = $row['email']; 
                $_SESSION['name'] = $row['name'];    
                $_SESSION['id'] = $row['id'];  
                header("Location: home.php");   
                exit();         
            } else {
                header("Location: index.php?error=Incorrect Username or Password");
                exit();            
            }
        } else {
            header("Location: index.php?error=Incorrect Username or Password");
            exit();    
        }    
    }
} else {    
    header("Location: index.php"); 
    exit();
}
?>


