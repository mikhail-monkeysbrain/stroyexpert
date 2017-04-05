<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>


<div class="footer_wrapper">

			<div style="width:100%;margin-top:50px">
				<div class="wrapper1" style="padding-left:10px;padding-right:10px;padding-top:25px;max-width:980px;min-width:300px;margin:0px auto;">
					<div class="otstup">
						<div style="width:100%">

							<div class="footer_block1">
								<p style="color:#585858; font-size:12px;">КОНТАКТЫ</p>
								<div style="color:#585858">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "number5",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/index_number5.php"
										),
										false
									);?>
								</div>
							</div>

							<div class="footer_block2">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include", 
									".default", 
									array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "number66",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/index_number66.php"
									),
									false
								);?>
							</div>

							<div class="footer_block3">
								<div style="color:#585858;">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "number6",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/index_number6.php"
										),
										false
									);?>
								</div>
							</div>

						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>

		




			<div class="button_footer" style="width:100%;">
				<div class="wrapper1 footer_grey">
					<div class="news_vacans" style="max-width:155px;">
						<a href="/news" class="news_vacans_1">НОВОСТИ</a>
						<a href="/vakanci/" class="news_vacans_2">ВАКАНСИИ</a>
					</div>
					<div class="copy">
						<p>Copyright &copy;"2015""STROYEXPERT.PRO"<br/>ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
					</div>
					<div class="socsety" style="max-width:170px;float:right;">
						<a href="https://www.linkedin.com/company/stroyexpert-pro?trk=nav_account_sub_nav_company_admin" target="_blank" class="logotype5"></a>
						<a href="https://instagram.com/stroyexpert.pro/" target="_blank" class="logotype4"></a>
						<a href="https://www.facebook.com/pages/stroyexpertpro/627583477375411?ref=hl" target="_blank" class="logotype3"></a>
						<!--<a  class="logotype2"></a>-->
						<a href="https://www.youtube.com/channel/UC-KvAiqcXTltA15KiUGKXPQ" target="_blank" class="logotype1"></a>
					<div style="clear:both;"></div>
					</div>
				</div>	
			</div>


</div><!--footer_wrapper-->





	</div><!--закрывающий head-а-->


<div style="display: none;">
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=30925651&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/30925651/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:30925651,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30925651 = new Ya.Metrika({id:30925651,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30925651" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2708609", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2708609;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

</div>



</body>
</html>




