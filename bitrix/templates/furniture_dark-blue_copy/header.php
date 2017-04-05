<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?$APPLICATION->ShowHead();?>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
<link href="/bitrix/templates/furniture_dark-blue_copy/colorbox.css" type="text/css" rel="stylesheet" />


<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.js"></script>


<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.bxslider.min.js"></script>
<link href="<?=SITE_TEMPLATE_PATH?>/jquery.bxslider.css" type="text/css" rel="stylesheet" />


<script type="text/javascript" src="/jquery-ui.min.js"></script>
<script type="text/javascript" src="/color_effect.js"></script>
<script type="text/javascript" src="/click-carousel.js"></script>
<script type="text/javascript" src="/carousel.js"></script>
<script type="text/javascript" src="/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/scripts.js"></script>

<link href="/jquery.formstyler.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/jquery.formstyler.min.js"></script>


<script type="text/javascript" src="/wow.min.js"></script>
	<link href="/Animate.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript"> new WOW().init();</script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery.waterwheelCarousel.js"></script>

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





		<div class="block1">
			<div  id="wrapper_header" style="padding-left:10px;padding-right:10px;padding-top:10px;max-width:980px;min-width:200px;min-height:110px;max-height:260px;margin:0px auto; border:0px solid red">


				<div class="flex">
					<div class="logo">
						<a href="/"><img style="max-width:90%;"  src="/bitrix/images/logo1.png" alt=""/></a>
					</div>


					<div class="header_contacts">
						<p class="tel">+7 (8172) 209 109<br>+7 (812) 907 5143</p>
						<!--<p class="eng_rus_block">
							<a class="printer"><span></span></a>
							<a href="#" class="eng">English</a>
							<a href="/" class="rus">Russia</a>
						</p>-->
						<a class="printer" style="background: transparent;"><i class="fa fa-print" aria-hidden="true"></i></a>
						<div class="soc">
							<a href="https://business.facebook.com/stroyexpert.pro/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/stroyexpert.pro/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://www.youtube.com/channel/UC-KvAiqcXTltA15KiUGKXPQ" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/+StroyexpertPro" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="menu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel3", Array(
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
					<!--<ul>
						<li><a>О&nbspКОМПАНИИ</a></li>
						<li><a>УСЛУГИ</a></li>
						<li><a>ПРОЕКТЫ</a></li>
						<li><a>НОВОСТИ</a></li>
						<li><a>КОНТАКТЫ</a></li>
					</ul>-->
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>





<script type="text/javascript">

$('document').ready(function() {
	$(function () { 
    		$('#horizontal-multilevel-menu .new_class1').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/company/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('#horizontal-multilevel-menu .new_class2').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('#horizontal-multilevel-menu .new_class3').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/project/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('#horizontal-multilevel-menu .new_class4').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/object/') {
            	$(this).addClass('active2');
        	}
    	});
    });



	$(function () { 
    		$('#horizontal-multilevel-menu .new_class5').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/news/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('#horizontal-multilevel-menu .new_class6').each(function () {
        	var location = window.location.pathname;
				//alert (location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/contacts/') {
            	$(this).addClass('active2');
        	}
    	});
    });



});

</script>






