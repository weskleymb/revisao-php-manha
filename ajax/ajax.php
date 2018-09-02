<?php
include("conexao_db.php");
$sql = "SELECT * FROM user_tb";
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
    </head>
    <body>
        <form>
            <select name="users" onchange="showUser(this.value)">
                <option value="" selected disabled>Escolha...</option>
                <?php foreach($rows as $row): ?>
                    <option value="<?=$row['id'];?>">
                        <?=$row['firstname'];?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
        <br>
        <div id="txtHint">Informação da pessoa...</div>
        <script src="ajax.js"></script>
    </body>
</html>
