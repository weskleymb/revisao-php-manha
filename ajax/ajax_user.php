<?php
include("conexao_db.php");
$id = intval($_GET['q']);
$sql = "SELECT * FROM user_tb WHERE id = :id";
$statement = $conexao->prepare($sql);
$statement->bindParam(':id', $id);
$statement->execute();
$rows = $statement->fetchAll();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ajax.css">
    </head>
    <body>
        <select>
            <?php foreach($rows as $row): ?>
                <option value="<?=$row['id'];?>">
                    <?=$row['age'];?>
                </option>
            <?php endforeach; ?>
        </select>
    </body>
</html>
