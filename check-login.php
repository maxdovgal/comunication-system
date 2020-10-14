<?php 
	require_once('./config.php');

    if(isset($_POST["login"])){

        if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = ($_POST['login']);
        $password = ($_POST['password']);
        $sql = "SELECT * FROM users WHERE login ='".$login."' AND password='".$password."'" ;
        $result = $db->query($sql);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        $dblogin = $user['login'];
        $dbpassword = $user['password'];
        if($login == $dblogin && $password == $dbpassword){
            if ($user['id'] == 1){
                $_SESSION['login'] = 'on';
                header('Location: teacher.php');
            } else{
                $_SESSION['login'] = 'on';
                header('Location: student.php');
            }
            
        } else {
            header('Location: ./index.php');
        }
        }
    }

?>