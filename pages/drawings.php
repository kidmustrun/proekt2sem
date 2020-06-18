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
        <a class="navbar-brand" href="../main.php"><img src="../img/logo.png" alt="logo" style="height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../main.php">Кто мы?</a>
                </li>
                <li class="nav-item dropdown show active">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Наши питомцы
                       </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dark" href="cats.php">Кошки</a>
                        <a class="dropdown-item" href="dogs.php">Собаки</a>
                        <a class="dropdown-item" href="birds.php">Птицы</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="news.php">Наш блог</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="drawings.php">Конкурс рисунков</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contacts.php">Наши контакты</a>
                </li>
            </ul>
        </div>
    </header>
   <main>
   <div class="hero hero-drawings" id="hero">
        <div class="hero-text container">
            <h1>Конкурс рисунков</h1>
        </div>
    </div>
    <div class="container flex">
    <?php 
   // главное меню
  // подключаем модуль с библиотекой функций
   // если в параметрах не указана текущая страница – выводим самую первую
   if( !isset($_GET['pg']) || $_GET['pg']<0 ) $_GET['pg']=0;
    if( file_exists($_GET['p'].'.php') ) { include $_GET['p'].'.php'; }
    function getDrawingsList($page)
    {
     // осуществляем подключение к базе данных
     $mysqli = mysqli_connect('std-mysql', 'std_933', 'Apokalipsis', 'std_933');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
     // формируем и выполняем SQL-запрос для определения числа записей
     $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM std_933.drawings');
    // проверяем корректность выполнения запроса и определяем его результат
     if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
     if( !$TOTAL=$row[0] ) // если в таблице нет записей
     return 'Нет данных'; // возвращаем сообщение
     $PAGES = ceil($TOTAL/9);// вычисляем общее количество страниц
     if( $page>=$PAGES ) // если указана страница больше максимальной
    $page=$TOTAL-1; // будем выводить последнюю страницу
     $diapazon=$page*9;
    $sql='SELECT * FROM drawings LIMIT '.$diapazon.', 9';
     $sql_res=mysqli_query($mysqli, $sql);
     $ret=''; // строка с будущим контентом страницы
     while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
    {
     $ret.='<div class="card text-center"><img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" /><div class="card-body"><div class="card-title">'.$row['kid'].'</div><div class="card-text"><p>'.$row['name'].'</p><a href="#" class="btn btn-warning">Проголосовать</a></div></div></div>';
    }
    $ret.='</div>'; // заканчиваем формирование таблицы с контентом
     if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
     {
     $ret.='<ul class="pagination justify-content-center">'; // блок пагинации
     for($i=0; $i<$PAGES; $i++) // цикл для всех страниц пагинации
     if( $i != $page ) // если не текущая страница
     $ret.='<li class="page-item"><a class="page-link" href="?p=viewer&pg='.$i.'"> '.($i+1).'</a></li>';
     else // если текущая страница
     $ret.=' <li class="page-item active" aria-current="page"><span class="page-link">'.($i+1).'</span></li>';
     $ret.='</ul>';
     }
     return $ret; // возвращаем сформированный контент
    }
     // если запрос выполнен некорректно
    return 'Неизвестная ошибка'; // возвращаем сообщение
    } 
echo getDrawingsList($_GET['pg']);
?>
</div>
    
   </main>
   <footer class="bg-dark text-light">
        <ul>
            <li>Сообщество помощи бездомным животным "Добрая лапа",</li>
            <li>все права защищены.</li>
            <li>Сайт: <a href="https://vk.com/kidmustrun">Ирина Громова</a></li>
        </ul>
    </footer>
</body>
</html>