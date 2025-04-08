<?php
    error_reporting(0); #關閉錯誤內容，以防錯誤訊息顯示給使用者
    session_start();#啟動session，讓程式可以使用該變數
    if (!$_SESSION["id"]) {#檢查有無session變數"id"，如果沒有代表沒登入
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";#使用meta標籤自動跳轉到登入頁面(2.login.html)，3秒後執行
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";#若已登入，顯示歡迎訊息，並顯現登出、管理使用者、新增佈告的超連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#連接資料庫，指定伺服器、帳號和密碼與資料庫名稱
        $result=mysqli_query($conn, "select * from bulletin");#從bulletin資料表中選取所有資料
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#顯示公告的表格標題
        while ($row=mysqli_fetch_array($result)){#迴圈讀取公告資料，並輸出到表格
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];#公告編號
            echo "</td><td>";
            echo $row["type"];#公告類別
            echo "</td><td>"; 
            echo $row["title"];#標題
            echo "</td><td>";
            echo $row["content"]; #內容
            echo "</td><td>";
            echo $row["time"];#發布時間
            echo "</td></tr>";
        }
        echo "</table>";#結束表格
    
    }

?>
