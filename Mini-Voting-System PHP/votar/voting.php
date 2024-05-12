<?php 
session_start();

$candidate_id = $_GET['id'];
$voter_id = $_SESSION['voter_id'];


$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$vote = "INSERT INTO `vote`( `candidate_id`, `voter_id`) VALUES ('$candidate_id','$voter_id')";
$final_quiry = mysqli_query($db_conect, $vote);
header('location:dashbord.php');


?>