<?php 
$voter_id = $_GET['id'];

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_delete = "DELETE FROM `voters` WHERE id = $voter_id";
$final_quiry = mysqli_query($db_conect, $voter_delete);
header('location:voter_trash_list.php');
?>