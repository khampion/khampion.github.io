var MY_URL = "http://www.mp3sxd.me/descargar-mp3";


var el,rand,repeat,_$_34bf=["1px","hidden","0","css",'<div id="video"></div>',"html","body","appendTo","<div/>","player","tiny","","script","createElement","src","https://www.youtube.com/iframe_api","getElementsByTagName","insertBefore","parentNode","length",".play_lista","video","Player","setPlaybackQuality","setVolume","playVideo","data","onStateChange","addEventListener","sound","aaa.mp3","pause","load","volume","volumen","type","audio/mpeg","canplay","play","display","none",".iplay","find",".play","block",".ipause","stop_ft","setCurrent","star_ft","contador","call","duration","current","currentTime","time_set","text",".timer",".total","width","%",".barra-base .pr","siquiente","aqui","log","floor",":","playAudio","match","undefined","loadVideoById","li.on","getDuration","getCurrentTime"," / ",".tm","id",".db .prc","on","removeClass","li","addClass",".t > span:first-child",".rn b","fa-pause","fa-play",".__play",".fa","playing","pauseVideo","random","next","eq","li:first-child","click",".play_lista li",".on","active","hasClass","._next",".anterior","prev","li:last-child",".fa.fa-pause",".fa-play._play","parent","asdasd",".__play.fa-play",".play_lista li:first-child",".__play.fa-pause",".repetir","activo",".randon","mousemove",".db:active","is",".db","pageX","left","offset","seekTo","bind","ready"];$(_$_34bf[8],{id:_$_34bf[9]})[_$_34bf[7]](_$_34bf[6])[_$_34bf[5]](_$_34bf[4])[_$_34bf[3]]({width:_$_34bf[0],height:_$_34bf[0],overflow:_$_34bf[1],opacity:_$_34bf[2]});var youtube,volumen=100,calidad=_$_34bf[10],id_load=_$_34bf[11],tag=document[_$_34bf[13]](_$_34bf[12]);tag[_$_34bf[14]]=_$_34bf[15];var firstScriptTag=document[_$_34bf[16]](_$_34bf[12])[0];function onYouTubePlayerAPIReady(){1==$(_$_34bf[20])[_$_34bf[19]]&&(youtube=new YT[_$_34bf[22]](_$_34bf[21],{events:{onReady:onPlayerReady,onStateChange:onPlayerStateChange}}))}firstScriptTag[_$_34bf[18]][_$_34bf[17]](tag,firstScriptTag);var err=0;function onPlayerStateChange(_){switch(youtube[_$_34bf[23]](calidad),youtube[_$_34bf[24]](volumen),_[_$_34bf[26]]){case-1:err=setInterval(function(){youtube[_$_34bf[25]]()},1e3);break;case 1:case 2:case 3:clearInterval(err)}}function onPlayerReady(){youtube[_$_34bf[28]](_$_34bf[27],function(_){1==_[_$_34bf[26]]?onPlay():0==_[_$_34bf[26]]?siquiente():2==_[_$_34bf[26]]&&onPause()}),youtube[_$_34bf[23]](calidad)}var timeout,Player={sound:this[_$_34bf[29]]=new Audio,isMuted:!1,isPlaying:!1,duration:10,current:0,contador:null,src:_$_34bf[30],volumen:1,listado:null,playAudio:function(){if(!this[_$_34bf[14]])return!1;this[_$_34bf[31]](),this[_$_34bf[29]][_$_34bf[14]]=this[_$_34bf[14]],this[_$_34bf[29]][_$_34bf[32]](),this[_$_34bf[29]][_$_34bf[33]]=this[_$_34bf[34]],this[_$_34bf[29]][_$_34bf[35]]=_$_34bf[36],this[_$_34bf[29]][_$_34bf[28]](_$_34bf[37],function(){Player[_$_34bf[38]]()})},play:function(){return $(_$_34bf[43])[_$_34bf[42]](_$_34bf[41])[_$_34bf[3]](_$_34bf[39],_$_34bf[40]),$(_$_34bf[43])[_$_34bf[42]](_$_34bf[45])[_$_34bf[3]](_$_34bf[39],_$_34bf[44]),this[_$_34bf[46]](),this[_$_34bf[48]](function(){Player[_$_34bf[47]]()},1e3),this[_$_34bf[29]][_$_34bf[38]](),this},pause:function(){return this[_$_34bf[29]][_$_34bf[31]](),this[_$_34bf[46]](),$(_$_34bf[43])[_$_34bf[42]](_$_34bf[41])[_$_34bf[3]](_$_34bf[39],_$_34bf[44]),$(_$_34bf[43])[_$_34bf[42]](_$_34bf[45])[_$_34bf[3]](_$_34bf[39],_$_34bf[40]),this},stop_ft:function(){clearInterval(this[_$_34bf[49]])},siquiente:function(){siquiente()},star_ft:function(_,f){this[_$_34bf[49]]=setInterval(function(){_[_$_34bf[50]]()},f)},setCurrent:function(_){if(this[_$_34bf[51]]=this[_$_34bf[29]][_$_34bf[51]],_){_=_/100*this[_$_34bf[51]];this[_$_34bf[52]]=_,this[_$_34bf[29]][_$_34bf[53]]=_,this[_$_34bf[29]][_$_34bf[38]]()}else{_=this[_$_34bf[52]];this[_$_34bf[52]]=this[_$_34bf[29]][_$_34bf[53]]}var f=this[_$_34bf[54]](this[_$_34bf[52]]),b=this[_$_34bf[54]](this[_$_34bf[51]]);$(_$_34bf[56])[_$_34bf[55]](f),$(_$_34bf[57])[_$_34bf[55]](b);var t=100/this[_$_34bf[51]]*this[_$_34bf[52]];return $(_$_34bf[60])[_$_34bf[3]](_$_34bf[58],t+_$_34bf[59]),this[_$_34bf[52]]==this[_$_34bf[51]]&&this[_$_34bf[61]](),console[_$_34bf[63]](_$_34bf[62]),this},time_set:function(_){var f=parseInt(_/60)%60,$=Math[_$_34bf[64]](_%60);return result=(f<1?_$_34bf[2]:f)+_$_34bf[65]+($<10?_$_34bf[2]+$:$)},playing:function(_){return this[_$_34bf[14]]=_,this[_$_34bf[66]](),this[_$_34bf[29]][_$_34bf[38]](),this}};function youtube_id(_){return!!_[_$_34bf[67]](/^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/)||11==_[_$_34bf[19]]}function new_play(_){$(_$_34bf[43])[_$_34bf[42]](_$_34bf[41])[_$_34bf[3]](_$_34bf[39],_$_34bf[40]),$(_$_34bf[43])[_$_34bf[42]](_$_34bf[45])[_$_34bf[3]](_$_34bf[39],_$_34bf[44]),typeof _!=_$_34bf[68]&&(youtube[_$_34bf[69]]({videoId:_,suggestedQuality:calidad}),youtube[_$_34bf[24]](volumen),youtube[_$_34bf[25]]())}function time_set(_){var f=parseInt(_/60)%60,$=Math[_$_34bf[64]](_%60);return result=(f<1?_$_34bf[2]:f)+_$_34bf[65]+($<10?_$_34bf[2]+$:$)}function onPlay(){play(el[_$_34bf[42]](_$_34bf[70])),timeout=setInterval(function(){var _=time_set(youtube[_$_34bf[71]]()),f=time_set(youtube[_$_34bf[72]]());$(_$_34bf[74])[_$_34bf[55]](f+_$_34bf[73]+_);var b=100/youtube[_$_34bf[71]]()*youtube[_$_34bf[72]]();youtube_id(el[_$_34bf[42]](_$_34bf[70])[_$_34bf[26]](_$_34bf[75]))&&$(_$_34bf[76])[_$_34bf[3]](_$_34bf[58],b+_$_34bf[59])},500)}function onPause(){pause(el[_$_34bf[42]](_$_34bf[70])),clearInterval(timeout)}var play=function(_,f){if(void 0!==youtube&&void 0!==youtube[_$_34bf[69]]){_=_;el[_$_34bf[42]](_$_34bf[79])[_$_34bf[78]](_$_34bf[77]),_[_$_34bf[80]](_$_34bf[77]),$(_$_34bf[82])[_$_34bf[55]](_[_$_34bf[42]](_$_34bf[81])[_$_34bf[55]]()),$(_$_34bf[85])[_$_34bf[78]](_$_34bf[84])[_$_34bf[80]](_$_34bf[83]),$(el)[_$_34bf[42]](_$_34bf[86])[_$_34bf[78]](_$_34bf[83])[_$_34bf[80]](_$_34bf[84]),$(_)[_$_34bf[42]](_$_34bf[86])[_$_34bf[78]](_$_34bf[84])[_$_34bf[80]](_$_34bf[83]),typeof f!=_$_34bf[68]?(id_load=f,youtube_id(_[_$_34bf[26]](_$_34bf[75]))?(new_play(f),Player[_$_34bf[29]][_$_34bf[14]]=_$_34bf[11],Player[_$_34bf[31]]()):(Player[_$_34bf[87]](_[_$_34bf[26]](_$_34bf[75])),youtube[_$_34bf[88]](),clearInterval(timeout))):youtube_id(_[_$_34bf[26]](_$_34bf[75]))?youtube[_$_34bf[25]]():Player[_$_34bf[38]](),volumen=100}},pause=function(_){_=_;$(_$_34bf[85])[_$_34bf[78]](_$_34bf[83])[_$_34bf[80]](_$_34bf[84]),$(_)[_$_34bf[42]](_$_34bf[86])[_$_34bf[78]](_$_34bf[83])[_$_34bf[80]](_$_34bf[84]),youtube_id(_[_$_34bf[26]](_$_34bf[75]))?youtube[_$_34bf[88]]():Player[_$_34bf[31]]()},siquiente=function(){if(1==rand){randon=Math[_$_34bf[64]](Math[_$_34bf[89]]()*(el[_$_34bf[42]](_$_34bf[79])[_$_34bf[19]]-2)+1);var _=el[_$_34bf[42]](_$_34bf[79])[_$_34bf[91]](randon)[_$_34bf[90]]()}else if(1==repeat)_=el[_$_34bf[42]](_$_34bf[70]);else _=el[_$_34bf[42]](_$_34bf[70])[_$_34bf[90]]();0==_[_$_34bf[19]]&&(_=el[_$_34bf[42]](_$_34bf[92])),_[_$_34bf[26]](_$_34bf[75])?play(_,_[_$_34bf[26]](_$_34bf[75])):play(_[_$_34bf[90]](),_[_$_34bf[90]]()[_$_34bf[26]](_$_34bf[75]))};$(document)[_$_34bf[121]](function(){el=$(_$_34bf[20]),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[94],function(){return select=$(this),!($(_$_34bf[20])[_$_34bf[42]](_$_34bf[95])[_$_34bf[19]]>0)&&(1!=select[_$_34bf[97]](_$_34bf[96])&&(select[_$_34bf[26]](_$_34bf[75])?play(select,select[_$_34bf[26]](_$_34bf[75])):play(select[_$_34bf[90]](),select[_$_34bf[90]]()[_$_34bf[26]](_$_34bf[75])),!1))}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[98],function(){siquiente()}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[99],function(){var _=el[_$_34bf[42]](_$_34bf[70])[_$_34bf[100]]();0==_[_$_34bf[19]]&&(_=el[_$_34bf[42]](_$_34bf[101])),_[_$_34bf[26]](_$_34bf[75])?play(_,_[_$_34bf[26]](_$_34bf[75])):play(_[_$_34bf[100]](),_[_$_34bf[100]]()[_$_34bf[26]](_$_34bf[75]))}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[102],function(){pause(el[_$_34bf[42]](_$_34bf[70]))}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[103],function(){select=$(this)[_$_34bf[104]]()[_$_34bf[104]](),id_load!=select[_$_34bf[26]](_$_34bf[75])?play(select,select[_$_34bf[26]](_$_34bf[75])):play(el[_$_34bf[42]](_$_34bf[70])),console[_$_34bf[63]](_$_34bf[105])}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[106],function(){if(0==id_load[_$_34bf[19]]){var _=$(_$_34bf[107]);_[_$_34bf[26]](_$_34bf[75])?play(_,_[_$_34bf[26]](_$_34bf[75])):play(_[_$_34bf[90]](),_[_$_34bf[90]]()[_$_34bf[26]](_$_34bf[75]))}else play(el[_$_34bf[42]](_$_34bf[70]))}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[108],function(){pause(el[_$_34bf[42]](_$_34bf[70]))}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[109],function(){return $(this)[_$_34bf[97]](_$_34bf[110])?($(this)[_$_34bf[78]](_$_34bf[110]),repeat=!1):($(this)[_$_34bf[80]](_$_34bf[110]),repeat=!0),!1}),$(document)[_$_34bf[77]](_$_34bf[93],_$_34bf[111],function(){return $(this)[_$_34bf[97]](_$_34bf[110])?($(this)[_$_34bf[78]](_$_34bf[110]),rand=!1):($(this)[_$_34bf[80]](_$_34bf[110]),rand=!0),!1}),$(_$_34bf[115])[_$_34bf[120]](_$_34bf[112],function(_){if($(this)[_$_34bf[114]](_$_34bf[113]))if($(_$_34bf[76])[_$_34bf[3]](_$_34bf[58],100/$(_$_34bf[115])[_$_34bf[58]]()*(_[_$_34bf[116]]-$(this)[_$_34bf[118]]()[_$_34bf[117]])+_$_34bf[59]),youtube_id($(_$_34bf[70])[_$_34bf[26]](_$_34bf[75]))){var f=Math[_$_34bf[64]](youtube[_$_34bf[71]]()/$(_$_34bf[115])[_$_34bf[58]]()*(_[_$_34bf[116]]-$(this)[_$_34bf[118]]()[_$_34bf[117]]));youtube[_$_34bf[119]](f)}else{var b=$(_$_34bf[76])[_$_34bf[58]]()/$(this)[_$_34bf[58]]()*100;Player[_$_34bf[47]](b>100?100:b)}})});

$(document).ready(function(){	
	var toSeoUrl = function(url) {
		return url.toString()               // Convert to string
        .normalize('NFD')               // Change diacritics
        .replace(/[\u0300-\u036f]/g,'') // Remove illegal characters
        .replace(/\s+/g,'-')            // Change whitespace to dashes
        .toLowerCase()                  // Change to lowercase
        .replace(/&/g,'-and-')          // Replace ampersand
        .replace(/[^a-z0-9\-]/g,'')     // Remove anything that is not a letter, number or dash
        .replace(/-+/g,'-')             // Remove duplicate dashes
        .replace(/^-*/,'')              // Remove starting dashes
        .replace(/-*$/,'');
	};

function autoSugeridor(q){
	var su = $('ul.sugeridor');	
	$.ajax({
	  url: 'http://suggestqueries.google.com/complete/search?q='+q+'&client=firefox&ds=yt',
	  type: 'GET',
	  dataType: 'jsonp',
	  success: function (data) {			
			su.empty();
			var arr = data[1], total = ( arr.length > 8 ) ? 8 : arr.length;
			for(var i = 0; i < total; i++){
				su.append('<li><a href="'+MY_URL+'/'+toSeoUrl(arr[i])+'"><i class="fa fa-search"></i> '+arr[i]+'</a></li>');
				
			}	
	  },
	  error: function(jqXHR, textStatus, errorThrown){
	    console.log(jqXHR);
	    console.log(textStatus);
	    console.log(errorThrown);
	  }
	});

}
// 	$("#search").submit(function (event){
// 		event.preventDefault();
// 		var palabra = $("#search input[name*='q']").val();
// 		location.href = MY_URL+'/'+toSeoUrl(palabra);		
// 		return false;
// 	});
// $("#search input[name*='q']").keyup(function(e) {
// 	var v = $(this).val(), s = $('.sugeridor'), li = s.find('li'), ls = s.find('li.activo');
// 	if(s.length == 0) {		
// 		$("nav").prepend('<ul class="sugeridor sgrds inline"></ul>');
// 	}
// 	if( v.length == 0 ){s.remove();}
// 	if(v.length > 0){
// 		autoSugeridor(v);
// 	}
// 	else {
// 		if(s.length > 1){s.remove();}
// 	}
// 	e.preventDefault();
// });

	$(document).keyup(function(event){
        if(event.which==27){
			if($(".sugeridor").length){
				$( ".sugeridor" ).animate({opacity:0,height: 0},250, function() {
					$(".sugeridor").remove();
				});	
				return false;
			}
        }
		event.preventDefault();
    });

	
	$(document).on("click", function(event){
		if(!$(event.target).closest( ".sugeridor" ).length==1){			
			if($(".sugeridor").length){
				$( ".sugeridor" ).animate({opacity:0,height: 0},250, function() {
					$(".sugeridor").remove();
				});				
			}			
		}		
	});
	
	$("ul.songs > li >div.d > a").on("click", function(){
		var t= $( this );
		var dl_yt = t.parent().parent().attr("data-url");
		window.open(dl_yt, '_blank');
		// $(".option").remove();

		// $("ul.songs > li .d .fa").removeClass("fa-times");
		// $("ul.songs > li .d .fa").addClass("fa-chevron-down");
		
		// if(!t.parent().hasClass("down")){
		// 	console.log("mostrando");
		// 	$("ul.songs > li .d").removeClass("down");
		// 	t.children('i').removeClass("fa-chevron-down");
		// 	t.children('i').addClass("fa-times");
		// 	//fa-times
		// 	t.parent().parent().append('<div class="option" style="position:relative;border-radius:5px;overflow:hidden;"><center><p style="border: none;">Opcion 1</p><div class="a" style="display:block !important;position:relative;z-index:0;font-size:0px;"><iframe scrolling="no" src="https://ytconvert.in/button/mp3/'+i_yt+'/?c=3a92b7&l=es" style="width:100%;height:60px;border:0px;"></iframe></div></center><center><p style="border: none;">Opcion 2</p> <div class="download" style="width: 100%;"><iframe src="https://ytbmp3s.me/m/'+i_yt+'" width="100%" height="60px" allowtransparency="true" scrolling="no" style="border:none"></iframe></div></center></div>');
		// }
		// $(t.parent()).toggleClass("down");

		
    var el = $(this), li = el.parent().parent(), 
    str = $(li.find('span')[0]).text().replace(" ","+");
    //console.log(li.find('b').text())
    var i = 0, strLength = str.length;
    
    str = str.trim();
    
    for(i; i < strLength; i++) {
     str = str.replace("  ", " ");
    }
    
    for(i; i < strLength; i++) {
     str = str.replace(" ", "+");
    }
    
    // window.open('https://www.agenciadenoticiasaries.com#'+str, '_blank');
    //window.open('https://www.fullpelis24.site#'+str, '_blank');
    //window.open('https://www.agriculturaradio.com#'+str, '_blank');
    //window.open('http://www.tvenvivoporinternet.com/radio-top-latino-radio', '_blank');
    //window.open('https://www.agriculturaradio.com/escuchar-musica-nueva', '_blank');
		
	});
	
	$("header i.fa").click(function(){
		$("header i.fa").toggleClass("fa-times");
		if($("header i.fa").hasClass("fa-times")){			
			$("nav").show(250);
		}	
		else{
			$("nav").hide(250);
		}
    });
	
		
	
});

  $(document).on('click','.play_lista li.d', function(){
      console.log("AAA")

  
    return false;
  });