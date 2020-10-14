<?php 
	require_once('./config.php');

	if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on' ) {
	} else {
		header('Location: ./index.php');
	}

	$pageTitle = 'Кабинет преподавателя';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет преподователя</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="top__menu">
                <div class="add-task">
                    <div class="add__item"><button type="button" class="add__btn">Начать занятие</button></div>
                    <div class="add__item"><button type="button" class="add__btn">Создать ссылку</button></div>
                </div>
                <div class="profile">
                    <div class="profile__item"><a href="#" class="profile__link"><i class="ti-email"></i><span
                                class="profile__email">3</span></a></div>
                    <div class="profile__item"><a href="#" class="profile__link"><i class="ti-light-bulb"></i></a></div>
                    <div class="profile__item"><img src="img/admin/profile-img.jpg" alt="" class="profile__img"></div>
                </div>
            </div>
        </header>
        <nav class="nav">
            <div class="logo">
                <img src="img/admin/logo.png" alt="">
                <div class="logo__text">Junior Hackers</div>
            </div>
            <div class="menu">
                <ul>
                    <li class="menu__item"><i></i><a href="index.php" class="nav__link"><i class="ti-home"
                                id="icon"></i>Главная</a></li>
                    <li class="menu__item"><a href="#" class="nav__link"><i class="ti-user" id="icon"></i>Студенты
                            онлайн</a>
                    </li>
                    <li class="menu__item"><a href="#" class="nav__link"><i class="ti-video-camera"
                                id="icon"></i>Трансляции</a>
                    </li>
                    <li class="menu__item"><a href="#" class="nav__link"><i class="ti-help" id="icon"></i>Задания</a>
                    </li>
                    <li class="menu__item"><a href="#" class="nav__link"><i class="ti-comment-alt" id="icon"></i>Ответы
                            на
                            задания</a></li>
                    <li class="menu__item"><a href="#" class="nav__link"><i class="ti-help-alt" id="icon"></i>Помощь</a>
					</li>
					<li class="menu__item"><a href="./logout.php" class="nav__link"><i class="ti-help-alt" id="icon"></i>Выход</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="statistics">
            <div class="statistics__h1">Статистика занятий</div>
            <div class="statistics-board">
                <div class="statistics__item">
                    <div class="users">
                        <div class="users__title">Список студентов</div>
                    </div>
                </div>
                <div class="statistics__item">
                    <div class="users-online">
                        <div class="statistics__title">Студенты онлайн</div>
                    </div>
                </div>
                <div class="statistics__item">
                    <div class="broadcasts">
                        <div class="statistics__title">Трансляции</div>
                    </div>
                </div>
                <div class="statistics__item">
                    <div class="tasks">
                        <div class="statistics__title">Список заданий</div>
                    </div>
                </div>
                <div class="statistics__item">
                    <div class="answers">
                        <div class="statistics__title">Выполненные задания</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
	