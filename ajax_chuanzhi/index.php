<?php
	$flag=isset($_POST["flag"])?$_POST["flag"]:"";
	$string=isset($_POST["string"])?$_POST["string"]:"";
	if($flag=="chuanzhi"){
		echo json_encode($string);
		die();
	}
	else{
		echo json_encode("failed");
	}
?>

<!DOCTYPE html>
<html lang="zh">
	<head>
		<title>ajax传值</title>
		<meta charset="utf-8"></meta>
		<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="index.js"></script>
	    <link   type="text/css" rel="stylesheet" href="index.css" />

		<style>
			.main_body{width: 60%;height: 300px;margin-top: 50px;margin: auto;}
			.sub_btn{width:100px;height: 30px;}
		</style>

		<script language="javascript">
			$(document).ready(function(){          
				$(".sub_btn").click(function(){
					var str="hello world!";
					$.ajax({
						url:'index.php',
						type:'POST',
						data:{"flag":"chuanzhi","string":str},
						dataType:"JSON",
						complete:function(){
							console.log(this.url+"?"+this.data);
						},
						success:function(res){
							alert(res);
						}
					});
				});
			});
		</script>
	</head>
	<body>
		<div class="main_body">
			<button type="button" class="sub_btn">提交</button>
		</div>
	</body>
</html>

