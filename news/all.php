<div>
    <form action="" method="post">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Короткий зміст</th>
            </tr>
            <?php
                $query="SELECT * FROM news ORDER BY id DESC";
                $q=mysqli_query($_POST["link"],$query);
                while($res=mysqli_fetch_assoc($q)){?>
                    <tr>
                        <td style="width: 10%"><input type='radio' name='select_item' value='<?php echo $res['id']?>' <?php if(isset($_POST['select_item'])&& $_POST['select_item']==$res['id']) echo 'checked';?>></td>
                        <td style="width: 10%"><?php echo $res['id']?></td>
                        <td style="width: 30%"><?php echo $res['title']?></td>
                        <td style="width: 50%"><?php echo $res['short_content']?></td>
                    </tr>
            <?php    }
            ?>
        </table>

        <input type="radio" name="select_action" value="add" <?php if(isset($_POST['select_action'])&& $_POST['select_action']=="add") echo "checked"?>> Додати
        <input type="radio" name="select_action" value="update" <?php if(isset($_POST['select_action'])&& $_POST['select_action']=="update") echo "checked"?>> Редагувати
        <input type="radio" name="select_action" value="delete" <?php if(isset($_POST['select_action'])&& $_POST['select_action']=="delete") echo "checked"?>> Видалити
        <input type="submit" value="Вперед!">
        <?php
            if(isset($_POST['select_action'])&& isset($_POST['select_item'])){
                include "news/".$_POST['select_action'].".php";
            }
            if(isset($_POST['select_action'])&& $_POST['select_action']=="add"){
                include "news/add.php";
            }

        ?>
    </form>
</div>

