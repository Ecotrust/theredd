$(document).ready(function() {
    $('#fullpage').fullpage({
    	navigation: true,
    	sectionsColor : ['#ff4338','#ff4338','#ffffff'],
    	paddingTop: '.5em'
    });

    $('.next_section').on('click', function(e) {
    	e.preventDefault();
    	$.fn.fullpage.moveSectionDown();
    });
});