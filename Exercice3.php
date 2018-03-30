<?php

$make = $_POST["make"];
$model = $_POST["model"];
$year = $_POST["year"];
$color = $_POST["color"];

//execute the following code to create entry db

try {
    $conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE vehicles";
    $conn->exec($sql);
    echo "success<br>";
}
catch(PDOException $e){
    echo $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicles", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE vehicle (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(60) NOT NULL,
    model VARCHAR(60) NOT NULL,
    year INT(4) NOT NULL,
    color VARCHAR(30) NOT NULL
    )";
    $conn->exec($sql);
    echo "success<br>";
}
catch(PDOException $e){
    echo $e->getMessage();
}

//ignore previous code to just enter the values from the form

try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicles", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO vehicle (make, model, year, color)
    VALUES($make, $model, $year, $color)";
    $conn->exec($sql);
    echo "success<br>";
}
catch(PDOException $e){
    echo $e->getMessage();
}

$conn = null;


?>