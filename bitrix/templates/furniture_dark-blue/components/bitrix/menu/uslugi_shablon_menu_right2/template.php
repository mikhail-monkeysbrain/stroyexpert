<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;
?>
<ul class="menu_services_right" style="">
<? $b=1; ?>
<?
foreach($arResult as $arItem):
?>
				<li>
					<a class="services_number menu_services_right_a<?=$b?>" style="color:#8C8C8C;" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</li>
<?$b++;?>

<?endforeach;?>
			</ul>

<script>
$('document').ready(function() {
	$(function () { 
    		$('.menu_services_right a').each(function () {
        	var location = window.location.href;
        	var link = this.href; 
        	if(location == link) {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a1').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services/stroitelno-montazhnye-raboty/vitrajnoe_osteklenie/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a2').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/services/stroitelno-montazhnye-raboty/ventiliruemi_fasad/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a3').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/services/stroitelno-montazhnye-raboty/peregorodki/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a4').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
				if(new_str == '/services/stroitelno-montazhnye-raboty/vhodnie_gruppi/') {
            	$(this).addClass('active2');
        	}
    	});
    });



	$(function () { 
    		$('.menu_services_right_a5').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/services/stroitelno-montazhnye-raboty/zenitnie_fonari/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	


	/*$(function () { 
    		$('.menu_services_right a:last').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/services/gallary_project/') {
            	$(this).addClass('active2');
        	}
    	});
	});*/





	var nujni_put = '/services/stroitelno-montazhnye-raboty/gallery_project/'
	$('.menu_services_right a:last').each(function(){
	$(this).attr('href',nujni_put);
})


	$(function () { 
    		$('.menu_services_right a:last').each(function () {
        	var location = window.location.href;
        	var link = this.href;
				//alert(location) ;
        	if(location == link) {
            	$(this).addClass('active2');
        	}
    	});
	});









});





</script>