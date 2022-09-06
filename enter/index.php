<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Авторизация");

    check_user();

    check_save_data();

    $check_auth = "";

    if(!empty($_POST["login"]) && !empty($_POST["password"])){
        $check_auth = auth($_POST);

        if($check_auth){
            header("Location: /mylist");
        }
    }

    $type_check = gettype($check_auth) !== "string";
?>

        <section class="section section__form">
            <h3 class="section__subheading">Авторизация</h3>
            <h2 class="section__heading">В личном кабинете</h2>
            <?=$type_check && !$check_auth ? "<p class='text__error'>Введеные вами данные неверны!</p>" : ""?>
            <?=$type_check && $check_auth ? "<p class='text__successful'>Вы авторизовались!</p>" : ""?>
            
            <form class="form" method="POST">
                <input type="text" class="form__input" placeholder="Введите ваш логин" name="login" value="<?=$_SESSION["save_data"]["login"]?>">
                <input type="password" class="form__input" placeholder="Введите ваш пароль" name="password" value="<?=$_SESSION["save_data"]["password"]?>">
                <label class="form__label__checkbox">
                    <input class="form__checkbox" type="checkbox" name="save">
                    <span class="form__checkbox__span form__check"></span>
                    <span class="form__checkbox--text">
                        Запомнить меня
                    </span>
                </label>

                <button type="submit" class="btn form__btn" name="button">
                    <span class="btn__text">Авторизоваться</span>
                </button>
            </form>
        </section>

        <section class="section section__form">
            <h3 class="section__subheading">авторизация через соцсети</h3>
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