<?php

if (!file_exists("logs/SECOWWNEKO" . "/log.htm"))
{
echo "0";
}
else
{
$myfile = fopen("logs/SECOWWNEKO" . "/log.htm", "r");
$isFirst = true;
$countnek = 0;
$countnek1 = 0;
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
	$countnek = $countnek1;
	if (isset($arr[1])) {
		
		//echo "<tr> <td>" . $arr[0] . "</td><td>" . $arr[1] . "</td><td>" . $arr[2] . $arr[3] . "</td><td>" . $arr[count($arr)-1] . "</td></tr>";
		$countnek1 = $countnek + 1 ;
	}
	
	
}
echo $countnek1 ;
fclose($myfile);
}


//echo "</table>";

?>