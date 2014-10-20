$('document').ready(function(){
	/*---------------------SEARCH------------------*/
	var search=$('.search_form');
	var sButton=$('#search');
	var flag=0;
	
	sButton.click(function(){
		if(flag==0)
		{
			search.animate({width: '250px',opacity:1},600);
			flag=1;
		}
		else 
		{
			search.animate({width: '0px',opacity:0},600);
			flag=0;
		}
	});


	/*---------------------Products------------------*/
	var product =$('.arriwalsDiv');
	product.hover(function(){
			$(this).addClass('active');
			$('.active>.goodsName').slideUp(200);
			$('.active>.buttondiv').css('opacity','1');
			
	},function(){
		$('.active>.buttondiv').css('opacity','0');
		$('.active>.goodsName').slideDown(200);
		$(this).removeClass('active');
	});


/*-----------------------------------------------PARALLAX EFFECT---------------------------------------------------------*/
	var categoryBlock=$('.categoryBlock');
	var category= $('.categoryBlock  ul>li');
	var categoryLink=$('.categoryBlock  ul>li>a');
	var nav =$('#nav');
	var logotype =$('#header');
	var slider =$('#slider');
	var sliderAll =$('#slider>*')
	var special=$('#specials');
	var specialall=$('#specials>*');
	logotype.css ({'position':'fixed','top':'0','z-index':'998','width':'1400px'})
	nav.css ({'position':'fixed','top':'40px','z-index':'998','width':'1400px'})
	window.addEventListener('scroll',moove);
	function moove(){
		var Y = window.pageYOffset;
		
		if (Y>200){
			nav.stop(true, true).css ({'position':'fixed','top':'0px','transition':'top 0.3s'});
			slider.stop(true, true).css({'height':'0px','transition':'height 1.1s'});
			special.stop(true, true).css({'height':'0px','transition':'height 1.1s'});
			specialall.stop(true, true).fadeOut(200);
			logotype.stop(true, true).slideUp(200);
			categoryBlock.stop(true, true).css ({'position':'fixed','top':'60px','transition':'top 0.5s'});
		}
		else if(Y<50){
			nav.stop(true, true).css ({'top':'40px','transition':'top 0.3s'});
			slider.css({'height':'550px','transition':'height 1.1s'});
			special.css({'height':'220px','transition':'height 1.1s'});
			specialall.fadeIn(1150);
			logotype.slideDown(200);
			categoryBlock.stop(true, true).css ({'position':'absolute','top':'770px','transition':'top 1.1s'});
		}

	};
	
	var search= $('.search input[type=text]');
	search.css({'width':'200px'});



	var addCart= $('.addtocart');
	var overlay = $('#overlay');
	var info=$('#information');
	var close=$('.close');
	addCart.click(function(){
		overlay.fadeIn(200);
		info.fadeIn(300);
	})
	close.click(function(){
		overlay.fadeOut(300);
		info.fadeOut(200);

	})
 })