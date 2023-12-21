<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$nomer = $_POST['nomer'];
$message = $_POST['message'];

// Вставка данных в базу данных
$sql = "INSERT INTO reservations (name, email, nomer, message) VALUES ('$name', '$email', '$nomer', '$message')";

if ($conn->query($sql) === TRUE) {
echo "Бронирование успешно добавлено";
} else {
echo "Ошибка: " . $sql . "
" . $conn->error;
}

$conn->close();
?>