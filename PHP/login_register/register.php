<?PHP
include_once("../connect.php");

session_start();
session_destroy();

$name = $_GET["name"];
$stname = $_GET["lastname"];
$password= $_GET["password"];
$email = $_GET["email"];

$sql1 = mysqli_query($conn,"SELECT * FROM user WHERE email like '$email'");

$sql = "INSERT INTO user (name, lastName, password, email) VALUES ('$name','$stname',md5('$password'),'$email')";
$cjs = 'true';

$res = mysqli_fetch_row($sql1);
   if($res)
   {
        $cjs = 'false';
        mysqli_close($conn);
   }
   else
   {
        if (mysqli_query($conn, $sql)) {
            $status = "Novo cliente cadastrado com sucesso";
        } else {
            $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $login = mysqli_query($conn, "SELECT * FROM user WHERE email like '$email'");
        session_start();
        while ($row = $login->fetch_assoc()) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['stname'] = $row['lastName'];
            $_SESSION['userID'] = $row['ID'];
            $_SESSION['adm'] = $row['is_adm'];
            $_SESSION['email'] = $email;
        }
        mysqli_close($conn);
        header('Location: ../home.php');
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<script>
    let res = <?php echo $cjs;?>;
    if (res == 'true'){
        alert("ok");
    }else{
        alert("E-mail já cadastrado");
        window.history.back();
    }
</script>
</html>

