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
    <title>Ticket JJ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
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
                            <li><a href="generic.html">Chamados em aberto</a></li>
                            <li><a href="contact.html">Chamados encerrados</a></li>
                            <li><a href="elements.html">Alterar senha</a></li>
                            <li>
                                <a href="#">Abrir ticket</a>
                                <ul>
                                    <li><a href="ticketJJ.php">JJ Distribuidora</a></li>
                                    <li><a href="ticketSK.php">Supermercado Kauan</a></li>
                                    <li><a href="ticketJK.php">JK Distribuidora</a></li>
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
                <h2>Abrir Ticket JJ Distribuidora</h2>
                <p>Descreva minuciosamente o motivo do seu chamado.</p>
            </header>
            <div class="box">
                <form method="get" action="tickets.php">
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-12">
                            <input type="text" name="title" id="title" value="" placeholder="Titulo" />
                            <input type="hidden" name="enterprise" id="enterprise" value="JJDIST" />
                        </div>
                        <div class="col-12">
                            <label>Escolha o nível de prioridade: </label><br />
                            <label for="A">Alto</label>
                            <input type="radio" name="priority" value="A"/><br />
                            <label for="M">Médio</label>
                            <input type="radio" name="priority" value="M"/><br />
                            <label for="B">Baixo</label>
                            <input type="radio" name="priority" value="B"/>
                        </div>
                        <div class="col-12">
                            <textarea name="description" id="description" placeholder="Informe o Motivo do Chamado" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="button" name="submit" id="submit" value="Solicitar Chamado" /></li>
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
    <script src="../../js/tickets.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.dropotron.min.js"></script>
    <script src="../../assets/js/jquery.scrollex.min.js"></script>
    <script src="../../assets/js/browser.min.js"></script>
    <script src="../../assets/js/breakpoints.min.js"></script>
    <script src="../../assets/js/util.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>