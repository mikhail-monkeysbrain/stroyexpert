<?
//С начала нужно закачать файл на сервер



//$headers = "Content-type: text/plain; charset=windows-1251 \r\n"; 


//$to = "vokayleb1@gmail.com";
//$subject2 = "Нам нужны партнеры";
//$subject = mb_convert_encoding($subject2, "CP1251", "UTF-8");

$name = $_POST['user_name'];
$mail = $_POST['user_email'];
$phone = $_POST['user_phone'];
//$profession = $_POST['profession'];


$a1 = "Ф.И.О: ";
$a2 = "Сообщение: ";
//$a4 = "Название организации: ";


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



$s66 = "Заполните поля отмеченные *";
$s666 = mb_convert_encoding($s66, "utf-8", "CP1251");


//затем с сервера файл отправляем на mail

if (!empty($name)  && !empty($mail) && !empty($phone)) //если все переменные имеют значения выполняем запись в файл
    {

						$file = $_FILES['file']['tmp_name'];
						$filename = $_FILES['file']['name'];

						$to = "vokayleb1@gmail.com"; // E-mail получателя
						$from ="StroyExpert" ; // E-mail отправителя
						$subject = "Сообщение с формы связи"; // Тема сообщения

						if(!empty($file))
						{
						  ini_set('memory_limit', '32M');
						  $maxsize = "10000000";
						  $extentions = array( "gif","txt","jpg","png","zip", "rar","psd","flv","doc","xls","ppt");
						  $size = filesize ($_FILES['file']['tmp_name']);
						  $type = strtolower(substr($filename, 1+strrpos($filename,".")));
						  $new_name = 'file-'.time().'.'.$type;

						  copy($file, "zagruzka/".$new_name);
						  $dir    = './zagruzka/'; //директория где лежит файл
						  $files1 = scandir($dir); //все файлы из директории $dir нам нужен 3й элемент из массива
						  $filename = $dir.$files1[2]; // Имя прикрепленного файла

						  $massege = $s111."\n".$s222."\n".$s333."\n".$s444;


						  $boundary = "---"; //Разделитель
						  $headers = "From: $from\nReply-To: $from\n";
						  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \r\n";



						  $body = "--$boundary\n";
						/* Соединяем файл и сообщение */
						  $body .= "Content-type: text/plain; charset='windows-1251 \r\n";
						  $body .= "Content-Transfer-Encoding: quoted-printablenn";
						  $body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";

						  $body .= $massege."\n";


						  $body .= "--$boundary\n";
						  $file = fopen($filename, "r"); // Открытие файла
						  $text = fread($file, filesize($filename)); // Читаем весь файл
						  fclose($file); // Закрытие файла
						  /* Кодирование текста файла */
						  $body .= "Content-Type: application/octet-stream; name==?cp1251?B?".base64_encode($filename)."?=\n"; 
						  $body .= "Content-Transfer-Encoding: base64\n";
						  $body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";
						  $body .= chunk_split(base64_encode($text))."\n";
						  $body .= "--".$boundary ."--\n";


							$massege = 'Файл больше 10 мб. Уменьшите размер вашего файла или загрузите другой.';
							$massege = "<p style=\"color:red; font-size:20px\">".$massege."</p>";
							$massege = mb_convert_encoding($massege, "UTF-8", "CP1251");

							$massege2 = 'Файл имеет недопустимое расширение. Допустимыми являются форматы текстовых документов.';
							$massege2 = "<p style=\"color:red; font-size:20px\">".$massege2."</p>";
							//$massege = mb_convert_encoding($massege, "CP1251", "UTF-8");
							$massege2 = mb_convert_encoding($massege2, "UTF-8", "CP1251");

						  if($size > $maxsize)
						  {
								echo $massege;
							  //echo "<script>alert('Файл больше 10 мб. Уменьшите размер вашего файла или загрузите другой.')</script>";
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
							  /*if (copy($file, "zagruzka/".$new_name))   //resume папка в которую загружается файл

								  echo "<script>alert('Файл загружен!')</script>";
									else echo "<script>alert('Файл НЕ был загружен.')</script>";*/
						
							  //echo "<script>history.back();</script>";


							$res=mail($to, $subject, $body, $headers); //Отправка письма
							unlink($dir.$files1[2]);  //удаляем файл из директории
						  }
	}




				else{

						$massege = $s111."\n".$s222."\n".$s333."\n".$s444;
						//$massege = mb_convert_encoding($massege, "UTF-8", "CP1251");

						$boundary = "---"; //Разделитель
						$headers = "From: $from\nReply-To: $from\n";
						$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \r\n";



						$body = "--$boundary\n";
						/* Соединяем файл и сообщение */
						$body .= "Content-type: text/plain; charset='windows-1251 \r\n";
						$body .= "Content-Transfer-Encoding: quoted-printablenn";
						$body .= "Content-Disposition: attachment; filename==?cp1251?B?".base64_encode($filename)."?=\n\n";
						//$body .= $massege."\n";
						$body .= $massege."\n";

						$res=mail($to, $subject, $body, $headers); //Отправка письма

   					}
	}

	else{

		echo "<p style=\"color:red; font-size:20px\">".$s666."</p>";

		echo       //выполняет задержку и выполняет history.back()
		"<script>
			function fun(){
				history.back();
			}
			setTimeout(fun, 1000);
		</script>";
	}

$s55 = "Ваше сообщение отправлено!"; 
$s555 = mb_convert_encoding($s55, "utf-8", "CP1251");
//$s555 = mb_convert_encoding($s555, "UTF-8", "CP1251"); // меняем кодировку


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
