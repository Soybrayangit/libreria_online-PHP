<?php

// Conexion general con la base de datos

$host = 'sql301.infinityfree.com'; 
$db = 'if0_36982912_dblibreria'; 
$user = 'if0_36982912'; 
$pass = 'QnkOBUXiwmXD'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión a la base de datos: ' . $e->getMessage());
}
?>
