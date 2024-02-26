<?php
include('conn.php');

if (isset($_POST['add'])) {
    $id = $_POST['uID'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    $insertData = $conn->prepare("INSERT INTO students_record(user_id, firstName, lastName, course, section) VALUES(?, ?, ?, ?, ?)");
    $insertData->execute([$id, $first, $last, $course, $section]);

    header("Location: index.php");
    exit();



    // Logout
    if (isset($_GET['logout'])) {
        session_start();
        unset($_SESSION['logged_in']);
        unset($_SESSION['u_id']);

        header('Location: welcome.php');
    }
}

//Register
if (isset($_POST['register'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if ($pass1 == $pass2) {
        $hash = password_hash($pass1, PASSWORD_DEFAULT);

        $insertUser = $conn->prepare("INSERT INTO user(fName,lName,email,user_pass) VALUES(?,?,?,?)");
        $insertUser->execute([
            $fName,
            $lName,
            $email,
            $hash

        ]);

        header('Location:login.php');
        exit();
    } else {
        header('Location:register.php');
    }
}

// logout
if (isset($_GET['logout'])) {
    session_start();
    unset($_SESSION['logged_in']);
    unset($_SESSION['u_id']);

    header('Location: index.php');
}

// update data
if (isset($_POST['update'])) {
    $sID = $_POST['sID'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    $updateList = $conn->prepare("UPDATE students_record SET firstName=?, lastName=?, course=?, section=? WHERE s_id=?");
    $updateList->execute([$first, $last, $course, $section, $sID]);

    $msg = 'Successfully Updated!';
    header("Location: index.php?msg=$msg");
    exit();
}

// delete data from items
if (isset($_GET['delete'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM students_record WHERE s_id=?");
    $delete->execute([$id]);

    header("Location: index.php");
    exit();
}


// clear all data from history
if (isset($_GET['clear'])) {
    $userId = $_GET['user']; 

    $clearHistory = $conn->prepare("DELETE FROM history WHERE user_id=?");
    $clearHistory->execute([$userId]);

    header("Location: index.php");
    exit();
}

// EDIT PROFILE
if(isset($_POST['editProfile'])) {
    $userID = $_POST['userID'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2) {
        $hash = password_hash($pass1, PASSWORD_DEFAULT);

        $insertUser = $conn->prepare("UPDATE users SET user_fname=?, user_lname=?, user_email=?, user_pass=? WHERE user_id=?");
        $insertUser->execute([
            $fName,
            $lName,
            $email,
            $hash,
            $userID
        ]);

        header("Location: index.php");
        exit();
    }
    
}

$pdo = null;
?>
