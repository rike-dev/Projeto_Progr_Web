<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "create_crud";
$port = 3306;

$conn;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

return $conn;



function InsertData($name, $age, $gender, $martStatus, $depart, $role, $salary, $cocType){
    Connection();

    $sql = "INSERT INTO FUNC_INFO (NAME_FUNC, AGE, GENDER, MARTSTATUS, DEPT, ROL_FUNC, SALARY, TYP_CONTCT) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sisssdssi", $name, $age, $gender, $martStatus, $depart, $role, $salary, $cocType);
    
        if ($stmt->execute()) {
            $stmt->close(); 
            return true;
        } else {
            return "Erro na atualização: " . $stmt->error;
        }
    }
    
    $stmt->close();
    return "Erro na preparação da consulta: " . $conn->error;
}
?>
