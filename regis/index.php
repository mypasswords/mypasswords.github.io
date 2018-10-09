<?php // <==================================================================================================================
// ==================================================> --------------- <====================================================
// ================================================> © Copyright barik  <====================> Скрипт: Страница Пользователя
// ==================================================> --------------- <====================================================
require_once('../Connections/db.php'); // =======================================================> Подключаемся к бае-данных
header("content-type: text/html; charset=utf-8"); // ==============================================> Устанавливаем кодировку
session_start(); // ======================================================================================> Запускаем сессию
if(!isset($_SESSION['id']) ){header("location: /regis/on_off.php"); exit;} // ====> Если НЕ Авторизирован - возвращаем назад
$id = $_SESSION['id']; // =================================================================================> id Пользователя
$usr = mysql_fetch_assoc(mysql_query("SELECT * FROM reg WHERE id='$id'")); // =============================> Выбираем данные
if(isset($_GET['stop'])){
	session_destroy();
	unset($_GET['stop']);
	header("location: /regis/on_off.php"); 
	exit;} // ==============================================================================================> Кнопка - ВЫХОД
// =========================================================================================================================
// =======================================================================================> // Скрипт: Страница Пользователя
// =========================================================================================================================
// =====================================================================================================================> ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
</head>

<body>
  <div style="padding:50px;">
    Добро пожаловать <?=$usr['name']?>
    <br><br>
    <form action="" method="get">
      <input name="stop" value="Выход" type="submit" style="width:auto;
                                                            padding:5px 15px 5px 15px;
                                                            margin-left:50px;
                                                            -moz-appearance:none;
                                                            -webkit-appearance:none;
                                                            -ms-appearance:none;
                                                            appearance:none;
                                                            background-color:#FFF;
                                                            color:#666 !important;
                                                            cursor:pointer;
                                                            display:inline-block;
                                                            font-size:24px;
                                                            text-align:center;
                                                            text-decoration:none;
                                                            border:#999 1px solid;
                                                            -moz-border-radius:5px 5px 5px 5px;
                                                            -webkit-border-radius:5px 5px 5px 5px;
                                                            -khtml-border-radius:5px 5px 5px 5px;
                                                            border-radius:5px 5px 5px 5px;
                                                            behavior:url(border-radius.htc);">
    </form>
  </div>
</body>
</html>
