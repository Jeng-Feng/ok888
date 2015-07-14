						<div class="panel-body">
							下一個步驟我們會給您限用於此訂單的專屬ATM匯款帳號
							<form id="ActionForm" action="<?=$payment["posturl"]?>" method="post" name="ActionForm">
								<? foreach($payment["form"] as $formkey => $formdata): ?>
									<input type="hidden" name="<?=$formkey?>" value="<?=$formdata?>" />
								<? endforeach; ?>
							</form>
						</div>