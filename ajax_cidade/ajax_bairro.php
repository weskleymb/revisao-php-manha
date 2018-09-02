<?php
include("conexao_db.php");
$id_cidade = intval($_GET['cidade']);
$sql = "SELECT * FROM bairro WHERE id_cidade = :id_cidade";
$statement = $conexao->prepare($sql);
$statement->bindParam(':id_cidade', $id_cidade);
$statement->execute();
$rows = $statement->fetchAll();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <label for="bairro">Bairro</label>
        <select  class="form-control" name="bairro" id="bairro">
            <option value="" selected disabled>--SELECIONE--</option>
            <?php foreach($rows as $row): ?>
                <option value="<?=$row['id'];?>">
                    <?=$row['nome'];?>
                </option>
            <?php endforeach; ?>
        </select>
    </body>
</html>
