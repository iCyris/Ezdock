<?php
try {  
    $pdo = new PDO("mysql:host=mysql;dbname=mysql", "root", "root");  
} catch (PDOException $e) {  
    echo 'Connection failed: ' . $e->getMessage();  
}
$pdo->query('set names utf8;');  

$sql = "select * from user";  
echo $sql . "<br>";   
$result = $pdo->query($sql);  

$rows = $result->fetchAll();  
foreach ($rows as $row) {  
    $username = $row[1];  
    $pwd = $row[2];  
    echo $username . "<br>";  
}