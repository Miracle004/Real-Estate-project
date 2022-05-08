
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="upload.css">
    <script type="application/javascript" src="index.js"></script>
</head>
<body>
    
    <nav>
        <img src="open-menu.png" class="menu">
        <ul id="services-list">
                <a><li>Explore</li></a>
                <a><li>My Properties</li></a>
                <a><li>Edit Your Profile</li></a>
               <a> <li>Logout</li></a>
                <a href="index.php"><li>Home</li></a>
                <a><li>Help</li></a>
                <a href="property_registration.php"><li>Upload a property</li></a>
                <a href=""><li>Sell</li></a>
                <a href="logout.php"><li>Logout</li></a>
            </ul>
    </nav>
    
    <main>
    <a href="index.php"><img src="logo.png" alt="" class="site-logo"></a>
        <img src="dummy2.jpg" alt="" class="dummy">
        <h1 class="main_header"></h1>
            <div class="quicklist">
                <div class="editProfile"><a href="#">Edit Your Profile</a></div>
                <div class="uploadProperty"><a href="property_registration.php">Upload A Property</a></div>
                <div class="clientRequest"><a href="#">Requests</a></div>
            </div>
    </main>

        <section>
            <div class="row1"></div>
            <div class="row1"></div>
            <div class="row1"></div>
        </section>
        
</body>
</html>

<?php 
/*session_start();
include("../project-1/Classes/login-model.php"); 

include("../project-1/Classes/login-controller.php");

$Login_user = new loginController($_SESSION);
#settting variable to get the session username
$userName = $Login_user->username;
*/
?>