<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Профиль");

    check_auth();
?>

        <section class="section section__profile">
            <h3 class="section__subheading">Задания</h3>
            <h2 class="section__heading">Последние задания</h2>

            <div class="profile__container">
                <ul class="works__list">
                    <li class="works__item">
                        <h3 class="works__heading">Название задания</h3>
                        <p class="works__description">
                            <strong class="works__subheading">Заказчик: </strong>
                            имя заказчика
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Цена: </strong>
                            10 000
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Срок: </strong>
                            5 дней
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Статус: </strong>
                            завершен
                        </p>
                        <a href="#" class="works__btn btn profile__btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </li>
                    <li class="works__item">
                        <h3 class="works__heading">Название задания</h3>
                        <p class="works__description">
                            <strong class="works__subheading">Заказчик: </strong>
                            имя заказчика
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Цена: </strong>
                            10 000
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Срок: </strong>
                            5 дней
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Статус: </strong>
                            завершен
                        </p>
                        <a href="#" class="works__btn btn profile__btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </li>
                    <li class="works__item">
                        <h3 class="works__heading">Название задания</h3>
                        <p class="works__description">
                            <strong class="works__subheading">Заказчик: </strong>
                            имя заказчика
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Цена: </strong>
                            10 000
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Срок: </strong>
                            5 дней
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Статус: </strong>
                            завершен
                        </p>
                        <a href="#" class="works__btn btn profile__btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </li>
                    <li class="works__item">
                        <h3 class="works__heading">Название задания</h3>
                        <p class="works__description">
                            <strong class="works__subheading">Заказчик: </strong>
                            имя заказчика
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Цена: </strong>
                            10 000
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Срок: </strong>
                            5 дней
                        </p>
                        <p class="works__description">
                            <strong class="works__subheading">Статус: </strong>
                            завершен
                        </p>
                        <a href="#" class="works__btn btn profile__btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/footer.php";
?>