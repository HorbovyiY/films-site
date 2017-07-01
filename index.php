<!DOCTYPE html>
<?php
    error_reporting(0);
    include_once 'functions.php'; // connect file with functions
    include_once 'constants.php'; //connect file with constants
    $_POST["link"] = mysqli_connect(DB_LOCAL, DB_LOGIN, DB_PASS, DB_NAME) or die("Не вдалось з'єднатись з БД");
    mysqli_set_charset($_POST["link"],"utf8");
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>Мій сайт</title>
</head>
<body>
<?php
if (!isset ($_GET['page']))
    $_GET['page']='main';
?>
<div class="header">
    <h1>Мій сайт</h1>
</div>
<div class="all">
    <div class="left">
        <h4>Меню</h4>
        <ul>
            <li><a href="index.php?page=main">Головна</a></li>
            <li><a href="index.php?page=contacts">Контакти</a></li>
            <li><a href="index.php?page=admin_panel">Адмінпанель</a></li>
            <li><a href="index.php?page=game_alcohol">Гра "Алкоголізм - це погано"</a></li>
            <li><a href="index.php?page=structure">Структура сайту</a></li>
        </ul>
    </div>
    <div class="right">
        <h4>Калькулятор</h4>
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="text" class="calc_item" name="num1"></td>
                    <td><input type="text" class="calc_item" name="num2"></td>
                </tr>
                <tr>
                    <label><td><input type="radio" name="action" value="+" checked> +</td></label>
                    <label><td><input type="radio" name="action" value="-"> -</td></label>
                </tr>
                <tr>
                    <label><td><input type="radio" name="action" value="*"> *</td></label>
                    <label><td><input type="radio" name="action" value="/"> :</td></label>
                </tr>
                <tr>
                    <td><input type="submit" value="Відповідь:" class="calc_item" ></td>
                    <td>
                        <?php
                        if(isset($_POST['num1'])&& isset($_POST['num2'])&& isset($_POST['action']))
                            echo calc($_POST['num1'],$_POST['num2'],$_POST['action']);
                        ?>
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <div class="content">
        <?php include_once $_GET['page'].'.php' ?>

    </div>
</div>
<div class="footer">
    <h4>&copy Горбовий Юрій
        <?php
            if (date('Y')!=YEAR_BEGIN){
                echo YEAR_BEGIN."-".date('Y');
            }
            else{
                echo YEAR_BEGIN;
            }
        ?>
    </h4>
</div>
</body>
</html>

