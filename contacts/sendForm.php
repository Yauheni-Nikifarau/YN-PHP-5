<?php
require_once './validateFunc.php';
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$file = $_POST['file'] ?? '';
if (validateForm($name, $phone, $email, $message)) :
    move_uploaded_file($_FILES['file']['tmp_name'] ,__DIR__.'\\files\\'.$_FILES['file']['name']);
    $filepath = './files/'.$_FILES['file']['name'];
    $fp = fopen($filepath, 'r');
    $fileToSend = fread($fp, filesize($filepath)); 
    fclose($fp);
    $boundary = "--".md5(uniqid(time()));
    $mailheaders = "MIME-Version: 1.0;\r\n";
    $mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $mailheaders .= "From: $name <nikeugene@mail.ru>\r\n";
    $mailheaders .= "Reply-To: nikeugene@mail.ru\r\n";
    $multipart = "--$boundary\r\n";
    $multipart .= "Content-Type: text/html; charset=windows-1251\r\n";
    $multipart .= "Content-Transfer-Encoding: base64\r\n";
    $multipart .= "\r\n";
    $multipart .= chunk_split(base64_encode(iconv("utf-8", "windows-1251", $message)));
    $message_part = "\r\n--$boundary\r\n";
    $message_part .= "Content-Type: application/octet-stream; name=\"{$_FILES['file']['name']}\"\r\n";
    $message_part .= "Content-Transfer-Encoding: base64\r\n";
    $message_part .= "Content-Disposition: attachment; filename=\"{$_FILES['file']['name']}\"\r\n";
    $message_part .= "\r\n";
    $message_part .= chunk_split(base64_encode($fileToSend));
    $message_part .= "\r\n--$boundary--\r\n";
    $multipart .= $message_part;
    mail($email, 'classwork', $multipart, $mailheaders);

    header("refresh:10;url=./");
    ?>

    <p>Мы вам перезвоним.</p>

<?php else:
    header('Location: ./');
    endif;
?>