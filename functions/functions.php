<?php 

require_once $_SERVER["DOCUMENT_ROOT"] . "/functions/config.php";

if(empty($_SESSION["auth"])){
    $_SESSION["auth"] = "";
}

function get_page($dir){
    return "http://" . $_SERVER["HTTP_HOST"] . $dir;
};

function set_name_page($name = "Главная", $app_name = APP_NAME){
    return "<script>document.querySelector('title').textContent = '$app_name - $name'</script>";
}

function check_save_data(){
    if(empty($_SESSION["save_data"]["login"])){
        $_SESSION["save_data"]["login"] = "";
    }
    if(empty($_SESSION["save_data"]["password"])){
        $_SESSION["save_data"]["password"] = "";
    }
}

function connect_db(){
    return new mysqli(HOST, USER, PASS, DB);
}

function query($query){
    return connect_db()->query($query);
}

function auth($data){
    if(!empty($data["login"]) && !empty($data["password"])){
        $login = $data["login"];
        $password = $data["password"];

        if(!empty($data["save"])){
            $_SESSION["save_data"]["login"] = $data["login"];
            $_SESSION["save_data"]["password"] = $data["password"];
        }

        $check_auth = query("SELECT * FROM `users` WHERE `login` = '$login'")->fetch_assoc();

        if($check_auth && count($check_auth) !== 0){

            if(password_verify($password, $check_auth["password"])){
                $_SESSION["save_data"]["login"] = "";
                $_SESSION["save_data"]["password"] = "";

                $_SESSION["auth"] = $check_auth["id"];

                return true;
            }
        }
    }

    return false;
}

function check_auth(){
    if(empty($_SESSION["auth"])){
        header("Location: /403");
    }
}

function check_user(){
    if(!empty($_SESSION["auth"])){
        header("Location: /mylist");
    }
}

function create_account($data){
    foreach($data as $form_elem){
        if(empty($form_elem)){
            return false;
        }
    }

    $login = $data["login"];
    $password_hash = password_hash($data["password"], PASSWORD_DEFAULT);
    $array_user_info = explode(" ", $data["user"]);
    $email = $data["email"];
    $city = $data["city"];

    if(!empty($data["city"]) && count($array_user_info) >= 2){
        $name = $array_user_info[1];
        $surname = $array_user_info[0];
        $patronymic = "";
        if(!empty($array_user_info[2])){ $patronymic = $array_user_info[2]; }

        $search_login = query("SELECT * FROM `users` WHERE `login` = '$login'")->fetch_assoc();

        if($data["password"] !== $data["repeat_password"]){ return false; }

        if($search_login && count($search_login) === 0){ return false; }
        
        $create_user = query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password_hash')");
        $user_search = query("SELECT * FROM `users` WHERE `login` = '$login'")->fetch_assoc();

        $user_id = $user_search["id"];

        $add_user_info = query("INSERT INTO `user_info` (`id`, `name`, `surname`, `patronymic`, `email`, `city`) VALUES ('$user_id', '$name', '$surname', '$patronymic', '$email', '$city')");

        $_SESSION["auth"] = $user_id;

        return true;
    }

    return false;
}