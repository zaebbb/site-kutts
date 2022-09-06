<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page();

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
?>

        <section class="section section__about">
            <h3 class="section__subheading">Назначение сервиса</h3>
            <h2 class="section__heading">Профессиональное образовательное учреждение</h2>
            <p class="about__description">
                Комплексный анализ ситуации поддерживает обществвенный рекламный макет, осознавая социальную ответственность бизнеса. Диктат потребителя не так уж очевиден. Креативная концепция однообразно изменяет мониторинг активности. Медиамикс транслирует креатив. Общество потребления, как следует из вышесказанного, экономит целевой трафик.
                <br><br>
                Показ баннера разнородно нейтрализует фирменный ребрендинг. Согласно предыдущему, бизнес-модель все еще интересна для многих. Мониторинг активности ускоряет фирменный имидж, оптимизируя бюджеты. Медийная реклама отражает медиабизнес, расширяя долю рынка. Портрет потребителя стабилизирует CTR.
            </p>
            <a href="./signup.html" class="btn about__btn">
                <span class="btn__text">Создать аккаунт</span>
            </a>
        </section>
        
        <section class="section section__map">
            <h3 class="section__subheading">Дорожная карта</h3>
            <h2 class="section__heading">Абитуриентов и родителей</h2>
            <ul class="map__content"></ul>
        </section>

        <section class="section section__beatiful">
            <h3 class="section__subheading">Преимущества</h3>
            <h2 class="section__heading">Для граждан</h2>
            <ul class="beatiful__list"></ul>
        </section>

        <section class="section section__works">
            <h3 class="section__subheading">Задания</h3>
            <h2 class="section__heading">Последние задания</h2>
            <div class="works__container"></div>
            
            <a href="#" class="works__btn works__all btn">
                <span class="btn__text">Все задания</span>
            </a>
        </section>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/footer.php";
?>