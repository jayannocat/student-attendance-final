<?php
include "header.php";

?>


<div>
    <fieldset style="background-color: lightgreen;">
    
        <legend> <b>REGISTER/Users</b></legend>
        <form method="POST" action="process.php">
            <label><b>First Name: </b> </label><input type="text" name="fName"> <br> <br>
            <label> <b>Last Name: </b></label><input type="text" name="lName"> <br> <br>
            <label><b>Email: </b> </label><input type="text" name="email"> <br> <br>
            <label> <b>Password: </b> </label><input type="password" name="password1"> <br> <br>
            <label> <b>Confirm Password: </b> </label><input type="password" name="password2"> <br> <br>
            <button name="register" style="background-color: lightgrey;"> <b> SIGN UP</b> </button>
        </form>
    </fieldset>
</div>


</body>
</html>