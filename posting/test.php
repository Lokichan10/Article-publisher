<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root"; // ваше имя пользователя БД
$password = ""; // ваш пароль БД
$dbname = "articles_db"; // имя вашей базы данных
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$sql = "SELECT COUNT(*) AS total_rows FROM articles";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $total_rows = $row["total_rows"];

    echo $total_rows;
} else {
    echo "Ошибка запроса: " . $conn->error;
}

$conn->close();

