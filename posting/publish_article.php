<?php
$servername = "localhost";
$username = "root"; // замените на ваше имя пользователя БД
$password = ""; // замените на ваш пароль БД
$dbname = "articles_db"; // замените на имя вашей БД

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$title = $_POST['title'];
$content = $_POST['content'];

// Защита от SQL-инъекций
$title = $conn->real_escape_string($title);
$content = $conn->real_escape_string($content);

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><b>".$title."</b></h1>";
    echo "<p>".$content."</p>";
    echo "Данные успешно добавлены";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
