$(function() {
	$("#searchcategories").select2({
		dropdownCssClass: 'bigdrop',
		containerCssClass: 'search-selectbox'
	});

	// alert($('body').width());
	
	$(".nav-list").delegate('li', 'mouseover', function(e) {
		$(this).find("a").addClass('active');
		$(this).find("div.sub-items").css({'right': $(this).width() - 30 }).toggle();
	}).delegate('li', 'mouseout', function(e) {
		$(this).find('a').removeClass('active');
		$(this).find("div.sub-items").toggle();
	});
});
