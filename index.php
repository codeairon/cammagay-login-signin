
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/mydatabase.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<style>
     body {
               
                display: flex;
                flex-direction: column; 
                justify-content: center; 
                align-items: center; 
                height: 100vh; 
                background-image: url('image/bg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                margin: 0; 
            }

    h1 {
        color: white;   
    }
    p{
        color: white;
        
        
            
    }
</style>
<body>
    
    <h1>Home Page</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logoutpage.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="loginpage.php">Log in</a> or <a href="signuppage.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
