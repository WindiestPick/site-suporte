<?php 
include_once("./connect.php");
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$stname = $_SESSION['stname'];
$id = $_SESSION['userID'];
$adm = $_SESSION['adm'];

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE `status` = 1");

?>



<!DOCTYPE HTML>

<html>

<head>
    <title>Gerenciador de Chamados</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="home.php">Suporte Grupo JJ Distribuidora</a></h1>
            <nav id="nav">
                <ul>
                    <li><?php echo $name . " " . $stname?></li>
                    <li><a href="home.php">Menu Principal</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Opções</a>
                        <ul>
                            <li><a href="./chamadosUser/meusChamados.php">Meus Chamados</a></li>
                            <li><a href='./chamadosSuporte/meusAtendimentos.php'>Meus Atendimentos</a></li>
                            <li><a href="./login_register/alterarSenha.php">Alterar senha</a></li>
                            <li>
                                <a href="#">Abrir ticket</a>
                                <ul>
                                    <li><a href="./tickets/ticketJJ.php">JJ Distribuidora</a></li>
                                    <li><a href="./tickets/ticketSK.php">Supermercado Kauan</a></li>
                                    <li><a href="./tickets/ticketJK.php">JK Distribuidora</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="gen container">
            <header>
                <h2>Gerenciador de Chamados</h2>
            </header>
            <div class="box">
                <div id="objeto">
                        <?php 
                        if ($result->num_rows > 0) {
                            echo '<table>';
                            echo '<tr>';
                            echo '<td>Ticket</td>';
                            echo '<td>Empresa</td>';
                            echo '<td>Titulo do chamado</td>';
                            echo '<td>Prioridade</td>';
                            echo '<td></td>';
                            echo '</tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                //id, valor, quantidade, nome, fornecedor
                                echo '<tr>';
                                echo "<td>" . $row["ID"] . "</td>";
                                echo "<td>" . $row["enterprise"] . " </td> ";
                                echo "<td>" . $row["title"] . " </td> ";
                                echo "<td>" . $row["priority"] . "</td>";
                                echo "<td><a href='./atendimento.php?idcha=".$row["ID"]."'>Informações<a>";
                                echo '</tr>';
                            }
                            echo "</table>";
                        }else{
                            echo 'Sem dados a serem informados';
                        }
                        $conn->close();
                        ?>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Todos os direitos reservados a.</li>
                <li><a href="https://github.com/Kalebeadv">Extreme go horse enterprise</a></li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.dropotron.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>