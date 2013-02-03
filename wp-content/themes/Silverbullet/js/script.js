$(function(){
	$('.wide .subBox').click(function(){
		$(this).find('subPlus, subPlusC').toggleClass('subPlus').toggleClass('subPlusC');
		targetContent = $(this).next();
		if(targetContent.filter(':visible').length != 0){ tmp = 'hide'; tmp2 = '0px 300px 0px 50px' }
		else{ tmp = 'show'; tmp2 = '20px 300px 20px 50px' }
		targetContent.animate({height: tmp, padding: tmp2}, 1200);
	});
});