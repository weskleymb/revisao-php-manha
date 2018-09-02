<?php
include("conexao_db.php");
$sql = "SELECT * FROM uf";
$statement = $conexao->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Brincando com Ajax</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <fieldset>
                <legend>Endereços</legend>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="uf">UF</label>
                        <select class="form-control" name="uf" id="uf" onchange="show_cidades(this.value);">
                            <option value="" selected disabled>--SELECIONE--</option>
                            <?php foreach($rows as $row): ?>
                                <option value="<?=$row['id'];?>">
                                    <?=$row['nome'];?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="cidade" class="col-12 form-group">
                        <label for="cidade">Cidade</label>
                        <select class="form-control" name="cidade" id="cidade" onchange="show_bairros(this.value);">
                            <option value="" selected disabled>--SELECIONE--</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="cidade" class="col-12 form-group">
                        <label for="bairro">Bairro</label>
                        <select class="form-control" name="bairro" id="bairro">
                            <option value="" selected disabled>--SELECIONE--</option>
                        </select>
                    </div>
                </div>
            </fieldset>
        </div>
        <script src="js/cidade.js"></script>
        <script src="js/bairro.js"></script>
    </body>
</html>