<?php

//error handler function - Added 4APR2017
error_reporting(E_ERROR);

if (!file_exists("logs/" . $_POST['dir'] . "/log.htm")) {
	echo "<script>alert('Please provide log.htm in " . $_POST['dir'] . " directory ');</script>";
	die();
}

$myfile = fopen("logs/" . $_POST['dir'] . "/log.htm" , "r") or die("Unable to open file!");
$isFirst = true;
echo "<table border=10 >";
echo "<tr> <th> Log Location </th><th> Line Number </th><th> Verb </th><th> Possible CC Number </th><th> PTR Number </th></tr>";
$keywords = "";

while(!feof($myfile)) {
	$str = fgets($myfile);
	//$str = str_replace("&lt;","<",$str);
	//$str = str_replace("&gt;",">",$str);
	if($isFirst) {
		$str = str_replace("<html> <head> <style type=\"text/css\"> r {color:red;} </style> </head>  ","", $str);
		$isFirst = false;
	}
	$arr = explode(";", $str);


	if (isset($arr[3])) {
		$keywords.="&keywords=" . trim(strip_tags($arr[count($arr)-1]));
	}
}

//$arrKeywordPTR = (array) json_decode((file_get_contents("http://aproach.muc.amadeus.net/api/json/records/?type=PTR&assignee_group=DRDMPSS" . $keywords)));

// #####################################
// Updated New API URL 4APR2017

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

//######################################

$arrKeywordPTR = (array) json_decode((file_get_contents("http://aproach-api.muc.amadeus.net/api/json/records?type=PTR&assignee_group=DRDMPSS" . $keywords)));
fclose($myfile);


$myfile = fopen('logs/' . $_POST['dir'] . '/log.htm', "r") or die("Unable to open file!");
$isFirst = true;

while(!feof($myfile)) {
	$str = fgets($myfile);
	//$str = str_replace("&lt;","<",$str);
	//$str = str_replace("&gt;",">",$str);
	if($isFirst) {
		$str = str_replace("<html> <head> <style type=\"text/css\"> r {color:red;} </style> </head>  ","", $str);
		$isFirst = false;
	}
	$arr = explode(";", $str);


	if (isset($arr[3])) {
		$rnids = "";
		foreach ($arrKeywordPTR["records"] as $a)
		{
			$a = (array)$a;
			$a = $a["common"];
			$a = (array)$a;
			$rnid = $a["rnid"];
			$keywords = $a["keywords"];
			if (strpos($keywords, trim(strip_tags($arr[count($arr)-1]))) !== false) {
				$rnids.= "<a href='http://aproach.muc.amadeus.net/NotesLink/nl?RNID=$rnid' target='_blank'>".$rnid. "</a>, ";
			}
		}


		//echo "<tr > <td>" . $arr[0] . "</td><td>" . $arr[1] . "</td><td>" . $arr[2] . $arr[3] . "</td><td>" . strip_tags($arr[count($arr)-1]) .
		//"</td><td>" . substr($rnids,0,-2)  . "</td></tr>";
		
		// Filter Unique Card numbers Only - Added 11Apr2017
		$resultArray[strip_tags($arr[count($arr)-1])] = array('loglocation'=> $arr[0],'linenumber'=> $arr[1], 'verb'=> $arr[2].$arr[3],'ticketNumber' => substr($rnids,0,-2) );
	}
}
		foreach($resultArray as $index => $result) {
				echo "<tr > <td>" . $result['loglocation'] . "</td><td>" . $result['linenumber'] . "</td><td>" . $result['verb'] . "</td><td>" . $index .
				 "</td><td>" . $result['ticketNumber']  . "</td></tr>";
		}
fclose($myfile);
echo "</table>";
?>