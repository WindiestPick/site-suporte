<?php 
include_once("../connect.php");
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$stname = $_SESSION['stname'];
$id = $_SESSION['userID'];
$adm = $_SESSION['adm'];

$idcha = $_GET["idcha"];

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE `ID` = $idcha");


while($row = $result->fetch_assoc()){
    $user = mysqli_query($conn, "SELECT * FROM user WHERE ID = " . $row["userID"]);
}

$nameUser;
while($row = $user->fetch_assoc()){
    $nameUser = $row["name"] . " " . $row["lastName"];
    $idUser = $row["ID"];
}

?>



<!DOCTYPE HTML>

<html>

<head>
    <title>Gerenciador de Chamados</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="icon" type="image" href="../../images/logo suporte.png">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="../home.php">Suporte Grupo JJ Distribuidora</a></h1>
            <nav id="nav">
                <ul>
                    <li><?php echo $name . " " . $stname?></li>
                    <li><a href="../home.php">Menu Principal</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="gen container">
            <header>
                <h2>Gerenciador de Chamados</h2>
            </header>
            <div class="box box3">
                <div id="objeto">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM tickets WHERE ID = $idcha");
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            //id, title, enterprise, priority, description
                            echo "<table>";
                            echo "<tr>";
                            echo "<td>Chamado</td>";
                            echo "<td>Empresa</td>";
                            echo "<td>Nome do Usuário</td>";
                            echo "<td>Prioridade do Chamado</td>";
                            echo "</tr>";
                            echo "<tr id='tab1'>";
                            echo "<td>" . $row["ID"] . "</td>";
                            echo "<td>" . $row["enterprise"] . " </td> ";
                            echo "<td>" . $nameUser . "</td>";
                            if ($row["priority"] == "A"){
                                echo "<td>Alta</td>";
                            }elseif ($row["priority"] == "M"){
                                echo "<td>Média</td>";
                            }elseif ($row["priority"] == "B"){
                                echo "<td>Baixa</td>";
                            }
                            echo "</tr>";
                            echo "</table>";

                            echo "<h2 class='inmid'>" . $row["title"] . " </h2> ";
                            echo "<h4>Descrição:</h4> ";
                            echo "<p class='indown'>" . $row["description"] . "</p>";
                            $status = $row["status"];
                            if($row["status"] == 3){
                                echo "<h4>Solução:</h4>";
                                echo "<p class='indown'>" . $row["solution"] . "</p>";
                            }
                        }
                    }else{
                        echo 'Sem dados a serem informados';
                    }
                    $conn->close();
                    ?>
                </div>
                <div>
                    <?php
                        if($status == 2){
                            echo '<a id="botao" class="button alt tbtn" href="../tickets/fecharTickets.php?idcha='.$idcha.'">Fechar Chamado</a>';
                        }
                    ?>
                    <a id="botao" class="button alt tbtn" href="./meusAtendimentos.php?sts=2">Voltar</a>
                    <input type="hidden" value='<?php echo $idcha;?>' id="chamado" />
                    <input type="hidden" value='<?php echo $id;?>' id="usuario"/>
                </div>
            </div>
            <?php
                if($status == 2){
                    echo '<div>';
                    echo '<iframe src="../chat/index.php?idcha='.$idcha.'&mensagem=null" height="250px" width="100%" title="Iframe Example"></iframe>';
                    echo '</div>';
                }
            
            ?>
            
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
    <script src="../../js/atendimentoSuporte"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.dropotron.min.js"></script>
    <script src="../../assets/js/jquery.scrollex.min.js"></script>
    <script src="../../assets/js/browser.min.js"></script>
    <script src="../../assets/js/breakpoints.min.js"></script>
    <script src="../../assets/js/util.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>