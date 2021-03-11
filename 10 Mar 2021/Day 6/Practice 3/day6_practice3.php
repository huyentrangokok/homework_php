<?php
	$strA='Khóa đào tạo Lập trình Web sử dụng PHP';
	$strB=' ';
	$count=0;
	for($i=0;$i<strlen($strA);$i++){
		if($strA[$i]==$strB){
			$count++;
		}
	}
	echo 'Số lần xuất hiện của B trong A là :'.$count;
?>