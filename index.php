<!DOCTYPE html>
<html lang="PT - br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <h1>Crud</h1>
        <? if (isset($_REQUEST["id"])) { ?>

            <form action="editar.php" method="REQUEST">
                <input type="text" name="id" value="<?= $_REQUEST["id"] ?>">
                <input type="text" name="nome" placeholder="Novo Nome" value="<?= $_REQUEST["nome"] ?>">
                <input type="text" name="idade" placeholder="Nova idade" value="<?= $_REQUEST["idade"] ?>"> <br>
                <button class="btn">Atualizar</button>
            </form>
            <a class="btn" href="/index.php">Cancel</a>

        <? } else { ?>
            <form action="Salvar.php" method='REQUEST'>
                <input type="text" name="nome" placeholder="Seu nome">
                <br>
                <input type="text" name="idade" placeholder="Sua idade">
                <br><br>
                <button>Cadastrar</button>
                <a href="listar.php">Listar</a>
            </form>


            </tr>
            </table>
        </div>
    <? } ?>



    </div>
</body>

</html>