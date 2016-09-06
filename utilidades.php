<?php

function clear($string){
	$result = htmlspecialchars($string,ENT_QUOTES);
	$result = str_replace("\n","<br/>", $result);
	return $result;
}