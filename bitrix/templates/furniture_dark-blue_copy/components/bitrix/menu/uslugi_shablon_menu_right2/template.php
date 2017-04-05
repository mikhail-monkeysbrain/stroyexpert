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
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				var new_str2 = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (new_str);

        	var link = this.href; 					
        	if(new_str == '/object/vitrajnoe_osteklenie/' || new_str2 == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vitrajnoe-osteklenie/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a2').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				var new_str2 = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
				if(new_str == '/object/ventiliruemi_fasad/' || new_str2 == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ventiliruemye-fasady/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a3').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				var new_str2 = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/object/ofisnie_peregorodki/' || new_str2 == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ofisniye-peregorodki/') {
            	$(this).addClass('active2');
        	}
    	});
    });


	$(function () { 
    		$('.menu_services_right_a4').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				var new_str2 = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
				if(new_str == '/object/vhodnie_gruppi/' || new_str2 == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vhodnye-gruppy/') {
            	$(this).addClass('active2');
        	}
    	});
    });



	$(function () { 
    		$('.menu_services_right_a5').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				var new_str2 = x1[0]+"/"+x1[1]+"/"+x1[2]+"/"+x1[3]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/object/zenitnie_fonari/' || new_str2 == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/zenitnie_fonari/') {
            	$(this).addClass('active2');
        	}
    	});
    });

	$(function () { 
    		$('.menu_services_right_a6').each(function () {
        	var location = window.location.pathname;
				//alert(location);
				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/object/otoplenie_ventilyatciya_kondicionirovanie/') {
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





	var nujni_put = '/object/'
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