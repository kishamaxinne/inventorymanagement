<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('admin.php', false);}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Synergreens IMS </title>
    <link rel="stylesheet" href="libs/css/signin.css">
</head>
<body> 
    <div id="loginContainer">
        <div class="loginSidebar">
            <h3 class="loginText">SYNERTRACK</h3>
            <div class="loginLogo">
                <img src="image/Logo1.png" />
            </div>
            <?php if(!empty($error_message)) { ?>
            <div id = "errorMessage">
                <p>Error: <?= $error_message ?></p>
            </div>
            <?php } ?>
            <div class="loginBody"> 
                <form action="auth.php" method="POST">    
                    <div class="loginContainer">
                        <label> SIGN-IN</label>
                    </div>
                    <div class="InputloginContainer">
                        <label for="">Username</label>
                        <input placeholder="Username" name="username" type="username" />
                    </div>
                    <div class="InputloginContainer">
                        <label for="">Password</label>
                        <input placeholder="Password" name="password" type="password" />
                    </div>
                    <div class ="loginButtonContainer">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="rightSide">
            <img src="image/mint.JPEG" />
        </div>
    </div>
</body>
</html>