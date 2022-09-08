<?PHP
include_once("../connect.php");
session_start();

$empresa = $_GET["enterprise"];
$titulo = $_GET["title"];
$descricao= $_GET["description"];
$prioridade = $_GET["priority"];

$id = $_SESSION["userID"];

$sql = "INSERT INTO tickets (enterprise, title, description, priority, userID, status,suporteID) VALUES ('$empresa','$titulo','$descricao','$prioridade',$id,1,null)";


if (mysqli_query($conn, $sql)) {
    $cjs = 'true';
    $status = "Chamado aberto com sucesso";
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