 <?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($tattoo.mast@yandex.ru);
 $fio = urldecode($fio);
 $email = urldecode($tattoo.mast@yandex.ru);
 $fio = trim($fio);
 $email = trim($tattoo.mast@yandex.ru);
 if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: tattoo.mast@yandex.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>

ini_set('display_errors','On');
error_reporting('E_ALL');