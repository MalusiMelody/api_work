<?php

function absurd(int $x,int $y, bool $to_words):string{
	$sum = $x + $y;
	if ($to_words){
		echo 'Is not a number' . $to_words;
	}
	return $sum;
}

$sum=absurd(3,4);


?>