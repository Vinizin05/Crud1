<?
include "conexao.php";

$id  = $_REQUEST["id"];
$nome  = $_REQUEST["nome"];
$idade  = $_REQUEST["idade"];

$query = "UPDATE pessoas SET nome = '$nome', idade=$idade WHERE id = $id";

mysqli_query($conn, $query);

header("location:/listar.php");




?>