<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<?$APPLICATION->ShowHeadStrings();?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name='wmail-verification' content='5b7a4ce49b66e941ae981aa6831c3a95' />


<?$APPLICATION->ShowHead();?>
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />


<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.js"></script>


<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.bxslider.min.js"></script>
<link href="<?=SITE_TEMPLATE_PATH?>/jquery.bxslider.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.waterwheelCarousel.js"></script>


<script type="text/javascript" src="/jquery-ui.min.js"></script>
<script type="text/javascript" src="/color_effect.js"></script>
<script type="text/javascript" src="/click-carousel.js"></script>
<script type="text/javascript" src="/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="/wow.min.js"></script>
<link href="/Animate.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">new WOW().init();</script>
	<title><?$APPLICATION->ShowTitle()?></title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63153769-1', 'auto');
  ga('send', 'pageview');

</script>


</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<div class="wrapper">
<style>
	.header_contacts .printer {
    	float: right;
    	margin: 0;
	}
	.soc {
	    display: flex;
	    flex-wrap: wrap;
	    justify-content: flex-end;
	}
	.soc a{
		margin: 0 .15em;
	}
	.soc a.printer i{
	    border: 0;
	    font-size: 100%;
	    margin-top: 5px;
	}
	.tel{
		margin: .5em 0 1em;
		width: 100%;
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: flex-end;
	}
	.tel a{
		color: rgb(67, 66, 66);
		font-weight: 600;
	}
	.tel i, .tel i:hover{
		border: 0;
	}
</style>

		<div class="block1">
			<div  id="wrapper_header" style="padding-left:10px;padding-right:10px;padding-top:10px;max-width:980px;min-width:200px;min-height:110px;max-height:260px;margin:0px auto; border:0px solid red">

				<div class="flex">
					<div class="logo">
						<a href="/"><img style="max-width:90%;"  src="/bitrix/images/logo1.png" alt=""/></a>
					</div>


					<div class="header_contacts">
						
						<div class="soc">
							<a href="https://business.facebook.com/stroyexpert.pro/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/stroyexpert.pro/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://www.youtube.com/channel/UC-KvAiqcXTltA15KiUGKXPQ" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
							&nbsp; &nbsp; &nbsp; &nbsp;
							<a class="printer" style="background: transparent;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
							<p class="tel"><a href="tel:+78172209109"><i class="fa fa-phone" aria-hidden="true"></i> +7 (8172) 209 109</a> <a href="tel:+78129075143"><i class="fa fa-phone" aria-hidden="true"></i> +7 (812) 907 5143</a></p>
						</div>
					</div>
				</div>
				<div class="menu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel4", Array(
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MENU_CACHE_TYPE" => "A",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MAX_LEVEL" => "2",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false
				);?>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>

<script type="text/javascript">
	/*$(document).ready(function(){
	 $(".printer").hover(function(){
		$(".printer img").attr("src","/bitrix/images/printer2.png");
	 },function() {
		$(".printer img").attr("src","/bitrix/images/printer1.png");
	 });
});*/
</script>








