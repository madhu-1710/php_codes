<?php

echo "<h1>Indexed Array :</h1>";

$ind=array("Ananthi","Akshaya","Varsha","Narmadha");

echo "<h3>Sorted Array</h3>";

sort($ind);

print_r($ind);

echo "<br>";
echo "<br>";

echo "<b>Number of Crush : </b>".count($ind);



echo "<br>";
echo "<br>";







foreach($ind as $crush)
{
    echo $crush."<br>";
}

echo "<h3>My Crushes:</h3>";
echo $ind[0]."<br>";
echo $ind[1]."<br>";
echo $ind[2]."<br>";
echo $ind[3];

$sports[0]="Cricket";
$sports[1]="Volleyball";
$sports[2]="Football";
$sports[3]="Basketball";

echo "<h3>My Favorite Sports:</h3>";
echo $sports[0]."<br>";
echo $sports[1]."<br>";
echo $sports[2]."<br>";
echo $sports[3];

/*--------------------------------------------------*/ 

echo "<h1>Associative Array :</h1>";

$bike = array("Bajaj"=>"NS200","TVS"=>"Apache 200","Yamaha"=>"Mt15","KTM"=>"RC390");

foreach($bike as $b=>$m)
{
    echo "Brand: $b ---> Model: $m <br>";
}

echo "<h3>My Favorite Bikes:</h3>";
echo $bike['Bajaj']."<br>";
echo $bike['TVS']."<br>";
echo $bike['Yamaha']."<br>";
echo $bike['KTM'];


$cars['Mahindra']="Thar";
$cars['Hyundai']="Verna";
$cars['Suzuki']="Swift-Dzire";
$cars['Renault']="Kwid";

echo "<h3>My Favorite Cars:</h3>";
echo $cars['Suzuki']."<br>";
echo $cars['Mahindra']."<br>";
echo $cars['Hyundai']."<br>";
echo $cars['Renault'];

/*--------------------------------------------------*/ 

echo "<h1>Multi-dimentional Array :</h1>";

$marks =array(
    array("Exam","Tamil","English","Maths","Science","Social"),
    array("Quartaly",94,88,74,87,89),
    array("Half-Yearly",93,89,87,97,98),
    array("Annual",99,96,98,100,99)
);

for($row=0; $row<4; $row++){
    for($col=0; $col<6; $col++){
        echo $marks[$row][$col] ."---------";
    }
    echo "<br>";
}


$mark =array(
    array("Exam","Tamil","English","Maths","Science","Social"),
    array("Quartaly",94,88,74,87,89),
    array("Half-Yearly",93,89,87,97,98),
    array("Annual",99,96,98,100,99)
);

for($r=0;$r<4;$r++)
{
    for($c=0;$c<6;$c++)
    {
        echo 
        "<table>".
        "<tr>".$mark[$r][$c]."</tr>"
        ."</table>";
    }
    echo nl2br("\n");
}


echo "<h2>Commentary</h2>";

echo nl2br("Kohli goes down the ground \n Kohli goes out of the ground");

?>