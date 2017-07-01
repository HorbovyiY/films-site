<form action="" method="post">
    <label><input type="radio" name="choise" value="1"> 1 </label>
    <label><input type="radio" name="choise" value="2"> 2 </label>
    <label><input type="radio" name="choise" value="3"> 3 </label>
    <input type="submit" value="Вибір" width="1000px">
    <?php
        error_reporting(0);
        alcohol_battle();
    ?>
</form>
<br><hr>
Правила гри: Ви вибираєте число, і Ваш суперник (комп'ютер) вибирає число.
Якщо вони співпали - то у Вашого суперника зменшується кількість життів на число від 1 до 4-х.
Якщо ж числа не співпали - то кількість життів зменшується у Вас.
Програє той, у кого раніше кількість життів стане меншою, ніж 1.
