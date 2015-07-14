<div class="row order2-form-row">
	<div class="col-xs-12 col-lg-2">
		<label class="text-right">
			收件人姓名
		</label>
	</div>	
	<div class="col-lg-10">
		<input type="text" id="delveryname" name="delveryname" class="form-control validate[required]" data-errormessage-value-missing="請輸入收件人姓名" value="<?=$data["delveryname"]?>" />
	</div>
</div>
<div class="row order2-form-row">
	<div class="col-xs-12 col-lg-2">
		<label class="text-right">
			收件人電話
		</label>
	</div>	
	<div class="col-lg-10">
		<input type="text" id="delverytel" name="delverytel" class="form-control validate[required]" data-errormessage-value-missing="請輸入收件人電話" value="<?=$data["delverytel"]?>" />
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-lg-2">
		<label class="text-right">
			收件地址
		</label>
	</div>	
	<div class="col-sm-12 col-lg-10">
		<div class="col-xs-12 col-lg-4 order2-form-row">
			<select name="city" class="form-control validate[required]" data-errormessage-value-missing="請選擇收件地址-縣市" onchange="javascript:citychange();putzip();" id="citysel">
				<option value="">請選擇縣市:</option>
				<option value="基隆市">基隆市</option>
				<option value="台北市">台北市</option>
				<option value="新北市">新北市</option>
				<option value="桃園縣">桃園縣</option>
				<option value="新竹市">新竹市</option>
				<option value="新竹縣">新竹縣</option>
				<option value="苗栗縣">苗栗縣</option>
				<option value="台中市">台中市</option>
				<option value="彰化縣">彰化縣</option>
				<option value="南投縣">南投縣</option>
				<option value="雲林縣">雲林縣</option>
				<option value="嘉義市">嘉義市</option>
				<option value="嘉義縣">嘉義縣</option>
				<option value="台南市">台南市</option>
				<option value="高雄市">高雄市</option>
				<option value="屏東縣">屏東縣</option>
				<option value="台東縣">台東縣</option>
				<option value="花蓮縣">花蓮縣</option>
				<option value="宜蘭縣">宜蘭縣</option>
				<option value="澎湖縣">澎湖縣</option>
				<option value="金門縣">金門縣</option>
				<option value="連江縣">連江縣</option>
			</select>
		</div>
		<div class="col-xs-12 col-lg-4">
			<select name="cityarea" size="1" class="form-control select" onchange="putzip();" id="cityaasel"></select>
		</div>
		<div class="col-xs-12 col-lg-4">
			<input class="form-control" id="Zipcode" name="Zipcode" type="text" size="5" maxlength="5" value="<?=$data["Zipcode"]?>" />
		</div>
		<div>
			<input type="text" id="delveryadd" name="delveryadd" class="form-control validate[required] col-lg-12" data-errormessage-value-missing="請輸入收件地址" value="<?=$data["delveryadd"]?>" />
		</div>	
	</div>
</div>