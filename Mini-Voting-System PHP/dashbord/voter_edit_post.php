<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$nid_number = $_POST['nid_number'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$sub_district = $_POST['sub_district'];
$district = $_POST['district'];
$division = $_POST['division'];
$image = $_FILES['image'];


$voter_id = $_GET['id'];
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
if(!$_FILES['image']['name']){
    $voter_details = "UPDATE voters SET name ='$name', email='$email', phone_number ='$phone_number',nid_number='$nid_number',father_name='$father_name',mother_name='$mother_name', sub_district='$sub_district',district='$district',division='$division' WHERE id = $voter_id";
    $final_quiry = mysqli_query($db_conect, $voter_details);

    header("location:voter_edit.php?id=$voter_id");
}
else{
    $image_select = "SELECT  *  FROM `voters` WHERE id = $voter_id";
    $final_quiry = mysqli_query($db_conect, $image_select);
    $after_fetch = mysqli_fetch_assoc($final_quiry);

    $image_location = "../votar/votar_image/".$after_fetch['image'];
    unlink($image_location);


    $image_name = $image['name'];
    $explod_name = explode('.', $image_name);
    $extension = end($explod_name);
    $file_name = $phone_number.'.'.$extension;
    $tmp_name = $image['tmp_name'];
    $new_location = "../votar/votar_image/".$file_name;
    move_uploaded_file($tmp_name, $new_location);


    $voter_details = "UPDATE voters SET name ='$name', email='$email', phone_number ='$phone_number',nid_number='$nid_number',father_name='$father_name',mother_name='$mother_name', sub_district='$sub_district',district='$district',division='$division',image='$file_name' WHERE id = $voter_id";
    $final_quiry = mysqli_query($db_conect, $voter_details);

    header("location:voter_edit.php?id=$voter_id");
}



?>