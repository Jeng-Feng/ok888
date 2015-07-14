<div class="row order2-form-row">
	<div class="col-xs-12 col-lg-2">
		<label class="text-right">
			請輸入超商代碼
		</label>
	</div>	
	<div class="col-xs-12 col-lg-10">
		<div class="col-xs-6 col-lg-6">
			<input type="text" id="ez_store_id" name="ez_store_id" class="form-control validate[required,custom[onlyNumberSp]]" />
		</div>
		<a href="http://map.ezship.com.tw/ezship_map_new.jsp" class="col-sm-8 col-md-6" target="_blank">點我查找超商代碼</a>
	</div>
</div>
<div class="row order2-form-row">
	<div class="col-xs-12 col-lg-2">
		<label class="text-right">
			取件人
		</label>
	</div>	
	<div class="col-xs-12 col-lg-10">
		<div class="col-xs-12 col-lg-3">
			<input type="text" id="selfname" name="selfname" class="form-control validate[required]" data-errormessage-value-missing="請輸入取件人姓名" value="<?=$data["selfname"]?>" />
		</div>
	</div>
</div>
<div class="row order2-form-row">
	<div class="col-xs-3 col-md-2">
		<label class="text-right">
			取件人電話
		</label>
	</div>	
	<div class="col-xs-12 col-lg-10">
		<div class="col-xs-4 col-lg-3">
			<input type="text" id="selftel" name="selftel" class="form-control validate[required]" data-errormessage-value-missing="請輸入取件人電話" value="<?=$data["selftel"]?>" />
		</div>
	</div>
</div>