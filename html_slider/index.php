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
                    //���
                    sliderFunc(".user_height",170,150,200);
                    //����
                    sliderFunc(".user_weight",65,30,120);
                    //����
                    sliderFunc(".user_age",25,15,40);
                    //���
                    sliderFunc(".user_style",1,0,5);
                    //��ɫ
                    sliderFunc(".user_skin",1,0,3);
                }); 
                
//                slider����
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
        <div class="pageTop">���ݱ���</div>
        <!--����-->
        <div class="condition_area">
            <!--���-->
            <div class="user_height">
                <p>
                  <label for="amount" class="user_data">���:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">����
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--����-->
            <div class="user_weight">
                <p>
                  <label for="amount" class="user_data">����:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">ǧ��
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--����-->
            <div class="user_age">
                <p>
                  <label for="amount" class="user_data">����:</label>
                  <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">��
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--���-->
            <div class="user_style">
                <p>
                    <label for="amount" class="user_data">���˷��:</label>
                    <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <div class="style_kind">(0.*1.����2.����3.�˶�4.����5.��Լ)</div>
                </p>
                <div class="slider-range-min"></div> 
            </div>
            <!--��ɫ-->
            <div class="user_skin">
                <p>
                    <label for="amount" class="user_data">��ɫ:</label>
                    <input type="text" class="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <div class="style_kind">(0.*1.ƫ��2.ƫ��3.ƫ��)</div>
                </p>
                <div class="slider-range-min"></div> 
            </div>
        </div>
    </div>
</body>
</html>