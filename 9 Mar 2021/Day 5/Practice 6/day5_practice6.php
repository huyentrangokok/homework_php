<?php
	$i=1;
	while($i<=1000){
		$j=1;
		$i++;
		while($j<$i){
			if($i%$j!=0){
				echo $i.'<br/>';
				$j++;
			}
		}
	}
?>