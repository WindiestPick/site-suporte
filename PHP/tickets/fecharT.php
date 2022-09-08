<?PHP
include_once("../connect.php");
session_start();

$descricao= $_GET["description"];


$idcha = $_GET["idcha"];

$sql = mysqli_query($conn,"UPDATE `tickets` SET `status`= 3, `solution` =  '$descricao'  WHERE `ID` =  $idcha");
$result = mysqli_query($conn,"SELECT * FROM chat WHERE `ticketID` = $idcha");

while($row = $result->fetch_assoc()){
    $chat = mysqli_query($conn, "DELETE FROM `mensagens` WHERE chatID = " . $row['ID']);
}


if ($sql) {
    $cjs = 'true';
    $status = "Chamado encerrado com sucesso";
} else {
    $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
    $cjs = 'false';
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>
<body>
    <a href="../home.php" id="out"></a>
</body>
<script>
    let out = document.getElementById("out");
    if (<?php echo $cjs;?> == 'true'){
        alert("<?php echo $status;?>");
        document.location.href = "../home.php";
    }else{
        alert("<?php echo $status;?>");
        document.location.href = "../home.php";
    }
</script>
</html>