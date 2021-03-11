<?php
	$i=1;
	$S=0;
	while ($i<=100){
		$S += $i;
		$i++;
	}
	echo "Tổng của 100 số nguyên từ 1-100 là: ".$S;
?>
<?php
	$i=20;
	echo "<br/>Số chia hết cho 3 từ 20-50 là: ";
	while ($i<=50){
		if($i%3==0){
			echo $i.';';
		}
		$i++;
	}
?>