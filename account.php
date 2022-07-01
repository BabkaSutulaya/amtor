<?php
require("db.php");
$database = new Database();
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["number"]) && isset($_POST["data"]) && isset($_POST["email"])) {
    $sql = "INSERT INTO `clients`(`Name_client`, `password`, `Number_phone`, `Birth_date`, `Email`) VALUES (:name, :password, :phone, :date, :email)";
    $param = array(
        "name" => $_POST["username"],
        "password" => $_POST["password"],
        "phone" => $_POST["number"],
        "date" => $_POST["data"],
        "email" => $_POST["email"],
    );
    $connect = $database->insert($sql, $param);
    var_dump($connect);
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
        <form method="POST" action="">
            <h3 class="text-center">Регистрация</h3>
            <div class="form-group">
                <input class="form-control item" type="text" name="username" id="username" placeholder="Имя" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="text" name="number" maxlength="11" id="number" placeholder="Номер телефона" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="date" name="data" id="birthday" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block create-account" type="submit">Зарегистрироваться</button>
            </div>
            <p><a href="account_2.php">Уже есть аккаунт</a></p>
        </form>
    </div>
</body>

</html>