<?php



// Create connection


$conn = mysqli_connect("localhost", "root", "", "20212_wp2_4120200016");

function registration($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $namadepan = $_REQUEST['namadepan'];
    $namabelakang = $_REQUEST['namabelakang'];
    $joindate = $_REQUEST['join_date'];
    $jointime = $_REQUEST['join_time'];


    //Username Confirmation
    $resultReg = mysqli_query($conn, "SELECT username FROM users WHERE 
    username = '$username'");

    if (mysqli_fetch_assoc($resultReg)) {
        echo "<script> alert ('sudah terdafdtar'); </script>";
        return false;
    }

    //Password Confirmation
    if ($password !== $password2) {
        echo "<script> alert ('salah'); </script>";
        return false;
    }

    //Password encryption, PASSWORD_DEFAULT Method
    $password = password_hash($password, PASSWORD_DEFAULT);


    //User add 
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username',  '$namadepan', '$namabelakang', '$password', '$joindate','$jointime','Not Set','','Not Set','Not Set','Not Set','Not Set','Not Set','Not Set','Not Set','Not Set',1)");

    return mysqli_affected_rows($conn);

    //return 1;
}


function adm_registration($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $namadepan = $_REQUEST['namadepan'];
    $namabelakang = $_REQUEST['namabelakang'];


    //Username Confirmation
    $resultReg = mysqli_query($conn, "SELECT username FROM administrators WHERE 
    username = '$username'");

    if (mysqli_fetch_assoc($resultReg)) {
        echo "<script> alert ('sudah terdafdtar'); </script>";
        return false;
    }

    //Password Confirmation
    if ($password !== $password2) {
        echo "<script> alert ('salah'); </script>";
        return false;
    }

    //Password encryption, PASSWORD_DEFAULT Method
    $password = password_hash($password, PASSWORD_DEFAULT);


    //User add 
    mysqli_query($conn, "INSERT INTO administrators VALUES('', '$username',  '$namadepan', '$namabelakang', '$password')");

    return mysqli_affected_rows($conn);

    //return 1;
}

function verifyCookie()
{
    global $conn;
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $cookieId = $_COOKIE['id'];
        $cookieKey = $_COOKIE['key'];

        $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM users WHERE id = $cookieId"));

        $username = $row === null ? '' : $row['username'];
        $hashedUsername = hash('sha256', $username);

        if ($cookieKey === $hashedUsername) {
            $_SESSION['username'] = $username;
        }
    }
}
