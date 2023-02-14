<?
include "conexao.php";

$id = $_REQUEST["id"];

mysqli_query($conn, "DELETE FROM Pessoas WHERE id = $id");



header('Location: /listar.php');