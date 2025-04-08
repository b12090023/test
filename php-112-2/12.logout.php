<?php
    session_start();#啟用變數
    unset($_SESSION["id"]);#登出使用者
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";#3秒後自動跳回2.login.html

?>
