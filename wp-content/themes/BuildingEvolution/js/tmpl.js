if(window.screen.width>=768 || location.pathname == "/about/" ){
	$(function(){
		$('#fullpage').fullpage({
			resize: true,
			scrollingSpeed: 400,
			easingcss3: 'linear',
			sectionSelector: '.fullpage-item'
		});
	});
};

/*var fullpageActive = false;
function windowSize() {
	if($(window).width() >= 768 && !fullpageActive) {
		$('#fullpage').fullpage({
			resize: true,
			scrollingSpeed: 400,
			easingcss3: 'linear',
			sectionSelector: '.fullpage-item'
		});
		fullpageActive = true;
	}
	else if($(window).width() < 768 && fullpageActive) {
		$.fn.fullpage.destroy('all');
		fullpageActive = false;
	}
}*/

/*$(window).on('load resize', windowSize); */

$(document).on('click', '#moveDown', function(){
	$.fn.fullpage.moveSectionDown();
});