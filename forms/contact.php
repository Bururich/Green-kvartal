<?php
// Укажи email, на который будут приходить письма
$to = "rgubrij@gmail.com"; // ← замени на свой

// Получаем данные из формы
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Формируем текст письма
$email_subject = "Нове повідомлення: $subject";
$email_body = "Ім'я: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Телефон: $phone\n";
$email_body .= "Повідомлення:\n$message\n";

// Заголовки
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Отправка письма
if (mail($to, $email_subject, $email_body, $headers)) {
  echo "success";
} else {
  echo "error";
}
?>
