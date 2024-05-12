<?php 
session_start();
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$birth_date = $_POST['birth_date'];
$nid_number = $_POST['nid_number'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$union = $_POST['union'];
$sub_district = $_POST['sub_district'];
$district = $_POST['district'];
$division = $_POST['division'];
$blood_group = $_POST['blood_group'];
$gender = $_POST['gender'];
$image = $_FILES['image'];

$flag = false;


// if(isset($_SESSION['logged_in'])){
//     echo "back korso";

// }
// else{
//     echo "dhukso";
// }

if($name){
    $_SESSION['old_name'] = $name;
}

else{
    $flag = true;
    $_SESSION['name_err'] = "<font color='red'><p>Name Field is Reqired</p></font>";
}

if($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_check = "SELECT COUNT(*) AS result FROM `voters` WHERE email = '$email'";
        $final_quiry = mysqli_query($db_conect, $email_check);
        $after_fetch = mysqli_fetch_assoc($final_quiry)['result'];
        if($after_fetch != 1){
            $_SESSION['old_email'] = $email;
        }
        else{
            $flag = true;
            $_SESSION['duplicate_email_err'] = "<font color='red'><p>This Email is already Exists</p></font>";
        }
    }
    else{
        $flag = true;
        $_SESSION['email_check_err'] = "<font color='red'><p>Enter Correct Email</p></font>";
    }
}

else{
    $flag = true;
    $_SESSION['email_err'] = "<font color='red'><p>Email is Missing</p></font>";
}

if($phone_number){
     $regex = '/^01[3-9]\d{8}$/';
     if(preg_match($regex, $phone_number)){
        $number_check = "SELECT COUNT(*) AS result FROM `voters` WHERE phone_number = '$phone_number'";
        $final_quiry = mysqli_query($db_conect, $number_check);
        $after_fetch = mysqli_fetch_assoc($final_quiry)['result'];
         if($after_fetch != 1){
             $_SESSION['old_phone_number'] = $phone_number;
         }
         else{
            $flag = true;
            $_SESSION['duplicate_check_err'] = "<font color='red'><p>This phone number Already Exist</p></font>";
         }
     }
     else{
        $flag = true;
        $_SESSION['number_check_err'] = "<font color='red'><p>Enter Valid Phone Number</p></font>";
     }
}

else{
    $flag = true;
    $_SESSION['number_err'] = "<font color='red'><p>Phone Number is Missing</p></font>";
}

if($birth_date){
    $_SESSION['old_birth_date'] = $birth_date;
}

else{
    $flag = true;
    $_SESSION['brithday_err'] = "<font color='red'><p>Date of Birth is Missing</p></font>";
}

if($nid_number){
    if(strlen($nid_number) === 10){
        $nid_number_check = "SELECT COUNT(*) AS result FROM `voters` WHERE nid_number = '$nid_number'";
        $final_quiry = mysqli_query($db_conect, $nid_number_check);
        $after_fetch = mysqli_fetch_assoc($final_quiry)['result'];
        if($after_fetch != 1 ){
            $_SESSION['old_nid_number'] = $nid_number;
        }
        else{
            $flag = true;
            $_SESSION['duplicate_nid_err'] = "<font color='red'><p>This NID Number Already Exist</p></font>";
        }
    }
    else{
        $flag = true;
        $_SESSION['nid_check_err'] = "<font color='red'><p>Enter Correct NID Number</p></font>";
    }
}

else{
    $flag = true;
    $_SESSION['nid_err'] = "<font color='red'><p>NID Number is Missing</p></font>";
}

if($father_name){
    $_SESSION['old_father_name'] = $father_name;
}

else{
    $flag = true;
    $_SESSION['father_name_err'] = "<font color='red'><p>Father Name is Missing</p></font>";
}

if($mother_name){
    $_SESSION['old_mother_name'] = $mother_name;
}

else{
    $flag = true;
    $_SESSION['mother_name_err'] = "<font color='red'><p>Mother Name is Missing</p></font>";
}

if($union){
    $_SESSION['old_union'] = $union;
}

else{
    $flag = true;
    $_SESSION['union_err'] = "<font color='red'><p>Union Name is Missing</p></font>";
}

if($sub_district){
    $_SESSION['old_sub_district'] = $sub_district;
}

else{
    $flag = true;
    $_SESSION['sub_district_err'] = "<font color='red'><p>Sub District Name is Missing</p></font>";
}

if($district){
    $_SESSION['old_district'] = $district;
}

else{
    $flag = true;
    $_SESSION['district_err'] = "<font color='red'><p>District Name is Missing</p></font>";
}

if($division){
    $_SESSION['old_division'] = $division;
}

else{
    $flag = true;
    $_SESSION['division_err'] = "<font color='red'><p>Division Name is Missing</p></font>";
}

if($blood_group){
    
}

else{
    $flag = true;
    $_SESSION['blood_group_err'] = "<font color='red'><p>Blood Group is Missing</p></font>";
}

if($gender){
    
}

else{
    $flag = true;
    $_SESSION['gender_err'] = "<font color='red'><p>Gender is Missing</p></font>";
}
   


    $image_name = $_FILES['image']['name'];
    $explod_name = explode('.',$image_name);
    $img_extention = end($explod_name);
    $file_name = $phone_number.'.'.$img_extention;
    $image_valid = array('png','jpg','jpeg');
    $after_validate = in_array($img_extention, $image_valid);
if(!empty($_FILES['image']['name'])) {
    if($after_validate){
        $temp_name = $_FILES['image']['tmp_name'];
        $new_location = "votar_image/".$file_name;
        move_uploaded_file($temp_name, $new_location);
    }
    else{
        $flag = true;
        $_SESSION['extension_err'] = "<font color='red'><p>Only jpg, png, jpeg Allow </p></font>";
    }
} 
else {
    $flag = true;
    $_SESSION['image_err'] = "<font color='red'><p>Image is Missing</p></font>";
}



if($flag == true){
    header('location:signup.php');
}

else{
        $voter_insert = "INSERT INTO `voters`(`name`, `email`, `phone_number`, `date_of_birth`, `nid_number`, `father_name`, `mother_name`, `up`, `sub_district`, `district`, `division`, `blood_group`, `image`, `gender`) VALUES ('$name','$email','$phone_number','$birth_date','$nid_number','$father_name','$mother_name','$union','$sub_district','$district','$division','$blood_group','$file_name','$gender')";
        $final_quiry = mysqli_query($db_conect, $voter_insert);
        header('location:login.php');
}


 ?>