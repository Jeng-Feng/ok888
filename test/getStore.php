<?php
$processID = $_POST["processID"];
$stCate = $_POST["stCate"];
$stCode = $_POST["stCode"];
$stName = $_POST["stName"];
$stAddr = $_POST["stAddr"];
$stTel = $_POST["stTel"];

echo "processID:" . $processID . "<br/>";
echo "Cate:" . $stCate . "<br/>";
echo "Code:" . $stCode . "<br/>";
echo "Name:" . $stName . "<br/>";
echo "Addr:" . $stAddr . "<br/>";
echo "Tel:" . $stTel . "<br/>";
?>
<script type="text/javascript">
	$(document).ready(){
		$(".ui-button-text").click(function(event) {
			/* Act on the event */
			window.onload("test.lifebooks.com.tw/test/postOrderXML.php");
		});
	}
</script>