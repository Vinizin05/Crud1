<?
include "conexao.php";

// Salvar os nomes 
$result = mysqli_query($conn, "SELECT id, nome, idade FROM Pessoas");

$clientes = array();
while ($linha = mysqli_fetch_array($result)) {
    $clientes[] = array(
        "id" => (int) $linha["id"],
        "nome" => $linha["nome"],
        "idade" => (int) $linha["idade"],
    );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Clientes</h1>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
            <th>ações</th>
        </tr>
        <?php foreach ($clientes as $c): ?>
            <tr>
                <td>
                    <?= $c["id"] ?>
                </td>
                <td>
                    <?= $c["nome"] ?>
                </td>
                <td>
                    <?= $c["idade"] ?>
                </td>
                <td>
                    <a href="Deletar.php?id=<?= $c["id"] ?>">apagar</a>
                    <a href="index.php?id=<?= $c["id"] ?>&nome=<?= $c["nome"] ?>&idade=<?= $c["idade"] ?>">editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Menu</a>
</body>

</html>