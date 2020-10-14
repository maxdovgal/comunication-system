<?php 
	require_once('./config.php');

	if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on' ) {
	} else {
		header('Location: ./index.php');
	}

	$pageTitle = 'Кабинет студента';
?>


<?php echo ('Кабинет студента'); ?>
	