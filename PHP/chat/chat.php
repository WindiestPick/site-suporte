<?php
include("../connect.php");

$id = $_GET['userID'];
$idcha = $_GET["ticketID"];



$sql = mysqli_query($conn, 'SELECT * FROM chat WHERE ticketID ='. $idcha);

while ($key2 = $sql->fetch_assoc()){
	$sql2 = mysqli_query($conn, 'SELECT * FROM mensagens WHERE chatID ='. $key2["ID"]);
}

while ($key = $sql2->fetch_assoc()){
	$sql1 = mysqli_query($conn,"SELECT * FROM user WHERE ID =". $key['userID']);
	while ($key1 = $sql1->fetch_assoc()){
		echo "<h4><strong>".$key1['name']."</strong>: ".$key['msg']."</h4>";
	}
}
?>