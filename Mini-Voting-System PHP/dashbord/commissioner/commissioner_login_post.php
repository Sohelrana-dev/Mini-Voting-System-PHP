<?php 
session_start();
$security_key = $_POST['security_key'];
$phone_number = $_POST['phone_number'];


$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$commissiner_login = "SELECT COUNT(*) AS result FROM `commissioner` WHERE security_key = '$security_key'";
$final_quiry = mysqli_query($db_conect, $commissiner_login);
$after_fetch = mysqli_fetch_assoc($final_quiry);

if($after_fetch['result'] == 1){
    $commissiner_login2 = "SELECT * FROM `commissioner` WHERE phone_number = '$phone_number'";
    $final_quiry = mysqli_query($db_conect, $commissiner_login2);
    $after_fetch = mysqli_fetch_assoc($final_quiry);
    if($after_fetch['phone_number']){
        $_SESSION['commissioner'] = '';
        $_SESSION['commissioner_id'] = $after_fetch['id'];
        header('location:../admin_dashbord.php');
    }
    else{
        header('location:commissioner_login.php');
       $_SESSION['phone_err'] = "Enter Valid Phone Number";
    }
}
else{
     header('location:commissioner_login.php');
    $_SESSION['key_err'] = "Enter Valid Security Key";
}


?>