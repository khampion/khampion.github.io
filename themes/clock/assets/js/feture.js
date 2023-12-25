$(function() {  
	$("img.lazy").lazyload();
	
	$(".search-header-m").click(function(){
		$(".search-fixd-box").slideDown();
		document.getElementById('inputId').focus();
	});
	$(".search-fixd-close,.search-fixd-gray").click(function(){
		$(".search-fixd-box").slideUp();
	});  
	
 	
	$(".menu").bind("click",function(){ 
	 	$(".menu-overlay").show();
		$(".menu-in").animate({"left":"0"},400);   
	}); 

	$(".menu-overlay").click(function(){
		$(".menu-in").animate({"left":"-100%"},400);
		$(".menu-overlay").hide(); 
	}); 
 	
 	$(".top-ul-p").click(function(){
 		$(this).toggleClass("top-ul-bg");
 		$(this).siblings(".top-ul-tags").toggle();
 		return false;    
 	});
 	
 	 
	$(document).bind("click", function () { 
  		if ($('.top-ul-tags').css("display") == "block") {
  			$('.top-ul-tags').hide();
  			$(".top-ul-p").removeClass("top-ul-bg");
  		} 
  	});
	 
 	 
	
});
  
function setCookie(name, value, time) {
	var strsec = getsec(time);
	var exp = new Date();
	exp.setTime(exp.getTime() + strsec * 1);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/"
}
function getsec(str) {
	var str1 = str.substring(1, str.length) * 1;
	var str2 = str.substring(0, 1);
	if (str2 == "s") {
		return str1 * 1000
	} else if (str2 == "h") {
		return str1 * 60 * 60 * 1000
	} else if (str2 == "d") {
		return str1 * 24 * 60 * 60 * 1000
	}
}
function getCookies(name) {
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg)) return unescape(arr[2]);
	else return null
}
setCookie("varify_key", "pngdownload_id", "d30");

function hits_process(id, hl) {
	$.get("https://topdata.downloadatoz.com/caicai_android_data_hits/proc/hits_process.php?id=" + id + "&hl=" + hl)
};