<?php 

session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$stname = $_SESSION['stname'];
$id = $_SESSION['userID'];
$adm = $_SESSION['adm'];

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Página Principal</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="icon" type="image" href="../images/logo suporte.png">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="home.php">Suporte Grupo JJ Distribuidora</a></h1>
            <nav id="nav">
                <ul>
                    <li><?php echo $name . " " . $stname?></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Opções</a>
                        <ul>
                            <li><a href="./chamadosUser/meusChamados.php">Meus Chamados</a></li>
                            <?php 
                                if($adm == 1){
                                    echo "<li><a href='./chamadosSuporte/meusAtendimentos.php?sts=2'>Meus Atendimentos</a></li>";
                                    echo "<li><a href='./geren.php'>Abrir Gerenciador</a></li>";
                                }
                            ?>
                            <li><a href="./login_register/alterarSenha.php">Alterar senha</a></li>
                            <li>
                                <a href="#">Abrir ticket</a>
                                <ul>
                                    <li><a href="./tickets/ticketJJ.php">JJ Distribuidora</a></li>
                                    <li><a href="./tickets/ticketSK.php">Supermercado Kauan</a></li>
                                    <li><a href="./tickets/ticketJK.php">JK Distribuidora</a></li>
                                </ul>
                            </li>
                            <li>
                                <a id="logout">Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <section id="main" class="container">
            <div class="row">
                
                <div class="col-6 col-12-narrower">
                    <section class="box special">
                        <span class="image featured"><img src="../images/pic02.jpg" alt="" /></span>
                        <h3><strong>Abrir ticket referente a<br>JJ Distribuidora</strong></h3>
                        <ul class="actions special">
                            <li><a href="./tickets/ticketJJ.php" class="button alt tbtn">Abrir Ticket</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-narrower">

                    <section class="box special">
                        <span class="image featured"><img src="../images/pic03.jpg" alt="" /></span>
                        <h3><strong>Abrir ticket referente a<br>Supermercado Kauan</strong></h3>
                        <ul class="actions special">
                            <li><a href="./tickets/ticketSK.php" class="button alt tbtn">Abrir Ticket</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-narrower">

                    <section class="box special">
                        <span class="image featured"><img src="../images/pic07.jpg" alt="" /></span>
                        <h3><strong>Abrir ticket referente a<br>JK Distribuidora</strong></h3>
                        <ul class="actions special">
                            <li><a href="./tickets/ticketJK.php" class="button alt tbtn">Abrir Ticket</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-narrower" id="divadm">
                    <input type="hidden" value='<?php echo $adm;?>' id='isadm'/>
                </div>
            </div>

        </section>
        <!-- Footer -->
        <footer id="footer">
            <p hidden id="exit"></p>
            <ul class="copyright">
                <li>&copy; Todos os direitos reservados a.</li>
                <li><a href="https://github.com/Kalebeadv">Extreme go horse enterprise</a></li>
            </ul>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="../js/home.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.dropotron.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>