<?php 
	require_once('config.php');

	if ( isset($_GET['category']) )  {
		$pageTitle = $_GET['category'];
	} else {
		$pageTitle = 'Главная страница';
	}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Hackers</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vxod.css">
</head>

<body>
    <!--HEADER-->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <img src="img/logo.png" alt="" class="logo__img">
                <div class="logo__title">Junior hackers</div>
                </div>
                <div class="menu">
                    <div class="menu__item"><a href="./index.php" class="menu__link">Главная</a></div>
                    <div class="menu__item"><a href="" class="menu__link">О проекте</a></div>
                    <div class="menu__item"><a href="" class="menu__link">Наши преподаватели</a></div>
                </div>
                   
                <div class="sign__item">
                    <?php if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on'): ?>
                        <button style="width:auto;"><a href="./teacher.php" class="menu__link" style="line-height: 25px;">Войти в кабинет</a></button>
                        <button style="width:auto;"><a href="./logout.php" class="menu__link" style="line-height: 25px;">Выйти </a></button>
                        
                    <?php else: ?>
                        <button onclick="document.getElementById('id01').style.display='block'" 
                        style="width:auto;">Вход</button>
                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="check-login.php" method="POST">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
                            </div>
                            <div class="container">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="login" value="teacher" required>
                          
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" value="teacher" required>
                                  
                                <button type="submit">Войти</button>   
                            </div>
            
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" 
                                    class="cancelbtn">Отмена</button>
                                <span class="psw">Забыли <a href="#">пароль?</a></span>
                            </div>
                        </a>
                    <?php endif ?>


                    
                        </form>
                    </div>
                </div>   
            </nav>
            <div class="intro">
                <div class="intro__item">
                    <div class="intro__title">Удобная образовательная платформа
                        <p class="intro__subtitle">для вашей
                        онлайн-школы или корпоративного университета</p>
                    </div>
                </div>
                <div class="intro__item">
                    <div class="intro__icon">
                        <img src="img/intro-img.png" alt="" class="intro__img">
                    </div>
                </div>
            </div>
            <div class="simple">
                <div class="simple__title">Получить доступ</div>
                <div class="simple__border"></div>
                <div class="simple__subtitle">Пожалуйста, заполните эту форму, чтобы создать учетную запись</div>

                    <form action="add-new-user.php" method="POST">
                        <label class="label" for="email"><b>Username</b></label>
                        <input class="simple__input" type="text" name="login" placeholder="Enter your email ....">
                        
                        <label class="label" for="psw"><b>Password</b></label>
                        <input class="simple__input" type="password" name="password" placeholder="Enter Password">

                        <label class="label" for="psw-repeat"><b>Repeat password</b></label>
                        <input class="simple__input" type="password" name="password-repeat" placeholder="Repeat Password">
                        
                        <button class="simple__btn">Зарегистрироваться
                            <i class="far fa-paper-plane simple__plane"></i></button>
                    </form>
               
            </div>
        </div>
    </header>
    <!--END HEADER-->
    <!--MAIN-->
    <main>
        <div class="container">
            <!--project-->
            <div class="project">
                <div class="project__item">
                    <div class="project__img">
                        <img src="img/project2.png" alt="" id="pr-img">
                    </div>
                </div>
                <div class="project__item">
                    <div class="project__title">Бесплатный онлайн-доступ к лучшим учебным курсам 
                        университетского уровня всем желающим независимо от места проживания, 
                        возраста, состояния и состояния здоровья.</div>
                    <div class="project__subtitle">Проект постоянно развивается и растет, увеличивает 
                        количество доступных курсов и внедряет новейшие учебные методы для всех. 
                        Вместе с ведущими вузами мы внедряем технологию смешанного обучения.
                        <br>
                        <br>
                        Смотрите лучшие курсы! Присоединяйтесь к платформе!</div>
                    <div class="project__btn">
                        <a href="" class="btn">Вход для студента</a>
                    </div>
                </div>
            </div>
            <!--project2-->
            <div class="project-2">
                <div class="project__item">
                    <div class="project__title">Онлайн-обучение позволяет легко выбрать не только удобное время 
                        и место для обучения, но и собственный темп.</div>
                    <div class="project__subtitle">Легко связаться с преподавателем при помощи чата,  
                        форума или  аудио-/видеосвязи на платформе для дистанционного обучения.  Электронное 
                        обучение обладает рядом несомненных преимуществ. 
                        <br>
                        <br>
                        Студенты курсов могут эффективно, удобно и довольно дешево учиться. 
                        Присоединяйтесь к платформе!</div>
                    <div class="project__btn">
                        <a href="" class="btn">Вход для студента</a>
                    </div>
                </div>
                <div class="project__item">
                    <div class="project__img">
                        <img src="img/project-2-2.png" alt="" id="pr-img">
                    </div>
                </div>
            </div>
            <!--icons-->
            <div class="icons">
                <div class="icons__item">
                    <div class="icons__img-1">
                        <img src="img/icons1.png" alt="" id="ic-img">
                    </div>
                    <div class="icons__title">Глобальный студент</div>
                    <div class="icons__subtitle">Компании, учебные заведения, 
                        репетиторы выбирают внедрение электронного образования.</div>
                </div>
                <div class="icons__item">
                    <div class="icons__img-2">
                        <img src="img/icons2.png" alt="" id="ic-img">
                    </div>
                    <div class="icons__title">Шанс успеха</div>
                    <div class="icons__subtitle">Легче следить за успехами каждого ученика. 
                        Потому что программы для обучения предлагают для этого удобные тесты и 
                        статистику.</div>
                </div>
                <div class="icons__item">
                    <div class="icons__img-3">
                        <img src="img/icons3.png" alt="" id="ic-img">
                    </div>
                    <div class="icons__title">Образовательные услуги</div>
                    <div class="icons__subtitle">Высокая эффективность благодаря использованию 
                        удобных инструментов: презентации, тесты, чат, 
                        показ экрана.</div>
                </div>
            </div>
        </div>
    </main>
    <!--END MAIN-->
    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="footer">
                <div class="copyright"><i class="far fa-copyright"></i> 2020. Roy Design. All Rights Reserved.</div>
                <div class="footer-menu">
                    <div class="footer-menu__item"><a href="" class="footer-menu__link">About Company</a></div>
                    <div class="footer-menu__item"><a href="" class="footer-menu__link">Privacy Policy</a></div>
                    <div class="footer-menu__item"><a href="" class="footer-menu__link">Help Center</a></div>
                    <div class="footer-menu__item"><a href="" class="footer-menu__link">Site Map</a></div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
</body>

</html>