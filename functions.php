<?php
function calc($a=0, $b=0, $action='+') {
    if ($action=='+')
        return $a+$b;
    if ($action=='-')
        return $a-$b;
    if ($action=='*')
        return $a*$b;
    if ($action=='/')
        return $a/$b;
}



function alcohol_battle(){
    $_SESSION["r_choise"] = rand(1,3);
    $_SESSION["r_hp"] = rand(1,4);
    if (!isset($_SESSION["user_hp"])) {
        $_SESSION["user_hp"]=USER_HP;
    }
    if (!isset($_SESSION["comp_hp"])) {
        $_SESSION["comp_hp"]=COMP_HP;
    }
    if (($_POST["choise"] != 1) &&($_POST["choise"] != 2) && ($_POST["choise"] != 3)){
        echo "<br>Виберіть число <br>";
    }elseif ($_POST["choise"] == $_SESSION["r_choise"]){
        $_SESSION["comp_hp"] -= $_SESSION["r_hp"];
        echo "<br>";
        echo "У Вас життів: ".$_SESSION["user_hp"]."<br>";
        echo "У Вашого суперника життів: ".$_SESSION["comp_hp"].'<span style="color: red">-'.$_SESSION["r_hp"]."</span><br>";
    }else{
        $_SESSION["user_hp"] -= $_SESSION["r_hp"];
        echo "<br>";
        echo "У Вас життів: ".$_SESSION["user_hp"]."<span style=\"color: red\">-".$_SESSION["r_hp"]."</span><br>";
        echo "У Вашого суперника життів: ".$_SESSION["comp_hp"]."<br>";
    }
    if ($_SESSION["user_hp"] <= 0){
        echo "<br><span style=\"color: red\">Ви програли </span><br>";
        session_destroy();
    }
    if ($_SESSION["comp_hp"]<=0){
        echo "<br><span style=\"color: green\">Ви виграли </span><br>";
        session_destroy();
    }
}

function scan($directory){
    if (is_dir($directory)){
        $dir = scandir($directory);
        $lline = substr_count($directory,"/");
        for ($i=2; $i < count($dir); $i++ ){
            for ($j=0; $j<$lline-1; $j++){
                echo "---> ";
            }
            echo $dir[$i]."<br>";
            scan($directory."/".$dir[$i]);
        }
    }
}
?>