$(function() {
	
	var $window = $(window);
	
	$("#searchcategories").select2({
		dropdownCssClass: 'bigdrop',
		containerCssClass: 'search-selectbox'
	});

	function handleSidenav() {
		$(".nav-list").delegate('li', 'mouseover', function(e) {
			$(this).find("a").addClass('active');
			if ($("html").hasClass('lt-ie8')) $(this).find("div.sub-items").toggle();
		}).delegate('li', 'mouseout', function(e) {
			$(this).find('a').removeClass('active');
			if ($("html").hasClass('lt-ie8')) $(this).find("div.sub-items").toggle();
		});
	}

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize < 767) {
			smallScreenDelegation();
        } else {
        	SmallScreenUndelegation();
        }
    }
    checkWidth();
    handleSidenav();
    $window.resize(checkWidth);
    
    function smallScreenDelegation() {
    	$(".nav-list").undelegate('li');
    	$(".nav-list").undelegate('li');
    	$(".nav-list").delegate('li a:first', 'click', function(event) {
    		if ($(this).next().is(':hidden')) {
				$(this).addClass('active');
				// $(this).next().slideDown('slow');
			} else {
				$(this).removeClass('active').next().slideUp('slow');
			}		    	
    		event.preventDefault();	
    	});
    	$(".nav-list").find(".arrow.icon-left-open").each(function() {
    		$(this).removeClass('icon-left-open').addClass('icon-down-open');
    	});
    }
    
    function SmallScreenUndelegation() {
    	handleSidenav();
    	$(".nav-list").find(".arrow.icon-down-open").each(function() {
    		$(this).removeClass('icon-down-open').addClass('icon-left-open');
    	});
    }
    
});
