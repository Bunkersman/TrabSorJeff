<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA A PAGINA -->
<?php require_once "cabecalho.php";
    require_once "../../models/CrudProdutos.php";

    $crud = new CrudProdutos();

    $produto = $crud->getProduto($_GET['codigo']);


?>

<h2>Editar Produtos</h2>
<form action="../../controllers/controladorProduto.php?action=editar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="nome" value="<?=$produto->nome ?>" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" value="<?=$produto->preco ?>" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="estoque" value="<?=$produto->estoque ?>" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option <?php if($produto->categoria== "Padrão Alto")echo "selected"?> >Padrão Alto</option>
            <option <?php if($produto->categoria== "Padrão Medio")echo "selected"?>>Padrão Medio</option>
            <option <?php if($produto->categoria== "Padrão Baixo")echo "selected"?>>Padrão Baixo</option>
        </select>
    </div>

    <input type="hidden" name="codigo" value="<?=$produto->codigo?>">

    <button type="submit" class="btn btn-primary">Editar</button>

</form>
<?php require_once "rodape.php" ?>