

<?php

$result=count($cards);
$counter=0;
echo "<table>";
for($i=0;$i<$result;$i++){
	$src=$cards[$i]['Picture'];
	$id=$cards[$i]['id'];
	if(0<$counter&&$counter<5){
	echo "<td>";
	$pildilink= "<img src=\"$src\" class=\"card\" alt=\"pic\"/>";
	echo "<a href='singlecard?id=$id'> $pildilink </a>";
	echo "</td>";
		$counter=$counter+1;
	}
	if($counter==0){
		$pildilink= "<img src=\"$src\" class=\"card\" alt=\"pic\"/>";
		echo "<tr>";
		echo "<th>";
		echo "<a href='singlecard?id=$id'> $pildilink </a>";
		echo "</th>";
		$counter=$counter+1;
	}
	
	if($counter==5){
		echo "</tr>";
		$counter=0;
	}
}
echo "</table>";
?>
