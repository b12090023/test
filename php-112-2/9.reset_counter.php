<?php
    session_start();#設置變數
    unset($_SESSION["counter"]);#移除變數的"counter"，歸零
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";#2秒後跳回8.counter.php

?>
