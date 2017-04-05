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
				//alert (new_str2);


        	var link = this.href; 					
				if(new_str == '/project/proektirovanie-mnogokvartirnih-domov/' || new_str2 == '/services/kompleksnoe-proektirovanie/proektirovanie-mnogokvartirnih-domov/') {
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
        	if(new_str == '/project/torgovie_centri/' || new_str2 == '/services/kompleksnoe-proektirovanie/proektirovanie-torgovyh-centrov/') {
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
        	if(new_str == '/project/mnogofunctionalnie_kompleksi/' || new_str2 == '/services/kompleksnoe-proektirovanie/proektirovanie-mnogofunkcionalnyh-kompleksov/') {
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
				if(new_str == '/project/sklad_kompleksi_proizvodstvenie_zdaniya/' || new_str2 == '/services/kompleksnoe-proektirovanie/proektirovanie-skladov/') {
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
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/project/injenernoe_proektirovanie/') {
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
				//alert (new_str);


        	var link = this.href; 					
				if(new_str == '/project/eskiz_zastroiki_territoryi/') {
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





	var nujni_put = '/project/'
	$('.menu_services_right a:last').each(function(){
	$(this).attr('href',nujni_put);
	})


	$(function () { 
    		$('.menu_services_right a:last').each(function () {
        	var location = window.location.href;
        	var link = this.href;
				//alert(link) ;
        	if(location == link) {
            	$(this).addClass('active2');
        	}
    	});
	});









});





</script>