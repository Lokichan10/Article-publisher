<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статьи</title>
    <style>
        .articles-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem; /* Расстояние между карточками */
        }
        .card {
            width: calc(30% - 1rem); /* Фиксированная ширина карточек */
            box-sizing: border-box;
            margin-bottom: 1rem;
            transition: color 0.3s ease, box-shadow 0.3s ease;
        }

        .empty-card {
            visibility: hidden; /* Скрывает пустые карточки, оставляя их в макете для выравнивания */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="nav">
    <a class="nav-link active" aria-current="page" href="#">Main</a>
    <a class="nav-link" href="#">Articles</a>
    <a class="nav-link" href="#">About us</a>
    <a class="nav-link" href="#">Post an article</a>
</nav>

<?php
$servername = "localhost";
$username = "root"; // замените на ваше имя пользователя БД
$password = ""; // замените на ваш пароль БД
$dbname = "articles_db"; // используем имя базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total_rows FROM articles";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $total_rows = $row["total_rows"];
} else {
    echo "Ошибка запроса: " . $conn->error;
}

$id = $total_rows - 2;

$sql = "SELECT * FROM articles WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Получение данных строки
    $row = $result->fetch_assoc();
    $title = $row["title"];
    $content = $row["content"];
    $publish_date = $row["publish_date"];

    // Вывод данных
    echo <<<EOD

        <div class="card" style="width: 70%; margin-bottom: 1rem; margin-left: 220px; margin-top: 50px;">
            <div class="card-body">
                <h1 class="card-title">$title</h1>
                <h6 class="card-subtitle mb-2 text-body-secondary">$content</h6>
                <p class="card-text">$publish_date</p>
            </div>
        </div>
EOD;

} else {
    echo "Строка с id=$id не найдена.";
}

$conn->close();
?>



<footer class="bg-dark text-white pt-5 pb-4" style="margin-top: 10px;">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">4chan podpivasnik</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus risus, finibus ornare vestibulum et, feugiat quis dui. Vivamus sit amet dolor et magna facilisis rhoncus.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                <p><a href="#" class="text-white" style="text-decoration: none;"> TheProviders</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> Creativity</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> SourceFiles</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> bootstrap 5</a></p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                <p><a href="#" class="text-white" style="text-decoration: none;"> Your Account</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> Become an Affiliate</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> Shipping Rates</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;"> Help</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                <p><i class="fas fa-home mr-3"></i> New York, NY 2333, US</p>
                <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
        </div>

        <hr class="mb-4">

        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p>&copy 2024 Copyright:
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-warning">4chanpodpivasnik.com</strong>
                    </a>
                </p>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</body>
</html>
