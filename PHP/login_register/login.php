<?PHP
include_once("../connect.php");
session_start();
session_destroy();


$password= $_GET["password"];
$email = $_GET["email"];

$login = mysqli_query($conn, "SELECT * FROM user WHERE email like '$email' AND password like md5('$password')");


$res = mysqli_fetch_row($login);
   if($res)
   {
      $login = mysqli_query($conn, "SELECT * FROM user WHERE email like '$email'");
      session_start();
      while ($row = $login->fetch_assoc()) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['stname'] = $row['lastName'];
        $_SESSION['userID'] = $row['ID'];
        $_SESSION['adm'] = $row['is_adm'];
        $_SESSION['email'] = $email;
      }
      
      $_SESSION['email'] = $email;
      header('location: ../home.php');
   }

   else
   {
     header('location: ../../html/login.html');
   }

mysqli_close($conn);


// http://localhost:7070/sites/site-chamado/html/login.html?email=gustavo2%40gmail.com&password=1234
?>

