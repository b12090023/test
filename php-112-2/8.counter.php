<?php
    session_start();#設置變數
    if (!isset($_SESSION["counter"]))#檢查變數中的"counter"是否存在
        $_SESSION["counter"]=1;#若session["counter"]沒被設定， 設定成1
    else
        $_SESSION["counter"]++;#若有的話，+1

    echo "counter=".$_SESSION["counter"];#顯示計數器目前的數字
    echo "<br><a href=9.reset_counter.php>重置counter</a>";#點擊重設會導向到9.reset_counter.php，重置計數器
?>
