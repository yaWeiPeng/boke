$(function(){
	$('#login').click(function(){
		alert(1);
	});
	$('#reg').click(function(){
		alert(2);
	})
})
function showlayer(){
    var bh=$(window).height();//获取屏幕高度
    var bw=$(window).width();//获取屏幕宽度
    $("#layer").css({
        height:bh,
        width:bw,
        display:"block"
    });
    $("#pop").show();
}
 
//close layer
$("#pop").click(function(){
    $("#layer,#pop").hide();
})
$("#layer").click(function(){
    $("#layer,#pop").hide();
})