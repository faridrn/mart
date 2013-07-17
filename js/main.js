$(function() {
	
	var $window = $(window);
	var $items = $("#items");
	var viewports;
	var device;
	var state = false;
	var shipping = ['با هزینه مشتری', 'با هزینه فروشنده'];
	var dTemp = $("#details-template").html();
	$(".zoom").zoom({url: $(".zoom").find('img:first').attr('data-zoom-image')});
	
	$("#cart-link").click(function(e) {
		$("#cart-modal").modal('toggle');
		e.preventDefault();
	});
	
	$("#login-link").popover({
		html: true
		, placement: 'bottom'
		, content: $("#login-popover").html()
	});
	
	$("#register-link").click(function(e) {
		$("#register-modal").modal('toggle');
		e.preventDefault();
	});
	
	$("#login-link").click(function(e) {
		if ($("#login-form").find("input[name=username]").val() == '') {
			$("#login-form").find("input[name=username]").focus();
		}
	});
	
	function loadDetails(id) {
		var d = false;
		if (typeof(id) != "undefined" && id) {
			$.ajax({
				url: 'data/details.html',
				success: function(data) {
					d = data;
					alert('a');
				}
			});
		}
		return d;
	}
	
	function constructItems() {
		$("#items").masonry({
			itemSelector: '.item',
			isRTL: true,
			isAnimated: !Modernizr.csstransitions
		});
	}
	
	function loadItems() {
		output = '';
		$.ajax({
			url: 'data/items.php',
			dataType: 'json',
			cache: false,
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {
					// console.log(data[i]);
					output += '<div class="item" data-id="' + data[i].id + '">';
						output += '<div class="inner">';
							output += '<div class="image">';
								output += '<img src="' + data[i].image + '" alt="' + data[i].imagealt + '" />';
							output += '</div>';
							output += '<div class="info">';
								output += '<div class="details">';
									output += '<a href="#" title="' + data[i].info.title + '">' + data[i].info.title + '</a>';
								output += '</div>';
								output += '<div class="price">' + data[i].info.price + '</div>';
							output += '</div>';
							output += '<div class="more">';
								output += '<span class="title">' + data[i].more.title + '</span>';
								output += '<span class="time">' + data[i].more.time + '</span>';
							output += '</div>';
						output += '</div>';
					output += '</div>';
				}
				$("#items").append($(output));
				$("#items img").on('load', function() {
					constructItems();
				});
				state = true;
			},
			error: function() {
				console.log('Error Loading Data!');
			}
		});
	}
	loadItems();

	$items.delegate(".item", 'click', function(e) {
		var output = '';
		var $item = $(this);
		var itemLink = $item.find('.details a:first').attr('href');
		var itemId = $item.attr('data-id');
		var image = $(this).find(".image img").attr('src');
		var largeImage = createLargeImage(image);
		var title = $(this).find(".details a").text();
		if (typeof(itemId) != "undefined" && itemId) {
			$.ajax({
				url: 'data/json.php?type=details&id=' + itemId,
				dataType: 'json',
				cache: false,
				success: function(d) {
					d.shipping = shipping[parseInt(d.shipping)];
					d.img = image;
					d.limage = largeImage;
					d.title = title;
					$("#items-modal").find(".modal-header h3").text(title);
					var detailsTemplate = Handlebars.compile(dTemp);
					var output = detailsTemplate(d);
					$("#items-modal").find(".modal-body").html(output);
					$(".zoom").zoom({url: $(".zoom").find('img:first').attr('data-zoom-image')});
					$("#items-modal").modal("show").find("#more-info a:first").attr('href', 'item.php?id=' + itemId);
				},
				error: function() {
					alert('Error Loading Details!');
				}
			});
		}
		e.preventDefault();
	});
	
	function createLargeImage(img) {
		var parts = img.split('/');
		var partsCount = parts.length;
		parts[partsCount - 1] = 'l_' + parts[partsCount - 1];
		largeImage = parts.join('/');
		return largeImage;
	}
	
	// $("#items-modal").delegate(".options a", 'click', function(event) {
		// event.preventDefault();
	// });
	
	$("body").on('hidden', '.modal', function () { $(this).removeData('modal'); });
	
	$("#searchcategories").select2({
		dropdownCssClass: 'bigdrop',
		containerCssClass: 'search-selectbox'
	});
	/*
	function destroyItems() {
		return $items.masonry('destroy');
	}
	
	function reconstructItems() {
		return $items.masonry('reload');
	}
	*/
	function desktopSidenav() {
		$(".nav-list > li").off('click');
		if ($(".nav-list").find(".arrow:first").hasClass('icon-down-open')) {
			$(".nav-list").find(".arrow.icon-down-open").each(function() {
	    		$(this).removeClass('icon-down-open').addClass('icon-left-open');
	    	});
    	}
		/*
		$(".nav-list > li").on('mouseover', function(e) {
			$(this).find("a").addClass('active');
			$(this).find("div.sub-items").toggle();
			e.preventDefault();	
		}).on('mouseout', function(e) {
			$(this).find('a').removeClass('active');
			$(this).find("div.sub-items").toggle();
			e.preventDefault();	
		});
		*/
	}
	
	function handheldSidenav() {
		$(".nav-list > li").off('mouseover').off('mouseout');
		$(".nav-list").find(".arrow.icon-left-open").each(function() {
    		$(this).removeClass('icon-left-open').addClass('icon-down-open');
    	});
		$(".nav-list > li").on('click', function(e) {
    		if ($(this).find("div.sub-items").is(':hidden')) {
				$(this).find("a:first").addClass('active').next().slideDown('slow');
			} else {
				$(this).find("a:first").removeClass('active').next().slideUp('slow');
			}		    	
    		e.preventDefault();	
    	});
	}

	if ($window.width() > 767) {
		if ($window.width() > 767 && $window.width() < 980) viewport = 'tablet';
		if ($window.width() > 979 && $window.width() < 1200) viewport = 'desktop';
		if ($window.width() > 1199) viewport = 'wide';
		device = 'desktop';
		desktopSidenav();
	} else {
		device = viewport = 'handheld';
		handheldSidenav();
	}
	
    $window.resize(function() {
    	if ($window.width() > 767) {
			if (device == 'handheld') {
				device = 'desktop';
				desktopSidenav();
			}
    	} else {
			if (device == 'desktop') {
				device = 'handheld';
				handheldSidenav();
			}
    	}
    });
	
	if ($("#showcase .slideshow").length) {
		$("#showcase .slideshow").find("ul").caroufredsel({
			pagination: $("#showcase .slideshow").find(".pagination"),
			scroll: {
				fx: 'crossfade'
			}
		});
	}
    
});