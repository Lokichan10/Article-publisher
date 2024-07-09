<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Публикация статьи</title>
    <style>
        .form-control {
            width: 300px;
            margin-bottom: 10px;
        }
        .btn-success {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<center style="margin-top: 200px;">
    <form id="articleForm" action="publish_article.php" method="post" style="width: 300px;">
        <input type="text" name="title" placeholder="Введите заголовок" class="form-control"><br>
        <textarea name="content" placeholder="Введите содержание статьи" class="form-control" rows="5" style="margin-top: -30px;"></textarea><br>
        <input type="button" value="Опубликовать" class="btn btn-su btn-success" onclick="validateForm()" style="margin-top: -30px;">
    </form>
</center>
<script>
    function validateForm() {
        var title = document.forms["articleForm"]["title"].value;
        var content = document.forms["articleForm"]["content"].value;

        if (title == "" || content == "") {
            alert("Пожалуйста, заполните все поля.");
            return false;
        } else {
            document.getElementById("articleForm").submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


