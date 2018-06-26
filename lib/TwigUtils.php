<?php

Class TwigUtils{

	public static function render($template, $vars = []){


		$loader = new Twig_Loader_Filesystem('../templates');
		$twig = new Twig_Environment($loader, array(
		    //'cache' => '/path/to/compilation_cache',
		));

		echo $twig->render($template, $vars);
		die;
	}

}

?>