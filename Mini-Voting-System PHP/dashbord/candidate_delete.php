<?php 
$candidate_id = $_GET['id'];

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$candidate_delete = "UPDATE `candidate` SET `deleted_at`= NOW() WHERE id = $candidate_id";
$final_quiry = mysqli_query($db_conect, $candidate_delete);
header('location:candidate_list.php');
?>