<?php

if (!file_exists("logs/AETMEU1EUR/" . "log.htm"))
{
echo "0";
}
else
{
$myfile = fopen("logs/AETMEU1EUR/" . "log.htm", "r");
$isFirst = true;
$counteu = 0;
$counteu1 = 0;
//echo "<table border=1>";

while(!feof($myfile)) {
	$str = fgets($myfile);
	//$str = str_replace("&lt;","<",$str);
	//$str = str_replace("&gt;",">",$str);
	if($isFirst) {
		$str = str_replace("<html> <head> <style type=\"text/css\"> r {color:red;} </style> </head>  ","", $str);
		$isFirst = false;
		
	}
	$arr = explode(";", $str);
	$counteu = $counteu1;
	if (isset($arr[1])) {
		
		//echo "<tr> <td>" . $arr[0] . "</td><td>" . $arr[1] . "</td><td>" . $arr[2] . $arr[3] . "</td><td>" . $arr[count($arr)-1] . "</td></tr>";
		$counteu1 = $counteu + 1 ;
	}
	
	
}
echo $counteu1 ;
fclose($myfile);
}


//echo "</table>";

?>