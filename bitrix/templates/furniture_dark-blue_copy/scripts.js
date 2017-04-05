// функция скрывает блок ТЕХНИЧЕСКОЕ ОПИСАНИЕ в разделах /project/eskiz_zastroiki_territoryi/eskiz-zastroyki-territorii/,/services/kompleksnoe-proektirovanie/eskiz_zastroiki_territoryi/eskiz-zastroyki-territorii-Viborg/
	$(function(){ 
        var location = window.location.pathname;
		var location_new = location.split("/");
		var location_end = "/"+location_new[1]+"/"+location_new[2]+"/";
		var location_end2 = "/"+location_new[1]+"/"+location_new[2]+"/"+location_new[3]+"/";

        var link = "/services/kompleksnoe-proektirovanie/eskiz-zastroyki-territorii/"; 			//помещаем ссылку данного пункта меню
		var link2 = "/project/eskiz_zastroiki_territoryi/eskiz-zastroyki-territorii/";


		var link_new = link.split("/");
		var link_new2 = link2.split("/");

		var link_end = "/"+link_new[1]+"/"+link_new[2]+"/"+link_new[3]+"/";
		var link_end2 = "/"+link_new2[1]+"/"+link_new2[2]+"/";

		if(location_end == link_end2 || location_end2 == link_end){
			$('.teh_opis').css('display','none');
		}
    });


// функция выводит в списке по 3 элемента в строке на страницах (/services/,/project/,/object/) если разрешение экрана > 1700px кроме /services/kompleksnoe-proektirovanie/inzhenernoe-proektirovanie/

	$(function(){ 
		var location = window.location.pathname;
		var location_new = location.split("/");


		var quantity = location_new.length;
		var width_screen = $(window).width();
		//alert(location_new[1]);
		//alert(quantity);


		if(quantity == 5 && location_new[1]=="services" && width_screen > 1700 && location !="/services/kompleksnoe-proektirovanie/inzhenernoe-proektirovanie/"){
			//alert("условие выполнено!");
			$('.wrapper1').css({"max-width": "1286px"});
			$('.profil_d_block_copy').css({"width": "76.4%","margin-left": "-175px"});
			$('.obshi:nth-child(2n+1)').css({"margin-right": "2px"});
			$('.obshi').css({"margin-right": "2px"});
			$('.obshi:nth-child(3n+3)').css({"margin-right": "0px"});
			$('.sust_development').css({"width":"235%"});
		}
		if(quantity >= 3 && quantity <= 4 && location_new[1] == "project" && width_screen > 1700 && location !="/project/injenernoe_proektirovanie/"){
			//alert("условие выполнено!");
			$('.wrapper1').css({"max-width": "1286px"});
			$('.profil_d_block_copy').css({"width": "76.4%","margin-left": "-175px"});
			$('.obshi:nth-child(2n+1)').css({"margin-right": "2px"});
			$('.obshi').css({"margin-right": "2px"});
			$('.obshi:nth-child(3n+3)').css({"margin-right": "0px"});
			$('.sust_development').css({"width":"235%"});
		}
		if(quantity >= 3 && quantity <= 4 && location_new[1] == "object" && width_screen > 1700){
			//alert("условие выполнено!");
			$('.wrapper1').css({"max-width": "1286px"});
			$('.profil_d_block_copy').css({"width": "76.4%","margin-left": "-175px"});
			$('.obshi:nth-child(2n+1)').css({"margin-right": "2px"});
			$('.obshi').css({"margin-right": "2px"});
			$('.obshi:nth-child(3n+3)').css({"margin-right": "0px"});
			$('.sust_development').css({"width":"235%"});
		}

	});






