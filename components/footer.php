
    </main>

<footer class="footer">
    <div class="footer__block">
        <a href="<?=get_page("/landing")?>" class="footer__logo">
            <img src="<?=get_page("/assets/images/logo.png")?>" alt="logo" class="footer__image">
        </a>
    </div>
    <div class="footer__block">
        <h3 class="footer__heading">Меню</h3>
        <ul class="footer__list">
            <li class="footer__item">
                <a href="<?=get_page("/landing")?>" class="footer__link">Главная</a>
            </li>
            <?php if(empty($_SESSION["auth"])): ?>
                <li class="footer__item">
                    <a href="<?=get_page("/signup")?>" class="footer__link">Регистрация</a>
                </li>
                <li class="footer__item">
                    <a href="<?=get_page("/signup")?>" class="footer__link">Авторизация</a>
                </li>
            <?php else: ?>
                <li class="footer__item">
                    <a href="<?=get_page("/mylist")?>" class="footer__link">Задания</a>
                </li>
                <li class="footer__item">
                    <a href="<?=get_page("/landing")?>" class="footer__link">Исполнители</a>
                </li>
                <li class="footer__item">
                    <a href="<?=get_page("/landing")?>" class="footer__link">Создать задание</a>
                </li>
                <li class="footer__item">
                    <a href="<?=get_page("/mylist")?>" class="footer__link">Мой профиль</a>
                </li>
            <?php endif; ?>
            <li class="footer__item">
                <a href="<?=get_page("/landing")?>" class="footer__link">Справка</a>
            </li>
        </ul>
    </div>
    <div class="footer__block">
        <h3 class="footer__heading">Мы в соц. сетях</h3>
        <ul class="footer__list footer__social">
            <li class="footer__item footer__social__item">
                <a href="<?=LINK_VK?>" class="footer__link">
                    <i class="fa-brands fa-vk" ></i>
                </a>
            </li>
            <li class="footer__item footer__social__item">
                <a href="<?=LINK_YOUTUBE?>" class="footer__link">
                    <i class="fa-brands fa-youtube-play"></i>
                </a>
            </li>
            <li class="footer__item footer__social__item">
                <a href="<?=LINK_FACEBOOK?>" class="footer__link">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li class="footer__item footer__social__item">
                <a href="<?=LINK_INSTAGRAM?>" class="footer__link">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li class="footer__item footer__social__item">
                <a href="<?=LINK_TWITTER?>" class="footer__link">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="footer__block">
        <h3 class="footer__heading">Приложения</h3>
        <a href="<?=LINK_GOOGLEPLAY?>" class="footer__mobile">
            <img src="<?=get_page("/assets/images/googleplay.png")?>" alt="google play" class="footer__mobile__image">
        </a>
        <a href="<?=LINK_APPSTORE?>" class="footer__mobile">
            <img src="<?=get_page("/assets/images/appstore.png")?>" alt="app store" class="footer__mobile__image">
        </a>
    </div>
    <div class="footer__block">
        <h3 class="footer__heading">Контакты</h3>
        <ul class="footer__list">
            <li class="footer__item">
                <a href="tel:<?=PHONE_1_FORMAT?>" class="footer__link"><?=PHONE_1?></a>
            </li>
            <li class="footer__item">
                <a href="tel:<?=PHONE_2_FORMAT?>" class="footer__link"><?=PHONE_2?></a>
            </li>
            <li class="footer__item">
                <a href="mailto:<?=EMAIL_1?>" class="footer__link"><?=EMAIL_1?></a>
            </li>
            <li class="footer__item">
                <a href="mailto:<?=EMAIL_2?>" class="footer__link"><?=EMAIL_2?></a>
            </li>
        </ul>
    </div>
</footer>

<!-- modals -->

<div class="modal" id="modal-menu">
    <div class="modal__window">
        <i onclick="modalToggle('menu')" class="fa-solid fa-xmark modal__close"></i>
        <h3 class="modal__heading">Меню</h3>
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
        <h3 class="modal__heading">Информация</h3>

        <p class="header__slogan modal__slogan">Приглашаем будущих абитуриентов</p>
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
</div>
</body>
</html>