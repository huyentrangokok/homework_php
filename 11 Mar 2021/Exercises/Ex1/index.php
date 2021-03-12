<?php
	function countWords($str){
		$searchedString='Write a function countWords($str) that takes any string of characters and finds number of time each string occurs.';
		$separator=explode($searchedString);
		echo substr_count($separator,$searchedString);
	}
?>