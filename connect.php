<?php
try {
$con = new PDO('pgsql:dbname=patrimonio;host=localhost;user=postgres;password=postgres');
} catch (PDOException $e) {
    echo "Problemas na conexão com o banco de dados!</br>";
    echo "Erro:" . $e->getMessage();
    die();
}
?>

