<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="">
                    <img src="image/login.png" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a id="por" href="#">Portfolio</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a id="contact" href="#">Contact</a></li>
                </ul>
            </div>
           
            <div class="secCol">

                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<form class="form" action="includes/logout.php" method="post">
                                <button class="logout" type="submit" name="logout-submit">Logout</button>
                            </form>';
                    }
                    else{
                        echo '<form class="form" action="includes/login.inc.php" method="post">
                                <input class="text" type="text" name="mailuid" placeholder="Username/E-mail...">
                                <input class="pwd" type="password" name="pwd" placeholder="Password...">
                                <button type="submit" name="login-submit">Login </button>
                            </form>
                            <a class="signup" href="signup.php">Signup</a>';
                    }
                ?>
                
            </div>
        </nav>
    </header>
</body>
</html>