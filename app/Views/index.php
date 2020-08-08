<!DOCTYPE html>
<html lang="pt-br" style="background-color: #2BE6AB;">
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
<style>
    a {
        color: #333333;
    }
</style>
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

    <nav class="fixed-top mt-1 mr-1">
        <div class="col-12">
            <div class="col-2 offset-10">
                <form class="float-right">
                    <a href="http://novaversao.website/zion" target="_blank" class="text-white">Página inicial</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Page header -->
    <?= $this->include('header') ?>
    <!-- Page header end-->

    <!-- content section -->

    <!-- content section end -->

    <!-- About section -->
    <div class="about-section">

        <div class="row" style="margin: 10px">
            <div class="col-md-6 order-md-1 offset-1">
                <!-- card section -->
                <?= $this->include('about') ?>
                <!-- card section end -->

                <!-- Shotcurts section -->
                <?= $this->include('shotcurt') ?>
                <!-- Shotcurts section end-->

                <!-- Contact section -->
                <?= $this->include('contact') ?>
                <!-- Contact section end -->
            </div>
            <div class="col-md-4 order-md-2 mb-4">
                <!-- News section -->
                <?= $this->include('/feed') ?>
                <!-- News section end -->
            </div>
        </div>

        <!-- Footer section -->
        <?= $this->include('footer') ?>
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
            itens:<?= json_encode($itens) ?>,
            exportacao: ,
            importacao: ,
            sistema: ,
        }
    })

    /* Back to top */
    $(document).ready(function () {

        //Verifica se a Janela está no topo
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Onde a mágia acontece! rs
        $('.scrollToTop').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });

    });

</script>

</body>
</html>
