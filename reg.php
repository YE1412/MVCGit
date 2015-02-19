<?php
	function renderPregReplace()
	{
		$callback=function($x){
			return print_r($x);
		};
		$stra='{{user.login.mdp}}';
		$pattern='/(?:{{)((?:[a-z]+)(?:\.(?:[a-z]+))*)(?:}})/';
		//preg_replace();
		echo preg_replace_callback($pattern, $callback, $stra);

	}
	function renderPregMatch()
	{	
		$stra='{{user.login.mdp}}';
		$pattern='/(?:{{)((?:[a-z]+)(?:\.(?:[a-z]+))*)(?:}})/';
		echo preg_match($pattern, $stra, $matches);
		//print_r($matches);
	}
	renderPregMatch();
	renderPregReplace();
?>