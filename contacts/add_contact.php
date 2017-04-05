<?
//@session_start();


$headers = "Content-type: text/plain; charset=windows-1251 \r\n"; 


$to = "info@stroyexpert.pro";
$subject = "Сообщение с сайта stroyexpert";


$name = $_POST['user_name'];
//$phone = $_POST['user_phone'];
$mail = $_POST['user_email'];
$mass = $_POST['MESSAGE'];

//преводим в нужную кодировку из которой, в которую
$s111 = "Имя: ".iconv("utf-8", "cp1251", $name);
//$s222 = "Телефон: ".iconv("utf-8", "cp1251", $phone);
$s333 = "e-mail: ".iconv("utf-8", "cp1251", $mail);
$s444 = "Сообщение: ".iconv("utf-8", "cp1251", $mass);


//$massege = "Имя: ".$name."\n".$phone."\n".$mail."\n".$mass."";
$massege = $s111."\n".$s333."\n".$s444;

$s666 = "Заполните поля отмеченные *";
$s666 = mb_convert_encoding($s666, "UTF-8", "CP1251"); // меняем кодировку


if (!empty($name) && !empty($mail) && !empty($mass)) //если все переменные имеют значения выполняем запись в файл
    {
	$res = mail ($to,$subject,$massege,$headers);
	echo "<script> $('.inp1').val(''); </script>"; //очистка полей формы


    }
	else{
		echo "<p style=\"color:red; font-size:16px\">".$s666."</p>";
	}



$s555 = "Ваше сообщение отправлено!"; 
$s555 = mb_convert_encoding($s555, "UTF-8", "CP1251"); // меняем кодировку


if($res == true){
	echo "<p style=\"color:green; font-size:16px\">".$s555."</p>";
} 



?>