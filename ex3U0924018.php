<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>HW3</title>
</head>
<body>
<?php 
$ans = ""; // 初始變數值
$length = "";  // 保留的欄位值
$height = "";
$bottom = "";
$showform = true;  // true顯示表單(輸入格)
// 檢查是否是表單送出
if ( isset($_GET["Reg"]) ) {
    // 取得表單欄位值
    $length = (float)$_GET["length"];
    $bottom = (float)$_GET["bottom"];
    $height = (float)$_GET["height"];
      
   // 表單處理, 顯示欄位輸入的資料
   $showform = false;
   $ans=($length+$bottom)*$height/2;
}
?>
<?php if ( $showform ) { // 顯示網頁表單
?>
<h3>梯形面積</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
頂長: <input type="text" name="length" size ="10" 
             value="<?php echo $length ?>"/><br/>
底長: <input type="text" name="bottom" size="10"
             value="<?php echo $bottom ?>"/><br/>
高度: <input type="text" 
                   name="height" size="10"
                   value="<?php echo $height ?>" /><br/>
<input type="submit" name="Reg" value="送出"/>
</form>
<?php 
} else
   {
?>
<table border="2">
   <tr>
      <td>
         頂長
      </td>
      <td>
         <?php echo $length ?>
      </td>
   </tr>
   <tr>
      <td>
         底長
      </td>
      <td>
         <?php echo $bottom ?>
      </td>
   </tr>
   <tr>
      <td>
         高度
      </td>
      <td>
         <?php echo $height ?>
      </td>
   </tr>
   <tr>
      <td>
         面積
      </td>
      <td>
         <?php echo $ans ?>
      </td>
   </tr>
</table>
<?php
   }
?>
</body>
</html>