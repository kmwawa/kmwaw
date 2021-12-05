<!DOCTYPE html>
<html lange="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="withe=decive-width, initial-scale=1.0">
    <title>KOMUNIKACJA MIEJSKA W WARSZAWIE</title>

<body onload="search();">	
<input type="text" placeholder="Szukaj"><br>
  <div id="response_box"></div>
	
	<style>
	
	body {
      font-family: sans-serif;
	  	 
    }
   
  
v {
		font-size: 30px;
	
	}
	v1 {
		font-size: 18px;
	
	}
    c {
		
		background-color: red;
		color: white;
		text-align: center;
		display: inline-block;
		
        width: 100%;
	}
	
	
    
	
	m {
		color: white;
		font-size: 18px;
	}
	
	table {
		margin-left: 20px;
	}
</style>
<br> 

<?php 	$homepage = file_get_contents("https://api.um.warszawa.pl/api/action/dbtimetable_get/?id=e923fa0e-d96c-43f9-ae6e-60518c9f3238&busstopId=1152&busstopNr=01&line=114&apikey=eb6e7232-e652-473c-9fa6-5492e4c8e9b6");;

//echo $homepage;
if($homepage)


$dane = json_decode($homepage,false);
		//print_r($dane);
		for($i=0;$i<sizeof($dane->result);$i++)
		
		{
	     echo     "<c>"."<table>"."<tr>"."<td>";
			
			 echo  "<m>"."<b>".
			$dane->result[$i]->values[2]->value."/"."</m>"."</b>"."<v>"."<b>114</b>"."</v>"."</td>"."<td>";
	 echo  "➔"."&nbsp;".
			 $dane->result[$i]->values[3]->value."&nbsp;"."<br>";
	echo     "<v1>"."<b>".
			$dane->result[$i]->values[5]->value."</b>"."</v1>"."</td>"."</tr>"."</table>"."</c>";
		}
		
	?>	
		








 
	
