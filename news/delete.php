<br>
<?php
if(isset($_POST['select_item'])){
    $query="DELETE FROM `news` WHERE `news`.`id` = ".$_POST['select_item'];
    $query=mysqli_real_escape_string($_POST['link'],$query);
    mysqli_query($_POST['link'],$query) or die(":(");
    echo "Запис під номером ".$_POST['select_item']." успішно видалено!";
}
?>