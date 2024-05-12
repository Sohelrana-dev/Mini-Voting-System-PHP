<?php 
session_start();

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];


$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_login = "SELECT COUNT(*) AS result FROM `voters` WHERE phone_number = '$phone_number'";
$final_quiry = mysqli_query($db_conect, $voter_login);
$after_fetch = mysqli_fetch_assoc($final_quiry);

if($after_fetch['result'] == 1){
    $voter_login = "SELECT * FROM `voters` WHERE name = '$name'";
    $final_quiry = mysqli_query($db_conect, $voter_login);
    $after_fetch = mysqli_fetch_assoc($final_quiry);
    
    if($after_fetch['name']){
        $_SESSION['logged_check'] = '';
        $_SESSION['logged_in'] = '';
        $_SESSION['voter_id'] = $after_fetch['id'];
        header('location:dashbord.php');
    }
    else{
        header('location:login.php');
        $_SESSION['login_name_err'] = "Enter Valid Name";
    }
}
else{
    header('location:login.php');
    $_SESSION['login_phone_err'] = "Enter Valid Phone Number";
}

?>