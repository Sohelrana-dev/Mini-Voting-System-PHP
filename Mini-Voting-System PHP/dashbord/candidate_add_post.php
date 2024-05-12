<?php 
$name = $_POST['name'];
$protik_name = $_POST['protik_name'];
$area = $_POST['area'];
$protik_image = $_FILES['protik_image'];


$image2 = $protik_image['name'];
$explod_name = explode('.', $image2);
$extension = end($explod_name);
$file_name2 = str_replace(' ', '_', strtolower($name)).'.'.$extension;
$tmp_name2 = $protik_image['tmp_name'];
$new_location2 = "candidate/protik/$file_name2";
move_uploaded_file($tmp_name2, $new_location2);


$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$candidate_insert = "INSERT INTO `candidate`(`name`, `protik_name`, `area`, `protik_image`) VALUES ('$name', '$protik_name', '$area','$file_name2')";
$final_quiry = mysqli_query($db_conect, $candidate_insert);
header('location:candidate_list.php');
?>