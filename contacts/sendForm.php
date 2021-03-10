<?php
require_once './validateFunc.php';
$name = $_GET['name'] ?? '';
$phone = $_GET['phone'] ?? '';
$email = $_GET['email'] ?? '';
$message = $_GET['message'] ?? '';
if (validateForm($name, $phone, $email, $message)) :
    header("refresh:10;url=./");?>

    <p>Мы вам перезвоним.</p>

<?php else:
    header('Location: ./');
    endif;
?>