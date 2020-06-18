<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощь бездомным животным "Добрая лапа"</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header id="header" class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <a class="navbar-brand" href="main.php"><img src="img/logo.png" alt="logo" style="height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Кто мы?</a>
                </li>
                <li class="nav-item dropdown show active">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Наши питомцы
                       </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item dark" href="pages/cats.php">Кошки</a>
                        <a class="dropdown-item" href="pages/dogs.php">Собаки</a>
                        <a class="dropdown-item" href="pages/birds.php">Птицы</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/news.php">Наш блог</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/drawings.php">Конкурс рисунков</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pages/contacts.php">Наши контакты</a>
                </li>
                
            </ul>
        </div>
    </header>
   <main>
   <div class="hero" id="hero">
        <div class="hero-text container">
            <h1>Всероссийское сообщество помощи бездомным животным</h1>
            <h3>Уже 10 лет вместе!</h3>
        </div>
    </div>
    <div class="content container">
        <h1>Сообщество "Добрая лапа"</h1>
        <p>Вот уже 10 лет мы помогаем нашим маленьким друзьям обрести новый дом, заботу, и любовь! Спасибо, что Вы с нами!</p>
        <?php 
        $mysqli = mysqli_connect('std-mysql', 'std_933', 'Apokalipsis', 'std_933');
        echo '<p>Всего у нас: </p><ul>';
 
        
         
        $sql=mysqli_query($mysqli, 'SELECT * FROM cats');
            $sql_res=mysqli_num_rows($sql); // строка с будущим контентом страницы
           $ret.='<li>'.$sql_res.' кошек;</li>';
           $sql=mysqli_query($mysqli, 'SELECT * FROM dogs');
            $sql_res=mysqli_num_rows($sql); // строка с будущим контентом страницы
           $ret.='<li>'.$sql_res.' собак;</li>';
           $sql=mysqli_query($mysqli, 'SELECT * FROM birds');
            $sql_res=mysqli_num_rows($sql); // строка с будущим контентом страницы
           $ret.='<li>и '.$sql_res.' птиц.</li>';
           $ret.='</ul>';
           echo $ret;
        
        ?>
        <img src="img/1.jpg" alt='кошка и собака на руках'>
        <h1>Кто мы?</h1>
        <p>Сообщество "Добрая лапа" - это добровольная некоммерческая организация, помогающая бездомным животным обрести добрых хозяев. Все фотографии животных на сайте сделаны нашими волонтерами, которым мы доверяем работу по поиску. Будущий хозяин должен быть не младше 25 лет, с постоянным местом жилья и работы, а так же порядочным и добрым человеком. Все это гарантирует, что маленький хвостик попадет в добрые и любящие руки!</p>
        <img src="img/2.jpg" alt='собака и люди'>
        <h1>Могу ли я чем-то помочь?</h1>
    <p>Да! Ряды наших волонтеров всегда рады пополнению, кроме того, если Вы сами обнаружили бездомное животное, вы можете связаться с нами через <a href="#form">форму</a> и мы обязательно скоординируем Вас дальше!</p>
    <img src="img/3.jpg" alt='собака и люди'>
    <h1>Кто такие волонтёры?</h1>
    <p>Волонтёры - обычные люди, которые в свободное время занимаются поиском и пристраиванием бездомных животных. За счёт средств сообщества животные получают необходимый уход и лекарства, и поступают на руки хозяевам в здоровом виде. Стать волонтёром может любой желающий, прошедший отбор. Основные требования: возраст не младше 25 лет, постоянное жилье и доход, доброе и отзывчивое сердце. Работа волонтёра добровольная, за нее не платят деньги, но без этих ребят тысячи животных просто не смогут спастись!</p>
    <img src="img/4.jpg" alt='хомяк на руках'>
    <h1>Отзывы</h1>
    <?php 
     if( !isset($_GET['pg']) || $_GET['pg']<0 ) $_GET['pg']=0;
    include 'moduls/feedback.php';
    ?>
    <form class="form-styles bg-success clearfix" name="form_add" method="post" action="moduls/add.php">
<div class="form-group">
<label for="name">Ваше имя</label>
<input  class="form-control" type="text" name="name" id="name" placeholder="Имя">
<label for="feedback">Ваш отзыв</label>
<textarea  class="form-control" name="feedback" placeholder="Отзыв"></textarea>
</div>

<input type="submit" name="button" class="btn btn-outline-light float-right" value="Добавить отзыв">
</form>
   
    <a name="form"></a>
    <h2>Присоединиться к "Доброй лапе"</h2>
                <form class="form-styles bg-warning clearfix">
                    <div class="form-group">
                        <label for="Email">Ваш E-mail</label>
                        <input type="email" class="form-control" id="Email" placeholder="Введите email">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">Согласен получать рассылку по почте о событиях сообщества</label>

                    </div>
                    <button type="submit" class="btn btn-outline-dark float-right">Подтвердить</button>
                </form>
</div>
    
   </main>
   <footer class="bg-dark text-light">
        <ul>
            <li>Сообщество помощи бездомным животным "Добрая лапа",</li>
            <li>все права защищены.</li>
            <li>Сайт: <a href="https://vk.com/kidmustrun">Ирина Громова</a></li>
        </ul>
    </footer>
    <script>
    function show_edit(id){
        var feedback = document.getElementById(id);
        var p = feedback.lastChild.innerHTML;
        feedback.innerHTML='';
        
       var form = '<form class="form-styles clearfix" name="form_add" method="post" action="moduls/edit.php"><div class="form-group"><textarea  class="form-control" name="feedback" placeholder="Введите отзыв">'+p+'</textarea></div><input type="submit" name="button-edit" class="btn btn-outline-light float-right" value="Редактировать отзыв"> <input type="hidden" name="id" value="'+id+'"></form>';
        feedback.innerHTML = form;
    }
    function show_delete(id){
        var feedback = document.getElementById(id);
        
       var form = '<form class="clearfix" name="form_add" method="post" action="moduls/delete.php"><p>Вы действительно хотите удалить этот отзыв?</p><input type="button" name="button-close" class="btn btn-outline-light float-right" style="width:10vw;" value="Нет" onclick="location.reload()"><input type="submit" name="button-delete" style="width:10vw;" class="btn btn-danger float-right" value="Да"> <input type="hidden" name="id" value="'+id+'"></form>';
        feedback.innerHTML = form;
    }
    </script>
</body>
</html>