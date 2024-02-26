<?php
include('header.php');

if(isset($_SESSION['logged_in'])){
    header("Location: home.php");
}

    // Login
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $seeCheck = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $seeCheck->execute([$email]);

        foreach($seeCheck as $check) {
            if($check['email'] == $email && password_verify($pass, $check['user_pass'])){
                $_SESSION['logged_in'] = true;
                $_SESSION['u_id'] = $check['userID'];

                header("Location: index.php");
            }
            else {
                $msg = "Password Incorrect!";
                header("Location: login.php?msg=$msg");
            }
        }
    }
?>
<fieldset style="background-color: lightgreen;">

<legend> <b>LOGIN/Users</b></legend>
<div>
    <form method="POST" action="login.php">
        <label><b>Email: </b> </label><input type="text" name="email"> <br> <br>
        <label> <b>Password: </b> </label><input type="password" name="password"> <br> <br>
        <button name="login" style="background-color: lightgrey;"> <b> SIGN IN</b> </button>
    
    </form>
</div>
</fieldset>

    
</body>
</html>

    
