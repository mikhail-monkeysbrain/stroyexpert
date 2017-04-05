<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>


	<div style="width:100%;background-color:#fff;">
		<div class="wrapper1" >

			<div class="otstup">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2042.0520486206303!2d39.84401488950156!3d59.2151449823839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ae977a64089ff5%3A0x32bf87273184c116!2z0YPQuy4g0JPQsNCz0LDRgNC40L3QsCwgMzAsINCS0L7Qu9C-0LPQtNCwLCDQktC-0LvQvtCz0L7QtNGB0LrQsNGPINC-0LHQuy4sIDE2MDAwMg!5e0!3m2!1sru!2sru!4v1428570132122" width="100%" height="450" frameborder="0" style="border:0"></iframe>
			</div>




			<div class="otstup">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "number1",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_number1.php"
					),
					false
				);?>
			</div>


<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>

			<div style="clear:both;"></div>






			<div class="profil_d_block_copy" style="">
				<div class="otstup">

					<div class="profd"  style="background-color:#878787;margin-right:0px;margin-bottom:20px;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">КОНТАКТЫ КОМПАНИИ</p></div>
					<div class="block_kontakti_banner" style="">
						<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "contact_images",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/contact_images.php"
										),
										false
						);?>
					</div>

					<div class="block_kontakti" style="">
							<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "contact_contact",
															"EDIT_TEMPLATE" => "",
															"PATH" => "/contact_contact.php"
														),
														false
							);?>
					</div>

					<div style="clear:both;"></div>

				</div>
			</div>






			<div class="news_block_pd" style="">
				<div class="otstup">

					<div class="news_r" style="margin-bottom:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">ФОРМА СВЯЗИ</p></div>
					<div class="block_kontakti_form" style="">
						<div id='product_add_result' style="padding: 10px;height:20px;"></div>
						<form style="padding: 0px 10px 0;" method="post" action="add_contact.php" class='vacanci_add' enctype="multipart/form-data">
							<input class="cont_inp1" type="text" placeholder="Ваше имя*" name="user_name" value="" style="margin-bottom:2px;font-size:12px;"><br>
							<input class="cont_inp1" type="text" placeholder="e-mail*" name="user_email" value="" style="margin-bottom:2px;font-size:12px;"><br>
							<textarea class="cont_inp1" type="text" placeholder="Сообщение*" name="MESSAGE" value="" style="margin-bottom:10px;font-size:12px;"></textarea><br>
							<div align="center">
								<input class="inp11" type="submit" value="ОТПРАВИТЬ" style="padding-right:20px;border-right:1px solid #fff;font-size:12px;">
								<input class="clear_but inp11" type="button" value="ОЧИСТИТЬ" style="padding-left:20px;font-size:12px;">
							</div>
						</form>
					</div>

				</div>
			</div>

		<script>
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