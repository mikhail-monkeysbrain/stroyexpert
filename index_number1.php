<?if($_SERVER['REQUEST_URI']=='/'){?>

<div class="portfel_projects">
	<?
	CModule::IncludeModule("iblock");//подключается модуль с функциями
	$arSelect = Array(); 
	$arFilter = Array("IBLOCK_ID"=>27, "ACTIVE"=>"Y");                                  // 10 - это ID инфоблока из которого хотим вытащить элемент
	$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect); //Array("SORT"=>"ASC") начинает поддерживать сортировку в инфоблоке
	while($ob = $res->GetNextElement()) 
	 {
		$arFields = $ob->GetFields();            // массив инфоблока без свойств
		$arProperties = $ob->GetProperties();      // массив со свойствами инфоблока
	
	
		 //echo "<pre>";                 // распечатывает массив в цикле (можно стереть)
		 //print_r($arProperties);
		 //echo "<pre>";
	?>
	
	
	<img src="<?=CFile::GetPath($arProperties['PORTFEL_PROJECTS_FOTO']['VALUE'])?>">
	


	<?
	}
	?>
</div>
<?};?>