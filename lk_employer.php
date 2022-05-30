<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_lk-employer.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header>
        <div class='head'>
            <div class="menu">
                <div class="logo">JO</div>
                <div class="menu-head">
                <ul class='head-menu'>
                    <li class="head-menu_point"><a href= "index.php" class="link">Главная</a></li>
                    <li class="head-menu_point"><a href= "index-info.php" class="link">О компании</a></li>
                    <li class="head-menu_point"><a href= "#" class="link">Работодателям</a></li>
                    <li class="head-menu_point"><a href= "#" class="link">Соискателям</a></li>
                    <li class="head-menu_point"><a href= "#" class="link">Гарантии</a></li>
                    <li class="head-menu_point"><a href= "#" class="link">Отзывы</a></li>
                    <li class="head-menu_point"><a href= "#" class="link">Контакты</a></li>
                    <li class="head-menu_point"><a href= "lk_employer.php" name='lk' class="link">Личный кабинет</a></li>
                </ul>
                </div>
            </div>
    </header>

    <div class="section">
    <div class="exit_button"><a href="exit.php" class="exit">Выйти из учетной записи</a></div>
        <form class="form-resume">
            <div class=form-input><div class="form_text">Фамилия: </div><div class="form-input_text"><input class="resume" type="text" name="first" value="" placeholder="Введите фамилию"required><br></div></div>
                <div class=form-input><div class="form_text">Имя: </div><div class="form-input_text"><input class="resume" type="text" name="second" value="" placeholder="Введите имя"required><br></div></div>
                    <div class=form-input><div class="form_text">Отчество: </div><div class="form-input_text"><input class="resume" type="text" name="father" value="" placeholder="Введите отчество"required><br></div></div>
                        <div class=form-input><div class="form_text">Номер телефона: </div><div class="form-input_text"><input class="resume" type="phone" name="phone" value="" placeholder="Номер телефона"required><br></div></div>
                        <div class=form-input><div class="form_text">Название вакансии: </div><div class="form-input_text"><input class="resume" type="text" name="vack" value="" placeholder="Введите название вакансии"required><br></div></div>
                        <div class=form-input><div class="form_text">Информация: </div><div class="form-input_text-info"><input class="resume info" type="text" name="inform" value="" placeholder="Информация о вакансии"required><br></div></div>
                                <div class=form-input><div class="form_text">Название фирмы: </div><div class="form-input_text"><input class="resume" type="text" name="name" Placeholder="Введите название"required> <br></div></div>
                                <div class=form-input><div class="form_text">Требуемые качества: </div><div class="form-input_text-info"><input class="resume info" type="text" name="kach" value="" placeholder="Введите требуемые качества"required><br></div></div>
                                <div class=form-input><div class="form_text">Заработная плата: </div><div class="form-input_text-info"><input class="resume" type="text" name="polz" value="" placeholder="Введите ЗП"required><br></div></div>
                                <div class=form-input>
                                            <div class="form_text">Стаж работы: </div><div class="form-input_text"><select class="resume">
                                            <option value="1">Без опыта</option>
                                            <option value="2">1 год</option>
                                            <option value="3">2 года</option>
                                            <option value="4">3 года и больше</option>
                                        </select></div>
                                    </div>
                                    <div class="buttons">
                                        <div class="buttons-employer"><button class="employer button">Редактировать</button></div>
                                        <div class="buttons-employer"><button class="applicant button">Сохранить</button></div>
                                    </div>
        </form>
    </div>
    <div class="feedback">
        <div class="order">
            <form action="#" class="order__form">
                <div data-close class="modal__close">&times;</div>
                <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                <input required placeholder="Ваш email" name="email" type="email" class="modal__input">
                <input required placeholder="Ваш коментарий" name="coment" type="coment" class="modal__input">

                <button class="btn btn_dark btn_min">Перезвонить мне</button>
            </form>
        </div>

    </div>

    <img src="./img/ico/telephone.gif" alt="telephone" class="telephone">
    <footer>
        <div class="container">
            <div class="content">
                <ul class="footer_title">
                    <h2>© Все права защищены 2022 г.</h2>
                </ul>
                <ul class="footer_about">
                    <h2>О нас</h2>
                    <li class="footer_li"><a href="#" class="footer_link">О компании</a></li>
                    <li class="footer_li"><a href="#" class="footer_link">Отзывы</a></li>
                    <li class="footer_li"><a href="#" class="footer_link">Гарантии</a></li>
                    <li class="footer_li"><a href="#" class="footer_link">Контакты</a></li>
                </ul>
                <ul class="footer_services">
                    <h2>Сервис</h2>
                    <li class="footer_li"><a href="#" class="footer_link">Поиск сотрудников</a></li>
                    <li class="footer_li"><a href="#" class="footer_link">Найти работу</a></li>
                </ul>
                <ul class="footer_follow">
                    <h2>Соц. сети</h2>
                    <li><div class="social"><img src="./img/ico/Facebook.svg" class="social_icon" alt="facebook">Facebook</div></li>
                    <li><div class="social"><img src="./img/ico/Instagram.svg" class="social_icon" alt="instagram">Instagram</div></li>
                    <li><div class="social"><img src="./img/ico/Whatsapp.svg" class="social_icon" alt="whatsaap">Whatsaap</div></li>
                    <li><div class="social"><img src="./img/ico/Twitter.svg" class="social_icon" alt="twitter">Twitter</div></li>
                </ul>
            </div>
         
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>