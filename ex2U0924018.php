<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ex1U0924014</title>
</head>
<body>
<table border="1"> 
<?php 
function Cost($hour){
   if($hour>50){
      $total=50*0.25+($hour-50)*0.1;
   }
   else{
      $total=$hour*0.25;
   }
   echo "$hour";
   echo "小時，連線費用:";
   echo "$total";
   echo "</br>";
}
function TemperatureConversion($temp,$type){
   if($type==1){     //攝氏C轉華氏F
      $F=9/5*$temp+32;
      echo "$temp";
      echo "攝氏轉華氏=";
      echo "$F";
      echo "</br>";
   }
   if($type==2){     //華氏F轉攝氏C
      $C=($temp-32)*5/9;
      echo "$temp";
      echo "華氏轉攝氏=";
      echo "$C";
      echo "</br>";
   }
}
function BMI($weight,$height){
   echo "體重:";
   echo "$weight";
   echo "公斤";
   echo "</br>";
   echo "身高:";
   echo "$height";
   echo "公分";
   echo "</br>";
   $height=$height/100;
   $bmi=$weight/($height*$height);
   echo "BMI=";
   echo "$bmi";
   echo "</br>";
}
Cost(50);
print"<hr>";
TemperatureConversion(100,1);
TemperatureConversion(100,2);
print"<hr>";
BMI(75,175);
print"<hr>";
?>
</table>
</body>
</html>