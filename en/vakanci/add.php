<?
//� ������ ����� �������� ���� �� ������



//$headers = "Content-type: text/plain; charset=windows-1251 \r\n"; 


//$to = "vokayleb1@gmail.com";
//$subject2 = "��� ����� ��������";
//$subject = mb_convert_encoding($subject2, "CP1251", "UTF-8");

$name = $_POST['user_name'];
$mail = $_POST['user_email'];
$phone = $_POST['user_phone'];
//$profession = $_POST['profession'];


$a1 = "�.�.�: ";
$a2 = "���������: ";
//$a4 = "�������� �����������: ";


//$a1 = mb_convert_encoding($a1, "CP1251", "UTF-8");
//$a2 = mb_convert_encoding($a2, "CP1251", "UTF-8");
//$a4 = mb_convert_encoding($a4, "CP1251", "UTF-8");

//$name = mb_convert_encoding($name, "CP1251", "UTF-8");
//$phone = mb_convert_encoding($phone, "CP1251", "UTF-8");
//$mail = mb_convert_encoding($mail, "CP1251", "UTF-8");
//$profession = mb_convert_encoding($profession, "CP1251", "UTF-8");


$s111 = $a1.$name;
$s222 = $a2.$phone;
$s333 = "e-mail: ".iconv("utf-8", "cp1251", $mail);
//$s444 = $a4.$profession;


//$massege = $s111."\n".$s222."\n".$s333."\n".$s444;



$s66 = "��������� ���� ���������� *";
$s666 = mb_convert_encoding($s66, "utf-8", "CP1251");


//����� � ������� ���� ���������� �� mail

if (!empty($name)  && !empty($mail) && !empty($phone)) //���� ��� ���������� ����� �������� ��������� ������ � ����
    {

						$file = $_FILES['file']['tmp_name'];
						$filename = $_FILES['file']['name'];

						$to = "vokayleb1@gmail.com"; // E-mail ����������
						$from ="StroyExpert" ; // E-mail �����������
						$subject = "��������� � ����� �����"; // ���� ���������

						if(!empty($file))
						{
						  ini_set('memory_limit', '32M');
						  $maxsize = "10000000";
						  $extentions = array( "gif","txt","jpg","png","zip", "rar","psd","flv","doc","xls","ppt");
						  $size = filesize ($_FILES['file']['tmp_name']);
						  $type = strtolower(substr($filename, 1+strrpos($filename,".")));
						  $new_name = 'file-'.time().'.'.$type;

						  copy($file, "zagruzka/".$new_name);
						  $dir    = './zagruzka/'; //���������� ��� ����� ����
						  $files1 = scandir($dir); //��� ����� �� ���������� $dir ��� ����� 3� ������� �� �������
						  $filename = $dir.$files1[2]; // ��� �������������� �����

						  $massege = $s111."\n".$s222."\n".$s333."\n".$s444;


						  $boundary = "---"; //�����������
						  $headers = "From: $from\nReply-To: $from\n";
						  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \r\n";



						  $body = "--$boundary\n";
						/* ��������� ���� � ��������� */
						  $body .= "Content-type: text/plain; charset='windows-1251 \r\n";
						  $body .= "Content-Transfer-Encoding: quoted-printablenn";
						  $body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";

						  $body .= $massege."\n";


						  $body .= "--$boundary\n";
						  $file = fopen($filename, "r"); // �������� �����
						  $text = fread($file, filesize($filename)); // ������ ���� ����
						  fclose($file); // �������� �����
						  /* ����������� ������ ����� */
						  $body .= "Content-Type: application/octet-stream; name==?cp1251?B?".base64_encode($filename)."?=\n"; 
						  $body .= "Content-Transfer-Encoding: base64\n";
						  $body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";
						  $body .= chunk_split(base64_encode($text))."\n";
						  $body .= "--".$boundary ."--\n";


							$massege = '���� ������ 10 ��. ��������� ������ ������ ����� ��� ��������� ������.';
							$massege = "<p style=\"color:red; font-size:20px\">".$massege."</p>";
							$massege = mb_convert_encoding($massege, "UTF-8", "CP1251");

							$massege2 = '���� ����� ������������ ����������. ����������� �������� ������� ��������� ����������.';
							$massege2 = "<p style=\"color:red; font-size:20px\">".$massege2."</p>";
							//$massege = mb_convert_encoding($massege, "CP1251", "UTF-8");
							$massege2 = mb_convert_encoding($massege2, "UTF-8", "CP1251");

						  if($size > $maxsize)
						  {
								echo $massege;
							  //echo "<script>alert('���� ������ 10 ��. ��������� ������ ������ ����� ��� ��������� ������.')</script>";
								echo "<script>
										function fun(){
											history.back();
										}	
										setTimeout(fun, 2000);
									</script>";
						  }
						  elseif(!in_array($type,$extentions))
						  {
							  echo $massege2;
							  //echo "<script>alert('')</script>";
							  echo "<script>
										function fun(){
											history.back();
										}	
										setTimeout(fun, 2000);
									</script>";
						  }
						  else 
						  {
							  /*if (copy($file, "zagruzka/".$new_name))   //resume ����� � ������� ����������� ����

								  echo "<script>alert('���� ��������!')</script>";
									else echo "<script>alert('���� �� ��� ��������.')</script>";*/
						
							  //echo "<script>history.back();</script>";


							$res=mail($to, $subject, $body, $headers); //�������� ������
							unlink($dir.$files1[2]);  //������� ���� �� ����������
						  }
	}




				else{

						$massege = $s111."\n".$s222."\n".$s333."\n".$s444;
						//$massege = mb_convert_encoding($massege, "UTF-8", "CP1251");

						$boundary = "---"; //�����������
						$headers = "From: $from\nReply-To: $from\n";
						$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \r\n";



						$body = "--$boundary\n";
						/* ��������� ���� � ��������� */
						$body .= "Content-type: text/plain; charset='windows-1251 \r\n";
						$body .= "Content-Transfer-Encoding: quoted-printablenn";
						$body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";
						//$body .= $massege."\n";
						$body .= $massege."\n";

						$res=mail($to, $subject, $body, $headers); //�������� ������

   					}
	}

	else{

		echo "<p style=\"color:red; font-size:20px\">".$s666."</p>";

		echo       //��������� �������� � ��������� history.back()
		"<script>
			function fun(){
				history.back();
			}
			setTimeout(fun, 1000);
		</script>";
	}

$s55 = "���� ��������� ����������!"; 
$s555 = mb_convert_encoding($s55, "utf-8", "CP1251");
//$s555 = mb_convert_encoding($s555, "UTF-8", "CP1251"); // ������ ���������


if($res == true){
	echo "<p style=\"color:green; font-size:20px\">".$s555."</p>";
	echo 
		"<script>
			function fun(){
				history.back();
			}
			setTimeout(fun, 1000);
		</script>";
} 














						






?>
