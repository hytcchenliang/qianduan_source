<html>
<head>
	<meta content="text/html ; charset=utf-8" />
	<title></title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<style>
            .pageTop{width:100%;height: 30px;text-align: center;color:#0580B7;font-size:14px;font-weight:bold;}
            .condition_area{width:50%;height:auto;background-color: #eee;margin:auto;}
            .user_height{height:60px;}
            .amount{width:50px;}
            .user_height,.user_weight,.user_age,.user_style,.user_skin{width:300px;font-size:12px;float:right;margin-right: 20px;}
            .style_kind{display:inline-block;}          
            
	</style>
        
        <script language=javascript> 
                $(document).ready(function(){
                    //身高
                    sliderFunc(".user_height",170,150,200);
                    //体重
                    sliderFunc(".user_weight",65,30,120);
                    //年龄
                    sliderFunc(".user_age",25,15,40);
                    //风格
                    sliderFunc(".user_style",1,0,5);
                    //肤色
                    sliderFunc(".user_skin",1,0,3);
                }); 
                
//                slider函数
                function sliderFunc(condition_area,defaultdata,mindata,maxdata){
                      $(condition_area).find( ".slider-range-min" ).slider({
                        range: "min",
                        value: defaultdata,
                        min: mindata,
                        max: maxdata,
                        slide: function(event, ui ) {
                          $(condition_area).find( ".amount" ).val(ui.value );
                        }
                      });
                      $(condition_area).find( ".amount" ).val($( ".slider-range-min" ).slider( "value" ) );
                      $(condition_area).find(".amount").val(defaultdata);
                }
        </script>
        
</head>

<body>
    <div id="main_body">
        <div class="pageTop">数据报表</div>
        <!--条件-->
        <div class="condition_area">
            <!--身高-->
            <div class="user_height">
                <p>
                  <label for="amount" class="user_data">身高:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">厘米
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--体重-->
            <div class="user_weight">
                <p>
                  <label for="amount" class="user_data">体重:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">千克
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--年龄-->
            <div class="user_age">
                <p>
                  <label for="amount" class="user_data">年龄:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">岁
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--风格-->
            <div class="user_style">
                <p>
                    <label for="amount" class="user_data">个人风格:</label>
                    <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <div class="style_kind">(0.*1.休闲2.商务3.运动4.潮流5.简约)</div>
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--肤色-->
            <div class="user_skin">
                <p>
                    <label for="amount" class="user_data">肤色:</label>
                    <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <div class="style_kind">(0.*1.偏白2.偏黄3.偏黑)</div>
                </p>
                <div class="slider-range-min"></div> 
            </div>
        </div>
    </div>
</body>
</html>