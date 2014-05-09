

<?php

$result=count($deckexampl);
echo "<table border=1>";
echo"<tr>";
echo"<th> Deck name </th>";
echo"<th> Author</th>";
echo"</tr>";
echo"<tr>";
for($i=0;$i<$result;$i++){
	echo "<td width='300px'>";
	$deckname=$deckexampl[$i]['name'];
	echo "<a href='singledeck'>$deckname</a>";
	echo"</td>";
	echo "<td>";
	$madeby=$deckexampl[$i]['madeby'];
	echo $madeby;
	
		echo"</td>";
}
echo"</tr>";

echo "</table>";
?>
