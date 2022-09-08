<?php 
include_once("./connect.php");
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$stname = $_SESSION['stname'];
$id = $_SESSION['userID'];
$adm = $_SESSION['adm'];

$idcha = $_GET["cha"];
$user = $_GET["user"];

$sql1 = "UPDATE `tickets` SET `status`=2,`suporteID`= $id WHERE ID = $idcha";
$sql2 = "INSERT INTO `chat`(`ticketID`, `user1`, `user2`) VALUES ($idcha,$user,$id)";

$result2 = mysqli_query($conn, $sql2);
$result = mysqli_query($conn, $sql1);

header("location: ./geren.php");

/*
function mudastatus(){
    mysqli_query($conn, "UPDATE `tickets` SET `status`='2' WHERE ID = row["ID"]");
}
*/
?>




