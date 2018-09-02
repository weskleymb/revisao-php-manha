<?php
include("conexao_db.php");
$id_uf = intval($_GET['uf']);
$sql = "SELECT * FROM cidade WHERE id_uf = :id_uf";
$statement = $conexao->prepare($sql);
$statement->bindParam(':id_uf', $id_uf);
$statement->execute();
$rows = $statement->fetchAll();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <label for="cidade">Cidade</label>
        <select  class="form-control" name="cidade" id="cidade" onchange="show_bairros(this.value);">
            <option value="" selected disabled>--SELECIONE--</option>
            <?php foreach($rows as $row): ?>
                <option value="<?=$row['id'];?>">
                    <?=$row['nome'];?>
                </option>
            <?php endforeach; ?>
        </select>
    </body>
</html>
