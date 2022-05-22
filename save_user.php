<?php
    if (isset($_POST['login'])) { 
       $login = $_POST['login']; 
       if ($login == '') { 
          unset($login);
         } 
      } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { 
       $password=$_POST['password']; 
       if ($password =='') { 
          unset($password);
         } 
      }
        if (isset($_POST['fio'])) { 
         $fio=$_POST['fio']; 
         if ($fio =='') { 
            unset($fio);
           } 
        }
        if (isset($_POST['phone'])) { 
         $phone=$_POST['phone']; 
         if ($phone =='') { 
            unset($phone);
           } 
        }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
   $password0 = stripslashes($password0);
    $password0 = htmlspecialchars($password0);
    $password1 = stripslashes($password1);
    $password1 = htmlspecialchars($password1);
    $fio = stripslashes($fio);
    $fio = htmlspecialchars($fio);
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
 //удаляем лишние пробелы
    $login = trim($login);
    $password0 = trim($password0);
    $password1 = trim($password1);
 // подключаемся к базе
    include ("rega.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
    // проверка на существование пользователя с таким же логином
    $result = mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    switch ($_POST['rad0']) {
       case "0":
    $permission = 0;
    $result2 = "INSERT INTO `users`(`fio`, `password`, `login`, `phone`, `permission`) VALUES ('$fio','$password','$login','$phone','$permission');";
    mysqli_query ($db,$result2);
    break;
case "1" :
   $permission = 1;
   $result2 = "INSERT INTO `users`(`fio`, `password`, `login`, `phone`, `permission`) VALUES ('$fio','$password','$login','$phone','$permission');";
   mysqli_query ($db,$result2);
   break;   
    }

    // Проверяем, есть ли ошибки
    
    if ($result2==TRUE)
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.html'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>