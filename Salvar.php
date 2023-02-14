<?

include "conexao.php";

$n = $_REQUEST['nome'];
$i = $_REQUEST['idade'];




// Salvar os nomes 
mysqli_query($conn, "INSERT INTO Pessoas (nome, idade) VALUES ('$n', $i)");
header('Location: /listar.php');