<?if($_SERVER['REQUEST_URI']=='/'){?>

<div class="portfel_projects">
	<?
	CModule::IncludeModule("iblock");//������������ ������ � ���������
	$arSelect = Array(); 
	$arFilter = Array("IBLOCK_ID"=>27, "ACTIVE"=>"Y");                                  // 10 - ��� ID ��������� �� �������� ����� �������� �������
	$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect); //Array("SORT"=>"ASC") �������� ������������ ���������� � ���������
	while($ob = $res->GetNextElement()) 
	 {
		$arFields = $ob->GetFields();            // ������ ��������� ��� �������
		$arProperties = $ob->GetProperties();      // ������ �� ���������� ���������
	
	
		 //echo "<pre>";                 // ������������� ������ � ����� (����� �������)
		 //print_r($arProperties);
		 //echo "<pre>";
	?>
	
	
	<img src="<?=CFile::GetPath($arProperties['PORTFEL_PROJECTS_FOTO']['VALUE'])?>">
	


	<?
	}
	?>
</div>
<?};?>