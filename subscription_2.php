<?php
require "session.php";
$dataBase = new Database();
if (isset($_POST["code"])) {
    $sql = "SELECT * FROM `promocodes` WHERE code = :code";
    $param = array(
        "code" => $_POST["code"]
    );
    if (count($dataBase->select($sql, $param)) == 1) {
        $update = "UPDATE `clients` SET `ID_subscription`= :subscription WHERE ID_client = :id";
        $param_update = array(
            "subscription" => 2,
            "id" => $_SESSION["id"]
        );
        $dataBase->doRequest($update, $param_update);
        header("location: http://amtor/");
    } else {
        echo "<p>Неверный код</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="subs_2.css">
    <title>Оплата подписки</title>
</head>

<body>
    <div class="form_pay_subs">
        <form method="post">
            <h3 class="text-center">Введите промокод</h3>
            <div class="form-group">
                <input class="form-control item" type="text" name="code" maxlength="16" id="number" placeholder="Промокод" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block pay-subs" type="submit">Готово</button>
            </div>
        </form>
    </div>
</body>

</html>