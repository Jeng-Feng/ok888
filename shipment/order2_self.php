<div class="row order2-form-row">
	<div class="col-lg-2 col-xs-12">
		<label class="text-right">
			店家地址
		</label>
	</div>	
	<div class="col-lg-10 col-xs-12">
		<?=$data["storename"]?>
	</div>
</div>
<div class="row order2-form-row">
	<div class="col-lg-2 col-xs-12">
		<label class="text-right">
			取件人姓名
		</label>
	</div>	
	<div class="col-lg-10 col-xs-12">
		<div class="col-lg-12 col-xs-12">
			<input type="text" id="selfname" name="selfname" class="form-control validate[required]" data-errormessage-value-missing="請輸入取件人姓名" value="<?=$data["selfname"]?>" />
		</div>
	</div>
</div>
<div class="row order2-form-row">
	<div class="col-lg-2 col-xs-12">
		<label class="text-right">
			取件人電話
		</label>
	</div>	
	<div class="col-lg-10 col-xs-12">
		<div class="col-lg-12 col-xs-12">
			<input type="text" id="selftel" name="selftel" class="form-control validate[required]" data-errormessage-value-missing="請輸入取件人電話" value="<?=$data["selftel"]?>" />
		</div>
	</div>
</div>