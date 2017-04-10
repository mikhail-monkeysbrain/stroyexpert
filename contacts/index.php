<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Адреса и телефоны компании stroyexpert.pro в городе Санкт Петербурге и Вологде");
$APPLICATION->SetPageProperty("title", "| Контакты");
$APPLICATION->SetTitle("Контакты");
?>

<style>
	.wrapper_new{
		margin-top: 70px !important;
	}
</style>
	<div class="wrapper_new" >

			<div style="clear:both;"></div>
			<div class="profil_d_block_copy_contact">
				<div class="otstup">

					<div class="profd_new"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">КОНТАКТЫ КОМПАНИИ</p></div>

					<div class="block_kontakti" style="">
						<div class="office slave__office">
							<p class="ttu">представительство компании</p>
							<br>
							<p class="em"><span class="sprite--geo"></span> 196 240, г. Санкт - Петербург, ул. Костюшко,<br> 54, лит. А, пом. 3-Н</p>
							<div class="clear"></div>
							<br>
							<p class="em"><span class="sprite--clock"></span> Время работы: <br> Пн.-Пт. с 08-00 до 18-00</p>
							<div class="clear"></div>
							<br>
							<p class="em"><span class="sprite--mail"></span><a href="mailto:info@stroyexpert.pro">E-mail: info@stroyexpert.pro</a></p>
							<img src="/sprite/spb.gif" alt="">
						</div>
						<div class="map__spb">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2185411f9ae046fe455a6fc140a81058c7e127e6da81546269fb17903e30f239&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
					</div>

					<div class="block_kontakti" style="">
						<div class="office slave__office">
							<p class="ttu">головной офис компании</p>
							<br>
							<p class="em"><span class="sprite--geo"></span> <span class="em-5">160 014,  г. Вологда, ул. Карла Маркса, 31</span></p>
							<div class="clear"></div>
							<br>
							<p class="em"><span class="sprite--clock"></span> Время работы: <br> Пн.-Пт. с 08-00 до 18-00</p>
							<div class="clear"></div>
							<br>
							<p class="em"><span class="sprite--mail"></span><a href="mailto:info@stroyexpert.pro">E-mail: info@stroyexpert.pro</a></p>
							<img src="/sprite/vol.gif" alt="">
						</div>
						<div class="map__spb">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2185411f9ae046fe455a6fc140a81058c7e127e6da81546269fb17903e30f239&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
					</div>

					<div style="clear:both;"></div>

				</div>
			</div>






			<div class="news_block_pd_contacts" style="">
				<div class="otstup">

					<div class="news_r_new"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">ФОРМА СВЯЗИ</p></div>
					<div class="block_kontakti_form" style="">
						<div id='product_add_result' style="padding: 10px;height:20px;"></div>
						<form style="padding: 0px 25px 0;" method="post" action="add_contact.php" class='vacanci_add' enctype="multipart/form-data">
							<input class="cont_inp1" type="text" placeholder="Ваше имя" name="user_name" value="" style="border:none;margin-bottom:2px;font-size:12px;"><br/>
							<input class="cont_inp1" type="text" placeholder="e-mail" name="user_email" value="" style="border:none;margin-bottom:2px;font-size:12px;"><br/>
							<textarea class="cont_inp1" type="text" placeholder="Сообщение" name="MESSAGE" value="" style="resize:none;border:none;margin-bottom:10px;font-size:12px;"></textarea><br/>
							<div align="center">
								<input class="inp11" type="submit" value="ОТПРАВИТЬ" style="line-height:16px;padding-right:11px;border-right:1px solid #fff;font-size:12px;border-radius:0;">
								<input class="clear_but inp11" type="button" value="ОЧИСТИТЬ" style="padding-left:7px;font-size:12px;">
							</div>
						</form>
					</div>

				</div>
			</div>

		<script type='text/javascript'>
			$('.clear_but').click(function(){
						$('.vacanci_add')[0].reset();
			})
		</script>
		<script type='text/javascript'>
			$(document).ready(function(){
				$(function(){
					// откуда берем данные сформы
					$('.vacanci_add').submit(function(e){
						//отменяем стандартное действие при отправке формы
						e.preventDefault();
						//берем из формы метод передачи данных
						var m_method=$(this).attr('method');
						//получаем адрес скрипта на сервере, куда нужно отправить форму
						var m_action=$(this).attr('action');
						//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
						//то есть в стандартном формате передачи данных формы
						var m_data=$(this).serialize();
						$.ajax({
							type: m_method,
							url: m_action,
							data: m_data,
							success: function(result){
								// где показываем результат
								$('#product_add_result').html(result);
							}
						});
					});
				});
			});
		</script>

		<div style="clear:both;"></div>

	</div>
</div>
<div style="clear:both;"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>