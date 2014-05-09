
<table>
<th>
<?php

$result=count($cards);
$counter=0;
$stack = array();
echo "<table>";
for($i=0;$i<$result;$i++){
	$src=$cards[$i]['Picture'];
	$id=$cards[$i]['id'];
	if(0<$counter&&$counter<5){
	echo "<td>";
		$pildilink= "<img  name='clickcard' src=\"$src\" class=\"card\" alt=\"pic\"/>";
		echo "$pildilink";
	echo "</td>";
		$counter=$counter+1;
	}
	if($counter==0){
		$pildilink= "<img  name='clickcard' src=\"$src\" class=\"card\" alt=\"pic\"/>";
		echo "<tr>";
		echo "<th>";
		echo "$pildilink";
		echo "</th>";
		$counter=$counter+1;
	}
	
	if($counter==4){
		echo "</tr>";
		$counter=0;
	}
}
echo "</table>";

?>

</th>
<th align="right">
Deck making coming soon.
</th>
</table>
