<?php
    $str1='This is single line statement';
    $str2="This is double line statement";
    $str3='This is \' single quote\'';
    $str4="This is \\slash";
    $str5="'single quote inside double quote'";
    //echo $str1."<br>".$str2."<br>".$str3."<br>".$str4."<br>".$str5;
    echo "$str1<br>$str2<br>$str3<br>$str4<br>$str5";

    $dq="double quote inside \"double quote\"";
    echo "<br>".$dq;

    $x=1999;
    echo "<br> My year of birth is :$x";

    echo"<h1>String Functions:</h1>";

    $str="My name is MadhuBalan M";

    echo strtolower($str)."<br>";
    echo strtoupper($str)."<br>";
    echo ucfirst($str)."<br>";
    echo lcfirst($str)."<br>";
    echo ucwords($str)."<br>";
    echo strrev($str)."<br>";
    echo strlen($str)."<br>";

    echo"<h1>Math Functions:</h1>";

    echo ceil(2.4)."<br>";
    echo floor(2.4)."<br>";
    echo abs(-2.4)."<br>";
    echo abs(-19)."<br>";
    echo sqrt(81)."<br>";

    echo decbin(22)."<br>";
    echo dechex(22)."<br>";
    echo decoct(22)."<br>";

    echo bindec(1111)."<br>";
    echo hexdec(123)."<br>";
    echo octdec(11)."<br>";






?>