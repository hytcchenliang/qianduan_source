$(function(){
	$(".demo_img").find("div").css("opacity",0.5);
    $('.header .bottom .menu ul li').hover(function(){			  
        var l=$(this).index()*$(this).width();
        $('.header .bottom .menu ul').stop().animate({"background-position":l});
        
    },function(){
        $('.header .bottom .menu ul').stop().animate({"background-position":0});
        
    });
	$(".demo_img").hover(function(){
			
		$(this).find("div").stop().animate({"top":0})	
	},function(){
		$(this).find("div").stop().animate({"top":176})							  
	})
})
$(function(){
		$(".tipclose").click(function(){
			$(".tooltip").fadeOut("fast");	   
		}) 
		
	/*IP统计*/
	url="http://www.100sucai.com/phpajax/ajax_ip.php?abc=www.100sucai.com";
	$.ajax({url:url,async:false});
	
	/*浏览量统计*/
	var aid=$("#aid").val()
	urls="http://www.100sucai.com/phpajax/ajax_view.php?abc=www.100sucai.com&id="+aid;
	$.ajax({url:urls,async:false});  
})
