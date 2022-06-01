<?php
                    session_start();
                    include ('rega.php');
                    if (!isset($_SESSION['login']) && isset($_COOKIE['login'])) 
                    $_SESSION['login'] = $_COOKIE['login'];         
                
                // Еще раз ищем имя пользователя в контексте сессии. 
                $user = $_SESSION['login'];
                $permission = $_SESSION['permission'];
                // Неавторизованных пользователей отправляем на страницу регистрации. 
                if ($user == null) 
                {  
                    header("Location: auth.php");
                } else {
                        if ($permission == 0){
                        
                            header("Location: lk_employer.php");
                            exit();
                    } else {
                        if ($permission == 1)
                        {
                            header("Location: lk_applicant.php");
                            exit();
                        }
                    }
                }
                
                    ?>