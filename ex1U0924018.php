<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ex1U0924018</title>
</head>
<body>
<table border="1"> 
<?php 
for ( $i=1;$i <= 5; $i++ ) {
   for ( $j = 1;$j <= $i;$j++ ) { 
      print $j ;
    }
   print "</br>";
}

print "</br>";

for ( $i=1;$i <= 5; $i++ ) {
   for ( $j = 5;$j >= $i;$j-- ) { 
      print $j ;
    }
   print "</br>";
}

print "</br>";
for ( $i=1;$i <= 5; $i++ ) {
   $n=9;
   for ( $j = 1;$j <= $i;$j++ ) {  
      
      print $n ;
      $n=$n-2;
    }
   print "</br>";
}
?>
</table>
</body>
</html>