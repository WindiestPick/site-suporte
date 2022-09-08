<?PHP
include_once("../connect.php");
session_start();

$password= $_GET["pass"];
$passwordN = $_GET["newPass"];

$id = $_SESSION["userID"];

$login = mysqli_query($conn, "SELECT * FROM user WHERE `ID` = $id AND `password` like md5('$password')");

$res = mysqli_fetch_row($login);
    if($res){
        $ress = mysqli_query($conn, "UPDATE `user` SET `password`= md5('$passwordN') WHERE `ID` = $id");
        header("location: ../home.php");
    }else{
        header("location: ./alterarSenha.php");
    }



mysqli_close($conn);


// http://localhost:7070/sites/site-chamado/html/login.html?email=gustavo2%40gmail.com&password=1234
?>
