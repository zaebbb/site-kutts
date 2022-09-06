<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/components/header.php";

    echo set_name_page("Профиль");

    check_auth();

    $_SESSION["auth"] = "";

    header("Location: /landing");
?>