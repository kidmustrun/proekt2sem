<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощь бездомным животным "Добрая лапа"</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header id="header" class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" alt="logo" style="height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Кто мы?</a>
                </li>
                <li class="nav-item dropdown show active">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Наши питомцы
                       </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dark" href="../pages/cats.php">Кошки</a>
                        <a class="dropdown-item" href="../pages/dogs.php">Собаки</a>
                        <a class="dropdown-item" href="../pages/birds.php">Птицы</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../pages/news.php">Наш блог</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../pages/drawings.php">Конкурс рисунков</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../pages/contacts.php">Наши контакты</a>
                </li>
            </ul>
        </div>
    </header>
   <main>
  
            

<?php


$mysqli = mysqli_connect('std-mysql', 'std_933', 'Apokalipsis', 'std_933');
if( mysqli_connect_errno() ) // если при подключении к серверу произошла ошибка
{
// выводим сообщение и принудительно останавливаем РНР-программу
echo 'Ошибка подключения к базе данных: '.mysqli_connect_error();
exit();
}

// если были переданы данные для изменения записи в таблице
if( isset($_POST['button-edit']))
{
// формируем и выполняем SQL-запрос на изменение записи с указанным id
$sql_res=mysqli_query($mysqli, 
'UPDATE feedback SET
feedback="'.htmlspecialchars($_POST['feedback']).'"
WHERE id='.$_POST['id']); 
if( mysqli_errno($mysqli) )
echo ' <div class="hero hero-sad" id="hero">
<div class="hero-text container"><h1>Отзыв не отредактирован :(</h1><h3>Произошла ошибка</h3><a class="btn btn-outline-light" href="../index.php" role="button">На главную</a>';
else // если все прошло нормально – выводим сообщение
echo ' <div class="hero hero-success" id="hero">
<div class="hero-text container"><h1>Отзыв отредактирован!</h1><a class="btn btn-outline-light" href="../index.php" role="button">На главную</a>';
}// и выводим сообщение об изменении данных


?>