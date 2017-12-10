<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

//faça um require_once para o arquivo Produto.php
//faça um require_once para o arquivo CrudProduto.php
require_once "../models/Produto.php";
require_once "../models/CrudProdutos.php";

//quando um valor da URL for igual a cadastrar faça isso
if ($_GET['action'] == 'cadastrar'){

    $produto = new Produto($_POST ['nome'],$_POST['preco'],$_POST['categoria'],$_POST['estoque']);
    $crud = new CrudProdutos();
    $crud->salvar($produto);

    //redirecione para a página de produtos
    header('location: ../views/admin/produtos.php');
}

//quando um valor da URL for igual a editar faça isso
if ($_GET['action'] == 'editar'){

    $produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['categoria'],$_POST['estoque'],$_POST['codigo']);
    $crud= new CrudProdutos();
    $crud->Atualizar($produto);

    //redirecione para a página de produtos
    header('location: ../views/admin/produtos.php');


}

//quando um valor da URL for igual a excluir faça isso
if ($_GET['action'] == 'excluir'){
       // echo"teste excluir";
    //algoritmo para excluir
        $crud = new CrudProdutos();
        $crud->ExcluirProduto($_GET['codigo']);

        header('location: ../views/admin/produtos.php?=msg=Excluido com sucesso');
    //redirecione para a página de produtos
}
if ($_GET['action'] == 'comprar'){

    $crud = new CrudProdutos();
    $msg = $crud->comprar($_POST['codigo'], $_POST['quantidade']);
    header("location: ../views/produto.php?codigo=$_POST[codigo]&msg=$msg");
}
