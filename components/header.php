<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . "/functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?></title>
    <link rel="icon" type="image/png" href="<?=get_page("/assets/images/logo.png")?>" >
    <link rel="stylesheet" href="<?=get_page("/assets/styles/styles.css")?>">
    <link rel="stylesheet" href="<?=get_page("/assets/fontawesome/css/font-awesome.min.css")?>">

    <script src="<?=get_page("/assets/scripts/modal-function.js")?>" defer></script>
    <script src="<?=get_page("/assets/scripts/load-map.js")?>" defer></script>
    <script src="<?=get_page("/assets/scripts/load-beatiful.js")?>" defer></script>
    <script src="<?=get_page("/assets/scripts/load-works.js")?>" defer></script>
</head>
<body>
    <header class="header">
        <div class="header__content">
            <a class="header__logo" href="<?=get_page("/landing")?>">
                <img src="<?=get_page("/assets/images/logo.png")?>" alt="Logo" class="header__image">
            </a>
            <nav class="header__nav">
                <ul class="header__list">
                    
                    <?php 
                        if(!empty($_SESSION["auth"])): ?>
                            <li class="header__item">
                                <a href="<?=get_page("/mylist")?>" aria-text="Профиль" class="header__link">Профиль</a>
                            </li>
                            <li class="header__item">
                                <a href="<?=get_page("/account")?>" aria-text="Настройки" class="header__link">Настройки</a>
                            </li>
                            <li class="header__item">
                                <a href="<?=get_page("/logout")?>" aria-text="Выход" class="header__link">Выход</a>
                            </li>
                        <?php else: ?>
                            <li class="header__item">
                                <a href="<?=get_page("/enter")?>" aria-text="Вход" class="header__link">Вход</a>
                            </li>
                            <li class="header__item">
                                <a href="<?=get_page("/signup")?>" aria-text="Регистрация" class="header__link">Регистрация</a>
                            </li>
                        <?php endif; ?>
                </ul>
            </nav>
            <span class="header__bars" onclick="modalToggle('menu')">
                <i class="fa-solid fa-bars"></i>
            </span>
        </div>
        <div class="header__content">
            <p class="header__slogan">Приглашаем будущих абитуриентов</p>
            <ul class="header__list">
                <li class="header__item header__info">
                    <span class="header__icon icon__user"></span>
                    <span class="header__text"><?=USER_ONLINE?> пользователей онлайн</span>
                </li>
                <li class="header__item header__info">
                    <span class="header__icon icon__case"></span>
                    <span class="header__text"><?=NEW_CASE?> новых заказов</span>
                </li>
            </ul>
        </div>
    </header>

    <main class="main">