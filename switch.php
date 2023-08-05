
<?php    
$num=6;    
switch($num){    
case 10:    
echo("number is equals to 10");    
break;    
case 20:    
echo("number is equal to 20");    
break;    
case 30:    
echo("number is equal to 30");    
break;    
default:    
echo("number is not equal to 10, 20 or 30");    
}

echo "<h2>Break Statement :</h2>";

for($i=0; $i<30; $i++)
{
    echo "<b>$i</b><br>";
    if($i==10){
        break;
    }
}
?> 
