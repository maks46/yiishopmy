var slideSpeed = 700;
var timeOut = 3000;
var Links = true;
$(document).ready(function(e){
	$('.slide').css(
{'position': 'absolute'}).hide().eq(0).show();
var slideNum = 0;
var slideTime;
var slideCount = $('#slider .slide').size();
function animateSlide (arrow){
	clearTimeout(slideTime);
	$('.slide').eq(slideNum).fadeOut(slideSpeed);
	if(arrow=='next'){
		if(slideNum== (slideCount-1)){
			slideNum=0;
		}
		else{
			slideNum++;
		}
	}
	else if(arrow=='back'){
			if(slideNum== 0){
				slideNum=slideCount-1;		
			}
		else{
			slideNum -=1;
		}

	}
	else{
		slideNum=arrow;
	}
	$('.slide').eq(slideNum).fadeIn(slideSpeed, rotation);
	$('.control-slide.active').removeClass('active');
	$('.control-slide').eq(slideNum).addClass('active');
	}
if(Links){
	var linkArrow=$('<a id="backbutton" href="#"></a><a id="nextbutton" href="#"></a>')
	.prependTo('#slider');
	$('#nextbutton').click(function(){
		animateSlide('next');
	})
	$('#backbutton').click(function(){
		animateSlide('back');
	})
}
	var addSpan='';
	$('.slide').each(function(index){
		addSpan+='<span class="control-slide">'+index+'</span>';
	});
	$('<div class="sliderlinks">'+ addSpan + '</div>').appendTo('#slider');
	$('.control-slide:first').addClass('active');
	$('.control-slide').click(function(){
		var goTo= parseFloat($(this).text());
		animateSlide(goTo);
	});
	var pause= false;
	function rotation(){
		if(!pause){
			slideTime=setTimeout(function(){
				animateSlide('next')},timeOut);
			}
		}
		$('#slider').hover( function(){
			clearTimeout(slideTime); pause =  true;

		}, function(){
			pause = false;
			rotation();
		});
		rotation();
		


});