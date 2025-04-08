<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #mysqli_connect() 建立資料庫連結
    $result=mysqli_query($conn, "select * from bulletin"); #mysqli_query() 從資料庫查詢資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#建立html表格並設定標題列
    while ($row=mysqli_fetch_array($result)){#mysqli_fetch_array()從查詢出來的資料一筆一筆讀取
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
