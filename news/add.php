<div>
    <form action="" method="post">
        <input type="text" name="title" value="Заголовок"> <br>
        <textarea rows="5" placeholder="Короткий зміст новини" name="short_content"></textarea><br>
        <textarea rows="10" placeholder="Зміст новини" name="content"></textarea>
        <input type="submit" value="Додати">
    </form>
</div>
<?php
    if(isset($_POST['title'])&& isset($_POST['short_content'])&& isset($_POST['content'])&&$_POST['title']!=""&& $_POST['short_content']!=""&& $_POST['content']!=""){
        $query="INSERT INTO `news` (`title`, `short_content`, `content`) VALUES ('".htmlspecialchars($_POST['title'])."', '".htmlspecialchars($_POST['short_content'])."', '".htmlspecialchars($_POST['content'])."');";
        mysqli_query($_POST['link'],$query) or die(":(");
        echo "Запис успішно додано!";
    }
?>