						<div class="panel-body">
							<div class="row">
								<div class="order4-bank-title col-xs-3 col-md-2 text-right">
									銀行名稱
								</div>
								<div class="order4-bank-context col-xs-9 col-md-10">
									玉山銀行
								</div>
							</div>
							<div class="row">
								<div class="order4-bank-title col-xs-3 col-md-2 text-right">
									銀行代碼
								</div>
								<div class="order4-bank-context col-xs-9 col-md-10">
									808
								</div>
							</div>
							<div class="row">
								<div class="order4-bank-title col-xs-3 col-md-2 text-right">
									轉帳帳號
								</div>
								<div class="order4-bank-context col-xs-9 col-md-10">
									<?=$payment["account"]?>
								</div>
							</div>
							<div class="row">
								<div class="order4-bank-title col-xs-3 col-md-2 text-right">
									轉帳款項
								</div>
								<div class="order4-bank-context col-xs-9 col-md-10">
									<?=$order["symbol_left"]?> <span class="totalfee"><?=$order["totalfee"]?></span> <?=$order["symbol_right"]?>
								</div>
							</div>
							<div class="row">
								<div class="order4-bank-title col-xs-3 col-md-2 text-right">
								</div>
								<div class="order4-bank-context col-xs-9 col-md-10">
									<?=$payment["message"]?>
								</div>
							</div>
						</div>