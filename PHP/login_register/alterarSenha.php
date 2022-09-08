<?php 

session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$stname = $_SESSION['stname'];
$id = $_SESSION['userID'];
$adm = $_SESSION['adm']


?>



<!DOCTYPE HTML>

<html>

<head>
    <title>Alterar Senha</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <script src="../../js/register.js"></script>
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
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Opções</a>
                        <ul>
                            <li><a href="../chamadosUser/meusChamados.php">Meus Chamados</a></li>
                            <?php 
                                if($adm == 1){
                                    echo "<li><a href='../chamadosSuporte/meusAtendimentos.php?sts=2'>Meus Atendimentos</a></li>";
                                    echo "<li><a href='../geren.php'>Abrir Gerenciador</a></li>";
                                }
                            ?>
                            <li>
                                <a href="#">Abrir ticket</a>
                                <ul>
                                    <li><a href="../tickets/ticketJJ.php">JJ Distribuidora</a></li>
                                    <li><a href="../tickets/ticketSK.php">Supermercado Kauan</a></li>
                                    <li><a href="../tickets/ticketJK.php">JK Distribuidora</a></li>
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

        <!-- Main -->
        <section id="main" class="container medium">
            <header>
                <h2>Alterar Senha</h2>
                <p>Utilize uma senha que você possa lembrar</p>
            </header>
            <div class="box">
                <form method="get" action="./senha.php">
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-12">
                            <input type="password" name="pass" id="pass" value="" placeholder="Digite a Senha Atual" />
                        </div>
                        <div class="col-12">
                            <input type="password" name="newPass" id="newPass" value="" placeholder="Digite a Nova Senha" />
                        </div>
                        <div class="col-12">
                            <input type="password" name="confPass" id="conf_pass" value="" placeholder="Confime a Nova Senha" />
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="button" value="Confirmar" id="submit" onclick="register()" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
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
    <script src="../../js/sair.js"></script>
    <script src="../../js/alterPass.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.dropotron.min.js"></script>
    <script src="../../assets/js/jquery.scrollex.min.js"></script>
    <script src="../../assets/js/browser.min.js"></script>
    <script src="../../assets/js/breakpoints.min.js"></script>
    <script src="../../assets/js/util.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>