<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if (isset($_POST['footer-btn'])) {
  // Переменные, которые отправляет пользователь
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if (empty($name) || empty($phone)) {
    // Пустые поля
    header('Location: incorrect.php');
  }
  else {
    // Формирование самого письма
    $title = "New appeal Best Tour Plan";
    $body = "
    <h2>New appeal</h2>
    <b>Name:</b> $name<br>
    <b>Phone:</b> $phone<br>
    <b>Message:</b><br>$message
    ";
    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        // $mail->SMTPDebug = 2;
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
    
        // Настройки вашей почты
        $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
        $mail->Username   = 'yasnikovayul@yandex.ru'; // Логин на почте
        $mail->Password   = 'vjqgfhjkm123'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('yasnikovayul@yandex.ru', 'Юлия Ясникова'); // Адрес самой почты и имя отправителя
    
        // Получатель письма
        $mail->addAddress('yasnikowa_yulyanka@mail.ru');  
    
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    
    
    // Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}
    
    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
    
    // Отображение результата
    header('Location: thankyou.php');
  }
  
  }
  
  else if (isset($_POST['newsletter-btn'])) {
  
    // Переменные, которые отправляет пользователь
    $email = $_POST['email'];
  
    if (empty($email)) {
      // Пустые поля
      header('Location: incorrect.php');
    }
    else {
      if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false)
      {
        //Все ОК, email правильный. Формирование самого письма
        $title = "Newsletter request";
        $body = "
        <h2>Newsletter request</h2>
        <b>E-mail:</b> $email";
        // Настройки PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            $mail->isSMTP();   
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            // $mail->SMTPDebug = 2;
            $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
        
            // Настройки вашей почты
            $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
            $mail->Username   = 'yasnikovayul@yandex.ru'; // Логин на почте
            $mail->Password   = 'vjqgfhjkm123'; // Пароль на почте
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom('yasnikovayul@yandex.ru', 'Юлия Ясникова'); // Адрес самой почты и имя отправителя
        
            // Получатель письма
            $mail->addAddress('yasnikowa_yulyanka@mail.ru');  
        
            // Отправка сообщения
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $body;    
            
            // Проверяем отравленность сообщения
            if ($mail->send()) {$result = "success";} 
            else {$result = "error";}
            
            } catch (Exception $e) {
                $result = "error";
                $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
      }    
      // Отображение результата
      header('Location: thankyou.php');
      }
      else
      {
        //Проверка email на корректность не пройдена
        header('Location: incorrect.php');
      }
    }
  }