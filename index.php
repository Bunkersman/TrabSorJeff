<?php

require_once "app/models/CrudProdutos.php";
$crud = new CrudProdutos();

$listaProdutos = $crud->getProdutos();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/ifc-style.css">

    <title>Motores Lendarios</title>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/imagens/logo.png" alt="" width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/views/admin/produtos.php">Área do admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron Header -->
<header class="jumbotron my-4 home-banner">
    <div class="container">
        <h1 class="display-3">Motores Lendarios!</h1>
        <p class="lead">Compre Seu Super carro Hj mesmo</p>
<!--        <a href="#" class="btn btn-primary btn-lg">só hoje!</a>-->
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Page Features -->
    <div class="row text-center">

        <?php foreach($listaProdutos as $produto): ?>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?=$produto->nome ?></h4>
                        <p class="card-text"><?=$produto->preco ?></p>
                        <p class="card-text"><?=$produto->estaDisponivel() ?></p>

                        <p class="card-text">Falta Colocar um texto e chamalo por Php Aki</p>
                    </div>
                    <div class="card-footer">
                        <a href="app/views/produto.php?codigo=<?= $produto->codigo ?>" class="btn btn-ifc">Comprar</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>
