$(document).ready(function(){

				$(".eng").hover(function(){
					 $(this).stop().animate({ color: "#434242"}, 500);
 					 },function() {
 					 $(this).stop().animate({ color: "#08c" }, 500);
				});
				$(".rus").hover(function(){
					 $(this).stop().animate({ color: "#434242"}, 500);
 					 },function() {
 					 $(this).stop().animate({ color: "#08c" }, 500);
				});



				$(".menu ul li a").hover(function(){
					 $(this).stop().animate({ color: "#08c"}, 500);
 					 },function() {
 					 $(this).stop().animate({ color: "#434242" }, 500);
				});

//6 блоков на главной сьранице с фото
				$(".b1").hover(function(){
					$('.b1_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b1_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b1_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b1_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b1_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b1_text p').stop().animate({ "color":"#898989"}, 500);
				});
				$(".b2").hover(function(){
					$('.b2_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b2_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b2_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b2_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b2_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b2_text p').stop().animate({ "color":"#898989"}, 500);
				});
				$(".b3").hover(function(){
					$('.b3_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b3_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b3_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b3_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b3_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b3_text p').stop().animate({ "color":"#898989"}, 500);
				});
				$(".b4").hover(function(){
					$('.b4_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b4_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b4_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b4_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b4_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b4_text p').stop().animate({ "color":"#898989"}, 500);
				});
				$(".b5").hover(function(){
					$('.b5_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b5_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b5_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b5_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b5_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b5_text p').stop().animate({ "color":"#898989"}, 500);
				});
				$(".b6").hover(function(){
					$('.b6_text').stop().animate({ "background-color":"#585858"}, 500);
					$('.b6_text .sil').stop().animate({ "color":"#fff"}, 500);
					$('.b6_text p').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$('.b6_text').stop().animate({ "background-color": "#EBEDEC" }, 500);
					$('.b6_text .sil').stop().animate({ "color":"#434242"}, 500);
					$('.b6_text p').stop().animate({ "color":"#898989"}, 500);
				});

	/*$(".b1").hover(function(){
		$('.b1_text').css('background-color','#434242');
});*/

				/*$(".sil").hover(function(){
					 $(this).stop().animate({ color: "#08c"}, 500);
 					 },function() {
 					 $(this).stop().animate({ color: "#434242" }, 500);
				});*/

				/*$(".printer").hover(function(){
					 $(this).stop().animate({ 
						background: "url(/bitrix/images/printer2.png)no-repeat",
						background-size:'contain'

					}, 500);
 					 },function() {
 					 $(this).stop().animate({ 
						background: "url(/bitrix/images/printer.png)no-repeat",
						background-size:'contain' 
					}, 500);
				});*/
//a[href^="/news"]
				/*$('.news22').hover(function(){
					 $(this).stop().animate({ color: "#008DD2"}, 500);
 					 },function() {
 					 $(this).stop().animate({ color: "#434242" }, 500);
				});*/

				/*$(".read").hover(function() {
 					$(this).stop().animate({ color: "#898989"}, 400);
 				},function() {
 					$(this).stop().animate({ color: "#008DD2" }, 400);
 				});*/


				/*$(".news_vacans_1").hover(function() {
 					$(this).stop().animate({ color: "#008DD2"}, 400);
 				},function() {
 					$(this).stop().animate({ color: "#fff" }, 400);
 				});

				$(".news_vacans_2").hover(function() {
 					$(this).stop().animate({ color: "#008DD2"}, 400);
 				},function() {
 					$(this).stop().animate({ color: "#fff" }, 400);
 				});*/


//блоки на странице услуги главная

				$(".uslugi_img1").hover(function(){
					$('.block_uslugi_img1').stop().animate({ "background-color":"#585858"}, 400);
 					},function() {
 					$('.block_uslugi_img1').stop().animate({ "background-color":"transparent"}, 400);
				});

				$(".uslugi_img2").hover(function(){
					$('.block_uslugi_img2').stop().animate({ "background-color":"#898989"}, 400);
 					},function() {
 					$('.block_uslugi_img2').stop().animate({ "background-color":"transparent"}, 400);
				});

				$(".uslugi_img3").hover(function(){
					$('.block_uslugi_img3').stop().animate({ "background-color":"#0994DC"}, 400);
 					},function() {
 					$('.block_uslugi_img3').stop().animate({ "background-color":"transparent"}, 400);
				});

// /блоки на странице услуги главная



	$(".services_number").hover(function(){
		$(this).stop().animate({ color: "#008DD2"}, 400);
 		},function() {
 		$(this).stop().animate({ color: "#8c8c8c" }, 400);
	})



//блоки на странице услуги


// ссылки в разделе услуги в серой плашке
$('.company_partners a').hover(function(){
		$(this).stop().animate({ color: "#008DD2"}, 400);
 		},function() {
 		$(this).stop().animate({ color: "#8c8c8c" }, 400);
	})
// //ссылки в разделе услуги в серой плашке


//$(this).children('ul')

/*$(".proba2").hover(function(){
					$(this).children('.proba_min').stop().animate({ "background-color":"#fff"}, 500);
					//$(this).children('.proba_big').stop().animate({ "background-color":"#424242"}, 500);
 					},function() {
 					$(this).children('.proba_min').stop().animate({ "background-color":"#585858"}, 500);
					//$(this).children('.proba_big').stop().animate({ "background-color":"#fff"}, 500);
});*/






// /блоки на странице услуги




//$('.harakteristiki').css('display','none');

	$('.bx-next').click(function(){
			$('.harakteristiki').hide();
		//$('.harakteristiki').fadeUp(1000);
	})












				$(function() {
						$(".printer")
							.find("span")
							.hide()
							.end()
							.hover(function() {
								$(this).find("span").stop().fadeIn();
							}, function() {
								$(this).find("span").stop().fadeOut();
				});
			});








});