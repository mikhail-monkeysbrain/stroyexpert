<?
//@session_start();


$headers = "Content-type: text/plain; charset=windows-1251 \r\n"; 


$to = "info@stroyexpert.pro";
$subject = "��������� � ����� stroyexpert";


$name = $_POST['user_name'];
//$phone = $_POST['user_phone'];
$mail = $_POST['user_email'];
$mass = $_POST['MESSAGE'];

//�������� � ������ ��������� �� �������, � �������
$s111 = "���: ".iconv("utf-8", "cp1251", $name);
//$s222 = "�������: ".iconv("utf-8", "cp1251", $phone);
$s333 = "e-mail: ".iconv("utf-8", "cp1251", $mail);
$s444 = "���������: ".iconv("utf-8", "cp1251", $mass);


//$massege = "���: ".$name."\n".$phone."\n".$mail."\n".$mass."";
$massege = $s111."\n".$s333."\n".$s444;

$s666 = "��������� ���� ���������� *";
$s666 = mb_convert_encoding($s666, "UTF-8", "CP1251"); // ������ ���������


if (!empty($name) && !empty($mail) && !empty($mass)) //���� ��� ���������� ����� �������� ��������� ������ � ����
    {
	$res = mail ($to,$subject,$massege,$headers);
	echo "<script> $('.inp1').val(''); </script>"; //������� ����� �����


    }
	else{
		echo "<p style=\"color:red; font-size:16px\">".$s666."</p>";
	}



$s555 = "���� ��������� ����������!"; 
$s555 = mb_convert_encoding($s555, "UTF-8", "CP1251"); // ������ ���������


if($res == true){
	echo "<p style=\"color:green; font-size:16px\">".$s555."</p>";
} 



?>