						<div class="panel-body">
							請準備好您的晶元卡以及晶元讀卡機，下一個步驟會引導您至信用卡付款頁面
							<form id="ActionForm" action="<?=$payment["posturl"]?>" method="post" name="ActionForm">
								<? foreach($payment["form"] as $formkey => $formdata): ?>
									<input type="hidden" name="<?=$formkey?>" value="<?=$formdata?>" />
								<? endforeach; ?>
							</form>
						</div>