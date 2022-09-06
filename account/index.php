<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Настройки");

    check_auth();
?>

        <section class="section section__form">
            <h3 class="section__subheading">аккаунт</h3>
            <h2 class="section__heading">Профиль</h2>
            <form class="form">
                <h3 class="form__heading">Общие настройки</h3>
                <input type="file" class="form__input" placeholder="Загрузка фотографии">
                <input type="text" class="form__input" placeholder="Введите ваше ФИО">
                <input type="email" class="form__input" placeholder="Введите ваш E-mail">
                <select class="form__input">
                    <option selected disabled>Выберите ваш город проживания</option>
                    <option>Каменск-Уральский</option>
                    <option>Екатеринбург</option>
                    <option>Москва</option>
                    <option>Казань</option>
                    <option>Санкт-Петербург</option>
                </select>
                <input type="text" class="form__input" placeholder="Введите вашу дату рождения">
                <textarea type="text" class="form__input form__textarea" placeholder="Введите информацию о себе"></textarea>

                
                <h3 class="form__heading">Безопасность</h3>
                <input type="password" class="form__input" placeholder="Введите новый пароль">
                <input type="password" class="form__input" placeholder="Повторите новый пароль">

                
                <h3 class="form__heading">Контакты</h3>
                <input type="text" class="form__input" placeholder="Введите ваш телефон">
                <input type="text" class="form__input" placeholder="Введите ваш Skype">
                <input type="text" class="form__input" placeholder="Введите ваш Telegram">

                
                <h3 class="form__heading">Настройка сайта</h3>
                <h3 class="form__subheading">Уведомления</h3>
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Новое сообщение
                    </span>
                </label>
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Действия по заданию
                    </span>
                </label>
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Новый отзыв
                    </span>
                </label>

                <h3 class="form__subheading">Конфендициальность</h3>
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Показывать мои контакты только заказчику
                    </span>
                </label>
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Не показывать мой профиль
                    </span>
                </label>

                <button type="submit" class="btn form__btn btn__account">
                    <span class="btn__text">Сохранить изменения</span>
                </button>
            </form>
        </section>
        
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/footer.php";
?>