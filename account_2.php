<?php
require "session.php";
if (isset($_POST["email"]) && isset($_POST["password"])) {
    // var_dump("oipgfgefi");
    $dataBase = new Database();
    $sql = "SELECT * FROM `clients` WHERE Email = :email AND password = :password";
    $param = array(
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );
    // var_dump($dataBase->select($sql));
    if(count($dataBase->select($sql, $param)) == 1) {
        $user = $dataBase->select($sql, $param);
        saveAuth($dataBase->selectFirstCell($sql, $param));
        header("location: http://amtor/");
        }
        else {
        echo "<p>Неправильно введен пароль или логин</p>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style_account.css">
</head>

<body>
    <div class="registration-cssave">
        <form method="POST">
            <h3 class="text-center">Вход</h3>
            <div class="form-group">
                <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block create-account" type="submit">Вход в аккаунт</button>
            </div>
            <p><a href="account.php">Нет аккаунта</a></p>
        </form>
    </div>
</body>

</html>