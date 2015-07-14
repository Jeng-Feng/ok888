						<div class="panel-body">
							下一個步驟會引導您至信用卡付款頁面
							<form id="ActionForm" action="<?=$payment["posturl"]?>" method="post" name="ActionForm">
								<? foreach($payment["form"] as $formkey => $formdata): ?>
									<input type="hidden" name="<?=$formkey?>" value="<?=$formdata?>" />
								<? endforeach; ?>
							</form>
						</div>