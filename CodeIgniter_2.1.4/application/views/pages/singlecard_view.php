
<table>
<tr>
<th>
<?php

$result=count($cards);
$counter=0;
echo "<table>";
for($i=0;$i<$result;$i++){
	$src=$cards[$i]['Picture'];
	$src2=$cards[$i]['img_golden'];
	if($counter==0){
		echo "<td>";
		echo "<th>";
		echo "<img src=\"$src\" class=\"card\" alt=\"pic\"/>";
		echo "</th>";
		echo"</td>";
		echo"<td>";
		echo"<th>";
		echo "<img src=\"$src2\" class=\"card\" alt=\"pic\"/>";
		echo "</th>";
		echo"</td>";
	}
}
echo "</table>";
?>
</th>
<th valign="middle"><table ><tr>
											<th align="left">Name: <?php $name=$cards[0]['Name']; echo"$name";?></th>
                                            </tr>
                                                                                                                                    <tr>
                                            <th align="left">Type: <?php $type=$cards[0]['minion_type']; echo"$type";?></th>
                                            </tr>
                                            <th align="left">Set: <?php $set=$cards[0]['set']; echo"$set";?></th>
                                            </tr>
                                             <tr>
                                            <th align="left">Manacost: <?php $manacost=$cards[0]['Manacost']; echo"$manacost";?></th>
                                            </tr>
                                                                                        <tr>
                                            <th align="left">Attack: <?php $attack=$cards[0]['Attack']; echo"$attack";?></th>
                                            </tr>
                                                                                        <tr>
                                            <th align="left">Health: <?php $health=$cards[0]['Health']; echo"$health";?></th>
                                            </tr>
                                                                                        <tr>
                                            <th align="left">Description: <?php $desc=$cards[0]['Description']; echo"$desc";?></th>
                                            </tr>
                                            <tr>
											<th align="left"><?php $set=$cards[0]['set']; 
											if($set=='Common'){
												echo 'Crafted: 40/400';}
											if($set=='Rare'){
												echo"Crafted: 100/800";}
											if($set=='Epic'){
												echo"Crafted: 400/1600";}
											if($set=='Legendary'){
												echo'Crafted: 1600/3200';}?></th>
                                            </tr>
                                            <tr>
											<th align="left"><?php $set=$cards[0]['set']; 
											if($set=='Common'){
												echo 'Disenchantable: 5/50';}
											if($set=='Rare'){
												echo"Disenchantable: 20/100";}
											if($set=='Epic'){
												echo"Disenchantable: 100/400";}
											if($set=='Legendary'){
												echo'Disenchantable:400/1600';}?></th>
                                            </tr>
                                            
                            </table>
</th>                
</tr>
</table>