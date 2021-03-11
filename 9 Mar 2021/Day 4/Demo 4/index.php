<?php
	const numN='8';
	const strX='PHP';
	const arrA=array('PHP','năm 2021','Lập trình viên','Javascript','homework8');
	$count=0;
	for($i=0;$i<count(arrA);$i++){
		if(arrA[$i]==numN){
			$count++;
		}
	}
	echo 'Số lần xuất hiện của numN trong arrA là :'.$count;
	for($i=0;$i<count(arrA);$i++){
		if(arrA[$i]==strX){
			$count++;
		}
	}
	echo '<br/>Số lần xuất hiện của strX trong arrA là :'.$count;
?>