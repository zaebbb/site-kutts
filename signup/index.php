<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Регистрация");

    check_user();

    $check_auth = "";

    if(!empty($_POST["send_check"])){
        $check_auth = create_account($_POST);

        if($check_auth){
            header("Location: /mylist");
        }
    }

    $type_check = gettype($check_auth) !== "string";
    
?>

        <section class="section section__form">
            <h3 class="section__subheading">создать аккаунт</h3>
            <h2 class="section__heading">Регистрация пользователя</h2>
            <?=$type_check && !$check_auth ? "<p class='text__error'>Введеные вами данные неверны!</p>" : ""?>
            <?=$type_check && $check_auth ? "<p class='text__successful'>Вы авторизовались!</p>" : ""?>
            <form class="form" method="POST">
                <input type="text" class="form__input" placeholder="Введите ваше ФИО" name="user">
                <input type="email" class="form__input" placeholder="Введите ваш E-mail" name="email">
                <input type="text" class="form__input" placeholder="Введите ваш логин" name="login">
                <input type="password" class="form__input" placeholder="Введите ваш пароль" name="password">
                <input type="password" class="form__input" placeholder="Повторите ваш пароль" name="repeat_password">
                <select class="form__input" name="city">
                    <option selected disabled>Выберите ваш город проживания</option>
                    <option>Каменск-Уральский</option>
                    <option>Екатеринбург</option>
                    <option>Москва</option>
                    <option>Казань</option>
                    <option>Санкт-Петербург</option>
                </select>

                <input type="hidden" value="send_data" name="send_check">

                <button type="submit" class="btn form__btn">
                    <span class="btn__text">Создать аккаунт</span>
                </button>
            </form>
        </section>

        <section class="section section__form">
            <h3 class="section__subheading">регистрация через соцсети</h3>
            <h2 class="section__heading">Другие способы</h2>
            <ul class="form__list">
                <li class="form__item">
                    <a href="#" class="form__link">
                        <img src="<?=get_page("/assets/images/google.png")?>" alt="google" class="form__image">
                    </a>
                </li>
                <li class="form__item">
                    <a href="#" class="form__link">
                        <img src="<?=get_page("/assets/images/facebook.png")?>" alt="facebook" class="form__image">
                    </a>
                </li>
                <li class="form__item">
                    <a href="#" class="form__link">
                        <img src="<?=get_page("/assets/images/vk.png")?>" alt="vk" class="form__image">
                    </a>
                </li>
                <li class="form__item">
                    <a href="#" class="form__link">
                        <img src="<?=get_page("/assets/images/telegram.png")?>" alt="telegram" class="form__image">
                    </a>
                </li>
            </ul>
        </section>
        
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/footer.php";
?>