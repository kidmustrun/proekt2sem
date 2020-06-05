<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск бездомных животных "Добрая лапа"</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header id="header" class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" style="height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Кто мы?</a>
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
                    <a class="nav-link" href="#">Конкурс рисунков</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Наши контакты</a>
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
        <h1>Кто мы?</h1>
        <p>Сообщество "Добрая лапа" - это добровольная некоммерческая организация, помогающая бездомным животным обрести добрых хозяев. Все фотографии животных на сайте сделаны нашими волонтерами, которым мы доверяем работу по поиску. Будущий хозяин должен быть не младше 25 лет, с постоянным местом жилья и работы, а так же порядочным и добрым человеком. Все это гарантирует, что маленький хвостик попадет в добрые и любящие руки!</p>
    <h1>Могу ли я чем-то помочь?</h1>
    <p>Да! Ряды наших волонтеров всегда рады пополнению, кроме того, если Вы сами обнаружили бездомное животное, вы можете связаться с нами через <a href="#form">форму</a> и мы обязательно скоординируем Вас дальше!</p>
    <h1>Кто такие волонтёры?</h1>
    <p>Волонтёры - обычные люди, которые в свободное время занимаются поиском и пристраиванием бездомных животных. За счёт средств сообщества животные получают необходимый уход и лекарства, и поступают на руки хозяевам в здоровом виде. Стать волонтёром может любой желающий, прошедший отбор. Основные требования: возраст не младше 25 лет, постоянное жилье и доход, доброе и отзывчивое сердце. Работа волонтёра добровольная, за нее не платят деньги, но без этих ребят тысячи животных просто не смогут спастись!</p>
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
</body>
</html>