<div>
    <form action="" method="post">
        <input type="text" name="title" value="<?php
            $query="SELECT title FROM news WHERE `news`.`id` = ".$_POST['select_item'];
            $query=mysqli_real_escape_string($_POST['link'],$query);
            $q=mysqli_query($_POST['link'],$query);
            while($res=mysqli_fetch_assoc($q)){
                echo $res['title'];
            }
            ?>"> <br>
        <textarea rows="5" placeholder="Короткий зміст новини" name="short_content"><?php
            $query="SELECT short_content FROM news WHERE `news`.`id` = ".$_POST['select_item'];
            $query=mysqli_real_escape_string($_POST['link'],$query);
            $q=mysqli_query($_POST['link'],$query);
            while($res=mysqli_fetch_assoc($q)){
                echo $res['short_content'];
            }
            ?></textarea><br>
        <textarea rows="10" placeholder="Зміст новини" name="content"><?php
            $query="SELECT content FROM news WHERE `news`.`id` = ".$_POST['select_item'];
            $query=mysqli_real_escape_string($_POST['link'],$query);
            $q= mysqli_query($_POST['link'],$query);
            while($res=mysqli_fetch_assoc($q)){
                echo $res['content'];
            }
            ?></textarea>
        <br><input type="submit" value="Змінити">
    </form>
</div>
<?php
if(isset($_POST['title'])&& isset($_POST['short_content'])&& isset($_POST['content'])&&$_POST['title']!=""&& $_POST['short_content']!=""&& $_POST['content']!=""){
    $query="UPDATE `news` SET `title` = '".htmlspecialchars($_POST['title'])."', `short_content` = '".htmlspecialchars($_POST['short_content'])."', `content` = '".htmlspecialchars($_POST['content'])."' WHERE `news`.`id` =".$_POST['select_item'];
    mysqli_query($_POST['link'],$query) or die(":(");
    echo "Запис успішно змінено!";
}
?>