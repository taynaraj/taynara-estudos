<?php  
	$a[] = 'tay';
	$a[] = 'rodrigo';
	$a[] = 'gabi';
	
	$b = 10;
	$max = sizeof($a);

	echo "<table border = '1'>
			<tr>
				<th>coluna 1</th><th>coluna 2</th>
			</tr>
		  ";
	foreach ($a as $key =>$x) 
	{
		$z=$key+1;
		echo "
			<tr>
				<td> $z</td><td> $x</td> 
			</tr>
		  ";
		  

	}
	echo "</table>";

?>