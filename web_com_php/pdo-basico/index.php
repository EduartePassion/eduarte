<?php
  
$dsn = 'mysql:host=localhost;dbname=presentes';
$user = 'eduarte';
$pass = '';

try {
    
    $pdo = new PDO($dsn, $user, $pass);

    
} catch (PDOException $exc) {
    echo 'Erro: '.$ex->getMessage();
} 
    




