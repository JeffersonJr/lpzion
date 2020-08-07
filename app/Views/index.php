<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Zion - Siscomex</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sistema Zion">
    <meta name="keywords" content="Zion, Tecnologia, Desenvolvimento de sofware, softhouse">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../public/favicon.ico"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/flaticon.css">
    <link rel="stylesheet" href="src/css/magnific-popup.css">
    <link rel="stylesheet" href="src/css/style.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="src/adminlte/css/adminlte.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="app">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="src/img/logo.png" alt="" style="width: 250px;">
            <h2 class="text-success">Carregando.....</h2>
        </div>
    </div>
    <!-- Page Preloder end-->

    <!-- Page header -->
    <div class="page-top-section">
        <div class="hero-content">
            <div class="hero-center">
                <img src="src/img/logo-white.png" alt="logo-zion">
                <p style="color: #FFFFFF">Acessos aos Sistemas de Importação, Exportação e Desembaraço do Governo
                    Federal,<br> Receita Federal e Órgãos Competentes</p>
            </div>
        </div>
        <!-- slider -->
        <div class="item hero-item" data-bg="src/img/01.jpg" style="background-attachment: fixed"></div>
    </div>
    <!-- Page header end-->

    <!-- content section -->

    <!-- content section end -->

    <!-- About section -->
    <div class="about-section">

    <div class="row" style="margin: 10px">
        <div class="col-md-1 order-md-1">
        </div>
        <div class="col-md-6 order-md-1">
            <!-- card section -->
            <?= $this->include('about') ?>
            <!-- card section end -->

            <!-- Shotcurts section -->
            <?= $this->include('shotcurt') ?>
            <!-- Shotcurts section end-->
        </div>
        <div class="col-md-4 order-md-2 mb-4">
            <!-- News section -->
            <?= $this->include('/feed') ?>
            <!-- News section end -->
        </div>
    </div>

        <!-- Footer section -->
        <footer class="footer-section">
            <h2>2020 Todos os direitos reservados. Projetado por
                <a href="https://jeffersonjunior.com.br" target="_blank">Jefferson Junior Desenvolvedor Web</a>
            </h2>
        </footer>
        <!-- Footer section end -->

    </div>
    <!-- About section end -->

</div>

<!--====== Javascripts & Jquery ======-->
<script src="src/js/vue/dist/vue.min.js"></script>
<script src="src/js/jquery-2.1.4.min.js"></script>
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/magnific-popup.min.js"></script>
<script src="src/js/circle-progress.min.js"></script>
<script src="src/js/main.js"></script>

<!-- AdminLTE App -->
<script src="src/adminlte/js/adminlte.min.js" type="text/javascript"></script>

<!-- VueJs -->
<script>
    vm = new Vue({
        el: '#app',
        data: {
            itens:<?= json_encode($itens) ?>
        }
    })
</script>

</body>
</html>
