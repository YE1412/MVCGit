<?php
	echo preg_replace_callback("({{user}})", function ($matches) {
            return "Yannick";
        }, file_get_contents('accueil.html'));
?>