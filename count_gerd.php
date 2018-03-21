<?php

if (!file_exists("logs/AETMWWGERD" . "/log.htm"))
{
echo "0";
}
else
{
$myfile = fopen("logs/AETMWWGERD" . "/log.htm", "r");
$isFirst = true;
$countgerd = 0;
$countgerd1 = 0;
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
	$countgerd = $countgerd1;
	if (isset($arr[1])) {
		
		//echo "<tr> <td>" . $arr[0] . "</td><td>" . $arr[1] . "</td><td>" . $arr[2] . $arr[3] . "</td><td>" . $arr[count($arr)-1] . "</td></tr>";
		$countgerd1 = $countgerd + 1 ;
	}
	
	
}
echo $countgerd1 ;
fclose($myfile);
}


//echo "</table>";

?>