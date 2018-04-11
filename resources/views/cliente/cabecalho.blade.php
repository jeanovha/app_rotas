<?php
$titulo = '';

?><!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">
    <nav class="nav-link navbar-expand bg-dark">

        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="../home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="/clientes/pesquisar">Pesquisar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="/clientes/inserir">Inserir</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active container" id="home">...</div>
            <div class="tab-pane container" id="menu1">...</div>
            <div class="tab-pane container" id="menu2">...</div>
        </div>

    </nav>


    <section>
    @yield('conteudo')
</section>

</div>
</body>
</html>



