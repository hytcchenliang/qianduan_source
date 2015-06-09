<!DOCTYPE html>
<html lang="zh">
<head>
	<title>label绑定input/redio传值</title>
	<meta charset="utf-8"></meta>
</head>
<style>
	.main_body{width: 40%;height: 200px; margin: auto;margin-top: 100px;}
	.labelA{width: 100px;height: 20px;border:1px solid #dfd;display: block;}
</style>
<body>
	<div class="main_body">
		<form method="post">
<!-- 			<label for="radio1" class="labelA" >
				<input type="radio" value="1" id="radio1" name="nameA"></input>
			</label>
			<label for="radio2" class="labelA">
				<input type="radio" value="2" id="radio2" name="nameA"></input>
			</label>
			<label for="radio3"class="labelA">
				<input type="radio" value="3" id="radio3" name="nameA"></input>
			</label> -->
			<input type="radio" value="1" id="radio1" name="nameA"></input>
			<input type="radio" value="2" id="radio1" name="nameA"></input>
			<input type="radio" value="3" id="radio1" name="nameA"></input>
			<button type="submit">提交</button>
		</form>
	</div>
</body>
</html>
<?php
	$theValue=isset($_POST["nameA"])?$_POST["nameA"]:"none";
	if($theValue){
		echo $theValue;
		die();
	}
?>