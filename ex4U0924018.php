<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ex4U0924018</title>
</head>
<body>
<?php
$records_per_page = 3;  // 每一頁顯示的記錄筆數
// 取得URL參數的頁數
if (isset($_GET["Pages"])) $pages = $_GET["Pages"];
else                       $pages = 1;
$link = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "myschool");  // 選擇myschool資料庫
// 設定SQL查詢字串
$sql = "SELECT students.sno as 學號, students.name as 學生姓名, classes.cno as 教室, courses.title as 課堂名稱, courses.credits as 學分 FROM students INNER JOIN (courses INNER JOIN classes ON classes.cno=courses.cno) ON students.sno=classes.sno";
// 執行SQL查詢
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
// 計算總頁數
$total_pages = ceil($total_records/$records_per_page);
// 計算這一頁第1筆記錄的位置
$offset = ($pages - 1)*$records_per_page;
mysqli_data_seek($result, $offset); // 移到此記錄
echo "記錄總數: $total_records 筆<br/>";
echo "<table border=1><tr>";

echo "<td>"."次項"."</td>";

while ( $meta=mysqli_fetch_field($result) )
   echo "<td>".$meta->name."</td>";

echo "</tr>";
$j = 1;
$count =$offset+1;

while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)
       and $j <= $records_per_page) {

   echo "<tr>";

    echo "<td>".$count."</td>";
   for ( $i = 0; $i<= $total_fields-1; $i++ )
      echo "<td>".$rows[$i]."</td>";

   echo "</tr>";
   $j++;
   $count++;
}


echo "</table><br>";


if ( $pages > 1 )  // 顯示上一頁
   echo "<a href='ex4U0924018.php?Pages=".($pages-1).
        "'>上一頁</a>| ";
for ( $i = 1; $i <= $total_pages; $i++ )
   if ($i != $pages)
     echo "<a href=\"ex4U0924018.php?Pages=".$i."\">".
          $i."</a> ";
   else
     echo $i." ";
if ( $pages < $total_pages )  // 顯示下一頁
   echo "|<a href='ex4U0924018.php?Pages=".($pages+1).
        "'>下一頁</a> ";
mysqli_free_result($result);  // 釋放佔用的記憶體
?>
</body>
</html>