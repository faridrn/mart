$(function() {
	
	var $window = $(window);
	var device;
	
	$("#searchcategories").select2({
		dropdownCssClass: 'bigdrop',
		containerCssClass: 'search-selectbox'
	});

	function desktopSidenav() {
		$(".nav-list > li").off('click');
		if ($(".nav-list").find(".arrow:first").hasClass('icon-down-open')) {
			$(".nav-list").find(".arrow.icon-down-open").each(function() {
	    		$(this).removeClass('icon-down-open').addClass('icon-left-open');
	    	});
    	}
		$(".nav-list > li").on('mouseover', function(e) {
			$(this).find("a").addClass('active');
			if ($("html").hasClass('lt-ie8')) $(this).find("div.sub-items").toggle();
		}).on('mouseout', function(e) {
			$(this).find('a').removeClass('active');
			if ($("html").hasClass('lt-ie8')) $(this).find("div.sub-items").toggle();
		});
	}
	
	function handheldSidenav() {
		$(".nav-list > li").off('mouseover').off('mouseout');
		$(".nav-list").find(".arrow.icon-left-open").each(function() {
    		$(this).removeClass('icon-left-open').addClass('icon-down-open');
    	});
		$(".nav-list > li").on('click', function(event) {
				// $(this).find('a:first').addClass('active');
    		if ($(this).find('div.sub-items').is(':hidden')) {
				$(this).find('a:first').addClass('active').next().slideDown('slow');
			} else {
				$(this).find('a:first').removeClass('active').next().slideUp('slow');
			}		    	
    		event.preventDefault();	
    	});
	}

	if ($window.width() > 767) {
		device = 'desktop';
		desktopSidenav();
	} else {
		device = 'handheld';
		handheldSidenav();
	}
	$(".slideshow").text($window.width());
	
    $window.resize(function() {
    	if ($window.width() > 767) {
			if (device = 'handheld') {
				device = 'desktop';
				desktopSidenav();
			}
    	} else {
			if (device = 'desktop') {
				device = 'handheld';
				handheldSidenav();
			}
    	}
		$(".slideshow").text($window.width() + ' ' + device);
    });
    
});
