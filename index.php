<?php
	include('User.class.php');
	include('View.class.php');
	session_start();

	$user=new User("php", "root", "");
	//$user->display();
	//die();
	if($_POST){
		switch ($action) {
			case 'L':
				$_SESSION['user']=$user->login($_POST['login'], $_POST['pass']);
				if($_SESSION['user'])
				{
					$view=new View("accueil.html");
					echo $view->render($_SESSION);	
				}
				else
				{
					//print_r($_POST);
					$view=new View("login.html");
					echo $view->render($_POST);
				}
				break;
			case 'C':
				$user->setPassword($_POST['$newPass']);
				echo "Password Changed !";
				$view=new View("accueil.html");
			default:
				break;
		}
	}
	else
	{
		$view=new View("login.html");
		echo $view->render(array());
	}
?>