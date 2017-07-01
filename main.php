<?php
    if(isset($_GET['new'])){
        $query="SELECT * FROM news WHERE `news`.`id` = ".$_GET['new'];
        $q=mysqli_query($_POST['link'],$query) or die("YO!");
        while($res=mysqli_fetch_assoc($q)){
            echo "<h3>".$res['title']."</h3><br>";
            echo $res['content'];
        }
        echo "<br><br><a href='index.php?page=main'>Назад</a>";
        exit;
    }
?>

<div>
    <form action="" method="post">
        <table style="border: none">
            <?php
            $query="SELECT * FROM news ORDER BY id DESC";
            $q=mysqli_query($_POST["link"],$query);
            while($res=mysqli_fetch_assoc($q)){?>
                <tr style="width: 100%">
                    <td style="width: 10%; border: none"><?php echo "<h6>".$res['date']."</h6>"?></td>
                    <td style="width: 90%; border: none; text-align: left"><h3><?php echo "<a href='index.php?new=".$res['id']."'>".$res['title']."</a>"?></h3></td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; border-bottom: solid 1px; text-align: left"><?php echo $res['short_content']?></td>
                </tr>

            <?php    }
            ?>
        </table>
    </form>
</div>

