<?php
$dsn = 'mysql:host=localhost;dbname=mydb';
$username = 'root';
$password = '123';
$pdo = dbConnect($dsn, $username, $password);

$createTable = "CREATE TABLE IF NOT EXISTS orders (
                id INT NOT NULL AUTO_INCREMENT,
                auto VARCHAR(45) NOT NULL,
                model VARCHAR(45) NOT NULL,
                detail VARCHAR(45) NOT NULL,
                user_email VARCHAR(60) NOT NULL,
                user_phone VARCHAR(45) NOT NULL,
                PRIMARY KEY (id))";

createUserTable($createTable, $pdo);

$insert = "INSERT INTO orders (auto, model, detail, user_email, user_phone) values (?, ?, ?, ?, ?)";
$stmt = $pdo->query($insert);
$i = 1;
foreach ($_POST as $value) {
    $stmt->bindValue($i, $value);
    $i++;
}
$stmt->execute();

if (orderMail($_POST)) {
    echo "message sent";
}


function orderMail(array $orderDetails): bool
{
    $message = "Успешно: " . $orderDetails['detailType'] . ", " . $orderDetails['auto'] . " " . $orderDetails['model'] . ".";
    return mail($orderDetails['email'], "Заявка с сайта", $message);
}

function createUserTable($query, PDO $pdo): bool
{
    $stmt = $pdo->prepare($query);

    return $stmt->execute();
}

function dbConnect(string $dsn, string $user, string $password): PDO
{

    static $connection = null;

    if ($connection === null) {
        $connection = new PDO($dsn, $user, $password);
    }

    return $connection;
}
