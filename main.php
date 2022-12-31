<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo "$sc_url_name"; ?></title><!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="keywords" content="Louvor,SHOUTcast,HTML5,Player,iTunes,API,Album,Art,Cover,Music,Web,Radio,Stream">
    <meta name="description" content="<?php echo "$sc_url_name"; ?>">
    <!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->
    <meta name="google" content="notranslate"><!-- disable google translate -->

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: <?php echo "$sc_page_background_color"; ?>;
            font-size: 15px;
            font: 15px Arial;
            color: <?php echo "$sc_font_color"; ?>;
            margin: 0px;
            padding-top: 3rem;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0px;
            padding: 0px;
        }

        a {
            color: <?php echo "$sc_font_color"; ?>;
            text-decoration: underline;
        }

        a:visited {
            color: <?php echo "$sc_font_color"; ?>;
        }

        a:active {
            color: <?php echo "$sc_font_color"; ?>;
        }

        a:hover {
            color: <?php echo "$sc_font_color"; ?>;
        }

        .text-justify {
            text-align: justify;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="#">Radio Vida Nova Casa De Oracão</a>
    </div>
</nav>

<table style="width:100%;">
    <tr>
        <td align="center">

            <!-- Begin Content -->

            <!-- Begin Player Code -->
            <?php include 'playeriframe.php'; ?>
            <!-- End Player Code -->

            <!-- End Content -->

        </td>
    </tr>
</table>

<main class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img class="img-fluid" src="img/igreja-nas-ruas.png" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <h4 class="pt-2 text-uppercase text-center">bem-vindo ao nosso site</h4>
            <p class="text-justify">A igreja casa de oração tem o prazer de anunciar a verdade que liberta, que é a
                palavra de Deus. Você é o
                nosso convidado especial.</p>
            <small class="text-justify">CNPJ:</small>
            <br>
            <small class="text-justify">05.271.824/0001-10</small>
            <br><br>
            <small class="text-justify">Endereço:</small>
            <br>
            <small class="text-justify">Travessa Antônio Ramos 55, PQ SÃO SILVESTRE, Campos dos Goytacazes.</small>
            <br>
            <br>
            <a class="text-center mx-auto" href="https://www.google.com.br/maps/place/Tv.+Ant%C3%B4nio+Ramos,+55+-+Parque+Sao+Silvestre,+Campos+dos+Goitacazes+-+RJ,+28090-515/@-21.7133166,-41.2997536,17z/data=!3m1!4b1!4m5!3m4!1s0xbdd54b2d104d4f:0x246d613965921bc2!8m2!3d-21.7133166!4d-41.2975649">
                Clique aqui para abrir o endereço no Google Mapas
            </a>
            <br>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header text-center">
                MENSAGENS EM DESTAQUE
            </h3>
            <ul class="list-group">
                <li class="list-group-item"><p class="text-uppercase text-justify">ACEITE AO SENHOR E SALVADOR JESUS
                        CRISTO. COMO SEU ÚNICO E SUFICIENTE SALVADOR DA SUA VIDA E LEIA A BIBLIA.</p></li>
                <li class="list-group-item"><p class="text-uppercase text-justify">JESUS CRISTO A NOSSA UNICA ESPERANÇA -
                        ACEITE JESUS HOJE</p></li>
                <li class="list-group-item"><p class="text-uppercase text-justify">O MEU CORAÇÃO BATE FORTE POR JESUS, MEU
                        SENHOR E MEU SALVADOR DEUS NÃO DIVIDE A SUA GLÓRIA COM NINGUÉM, NEN COM NENHUMA IMAGEM DE ESCULTURA
                        ISAÍAS 42.8</p></li>
                <li class="list-group-item"><p class="text-uppercase text-justify">DISSE-LHE JESUS EU SOU O CAMINHO A
                        VERDADE E A VIDA E NINGUÉM VEM AO PAI SE NÃO POR MIM</p></li>
                <li class="list-group-item"><p class="text-uppercase text-justify">NÃO SE ENGANE NINGUÉM ZOMBA DE DEUS, O
                        QUE UMA PESSOA PLANTAR, ISSO MESMO COLHERÁ, O AMOR AO DINHEIRO É A RAIZ DE TODOS OS MALES, JESUS TE
                        AMA, JESUS TE CHAMA</p></li>
                <li class="list-group-item"><p class="text-uppercase text-justify">JESUS ABENÇOA A FAMÍLIA E DA SAÚDE, SÓ
                        JESUS CRISTO SALVA. AGINDO DEUS QUEM IMPEDIRÁ?</p></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header text-center">
                VERSICULOS EM DESTAQUE
            </h3>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> Romanos 6:23</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        Pois o salário do pecado é a morte, mas o dom gratuito de Deus é a vida eterna em Cristo
                        Jesus, nosso Senhor.
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> João 3:16</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        "Porque Deus tanto amou o mundo que deu o seu Filho Unigênito, para que todo o que nele crer
                        não pereça, mas tenha a vida eterna.
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> João 8:32</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        E conhecerão a verdade, e a verdade os libertará".
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> 1 João 1:9</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        Se confessarmos os nossos pecados, ele é fiel e justo para perdoar os nossos pecados e nos
                        purificar de toda injustiça.
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> João 1:12</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        Contudo, aos que o receberam, aos que creram em seu nome, deu-lhes o direito de se tornarem
                        filhos de Deus,
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> Isaias 45:20</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        "Ajuntem-se e venham; reúnam-se, vocês, fugitivos das nações. São ignorantes aqueles que
                        levam de um lado para outro imagens de madeira, que oram a deuses que não podem salvar.
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fw-bolder"> Apocalipse 21:8</h4>
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                        Mas os covardes, os incrédulos, os depravados, os assassinos, os que cometem imoralidade
                        sexual, os que praticam feitiçaria, os idólatras e todos os mentirosos - o lugar deles será
                        no lago de fogo que arde com enxofre. Esta é a segunda morte".
                    </p>
                </div>
            </div>

        </div>
    </div>
</main>

</body>
</html>