<?php 
$name = $_POST['name'];
$protik_name = $_POST['protik_name'];
$area = $_POST['area'];
$protik_image = $_FILES['protik_image'];

$candidate_id = $_GET['id'];
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$image_select = "SELECT * FROM `candidate` WHERE id = $candidate_id";
$final_quiry = mysqli_query($db_conect, $image_select);
$after_fetch = mysqli_fetch_assoc($final_quiry);
$protik_image2 = $after_fetch;



if($_FILES['protik_image']['name']){
    $image_location = "candidate/protik/".$protik_image2['protik_image'];
    unlink($image_location);

    $image_name = $protik_image['name'];
    $explod_name = explode('.', $image_name);
    $extension = end($explod_name);
    print_r($image_name);
    $file_name = str_replace(' ', '_', strtolower($name)).'.'.$extension;
    $tmp_name = $protik_image['tmp_name'];
    $new_location = "candidate/protik/".$file_name;
    move_uploaded_file($tmp_name, $new_location);

    $voter_details = "UPDATE `candidate` SET `name`='$name',`protik_name`='$protik_name',`area`='$area',`protik_image`='$file_name' WHERE id = $candidate_id";
    $final_quiry = mysqli_query($db_conect, $voter_details);
    header("location:candidate_edit.php?id=$candidate_id");
}
else{
    $voter_details = "UPDATE `candidate` SET `name`='$name',`protik_name`='$protik_name',`area`='$area' WHERE id = $candidate_id";
    $final_quiry = mysqli_query($db_conect, $voter_details);
    header("location:candidate_edit.php?id=$candidate_id");
}


?>