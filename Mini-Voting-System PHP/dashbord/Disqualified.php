<?php 
$candidate_id = $_GET['id'];

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$candidate_update = "UPDATE `candidate` SET `disqualify_status` = '1' WHERE id = $candidate_id";
$final_quiry = mysqli_query($db_conect, $candidate_update);
header('location:candidate_list.php');

?>