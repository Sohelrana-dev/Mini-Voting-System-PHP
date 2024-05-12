<?php 
$candidate_id = $_GET['id'];

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_delete = "UPDATE `candidate` SET `deleted_at`= NULL WHERE id = $candidate_id";
$final_quiry = mysqli_query($db_conect, $voter_delete);
header('location:candidate_trash_list.php');

?>