<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Дотсуп запрещен");
?>

        <section class="section section__form">
            <h3 class="section__subheading">ошибка 403</h3>
            <h2 class="section__heading">Запрашиваемая страница запрещена к просмотру</h2>
                <h3 class="form__heading">Авторизируйтесь по кнопке ниже</h3>
            <a href="<?=get_page("/enter")?>" class="btn">
                <span class="btn__text">Авторизоваться</span>
            </a>
        </section>
        
<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/footer.php";
?>