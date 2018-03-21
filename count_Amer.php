<?php

if (!file_exists("logs/AETMUSAMER" . "/log.htm"))
{
echo "0";
}
else
{
$myfile = fopen("logs/AETMUSAMER" . "/log.htm", "r");
$isFirst = true;
$countamer = 0;
$countamer1 = 0;
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
	$countamer = $countamer1;
	if (isset($arr[1])) {
		
		//echo "<tr> <td>" . $arr[0] . "</td><td>" . $arr[1] . "</td><td>" . $arr[2] . $arr[3] . "</td><td>" . $arr[count($arr)-1] . "</td></tr>";
		$countamer1 = $countamer + 1 ;
	}
	
	
}
echo $countamer1 ;
fclose($myfile);
}


//echo "</table>";

?>