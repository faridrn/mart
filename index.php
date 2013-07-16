<?php include dirname(__file__) . '/blocks/include.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Mart HTML5 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/mart-icons.css">
		<link rel="stylesheet" href="css/select2.css">
		<!--[if IE 7]><link rel="stylesheet" href="css/mart-icons-ie7.css"><![endif]-->
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<header id="header">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<div class="row">
							<h1 class="brand span2"><a href="/">&nbsp;</a></h1>
							<button type="button" class="btn btn-navbar btn-inverse" data-toggle="collapse" data-target=".search-collapse">
					            <i class="icon-search"></i>
					        </button>
					        <a href="#" id="cart-toggle" class="btn btn-navbar" style="display: none;">
					        	<i class="icon-cart"></i>
					        	<i class="badge badge-info">6</i>
					        </a>
							
							<div class="search-collapse collapse span8">
								<div class="clear-header"></div>
								<div id="search" class="span8">
									<form action="/search" method="get">
										<fieldset>
											<input type="text" value="" id="searchword" name="searchword" class="span4" placeholder="جستجو..." />
											<select name="categories" id="searchcategories">
												<option value="option1">همه بخش ها</option>
												<option value="option2">Option 2</option>
												<option value="option3">Option 3</option>
											</select>
											<button id="search-button" class="btn btn-info">
												<i class="icon-search"></i>&nbsp;
												جستجو
											</button>
											<div id="advanced-search">
												<a href="#advanced-search">جستجوی پیشرفته</a>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div id="userarea" class="span2">
								<?php include dirname(__file__) . '/blocks/user.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="mainbody">
			<div class="container">
				<div class="row">
					<div class="span3" id="sidebar">
						<ul class="nav nav-list sidenav affix">
							<li>
								<a href="#">اتومبیل<i class="arrow icon-left-open"></i></a>
								<div class="sub-items">
									<div class="item-cols">
										<div class="pull-right top-categories">
											<header>
												<h3>بخش های اصلی</h3>
											</header>
											<ul>
												<li><h4><a href="#"><span></span>خودروهای خارجی</a></h4></li>
												<li><h4><a href="#"><span></span>خودروهای داخلی</a></h4></li>
												<li><h4><a href="#"><span></span>خودروهای خارجی</a></h4></li>
											</ul>
										</div>
										<div class="pull-right other-categories">
											<header>
												<h3>سایر بخش ها</h3>
											</header>
											<ul>
												<li><a href="#">خودروهای سنگین</a></li>
												<li><a href="#">خودروهای سبک</a></li>
												<li><a href="#">خودروهای سنگین</a></li>
												<li><a href="#">خودروهای سبک</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</li>
							<li><a href="#">البسه<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">لوازم الکترونیکی<i class="arrow icon-left-open"></i></a></li>
						</ul>
					</div>
					<div class="span9">
						<section id="showcase">
							<?php include dirname(__file__) . '/blocks/slideshow.php'; ?>
						</section>
						<section id="items"></section>
					</div>
				</div>
			</div>
		</section>
		<section id="modals">
			<?php include dirname(__file__) . '/blocks/modals.php'; ?>
		</section>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<noscript>
						<div class="fixed">
							<div class="span9 offset3">
								<div class=" alert alert-error">
									<strong>You need to have javascript enabled on your browser</strong>
								</div>
							</div>
						</div>
					</noscript>
				</div>
			</div>
		</footer>
		<script src="js/vendor/jquery-1.10.1.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/vendor/jquery.masonry.min.js"></script>
		<script src="js/vendor/select2.min.js"></script>
		<script src="js/vendor/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script src="js/vendor/jquery.zoom-min.js"></script>
		<script src="js/vendor/handlebars.js"></script>
		<script src="js/main.js"></script>
		<script id="items-tamplate" type="text/x-jquery-tmpl"></script>
		<script id="details-template" type="text/x-handlebars-template">
			<div class="item-image zoom pull-left"><img src="{{img}}" alt="{{title}}"{{#if limage}} data-zoom-image="{{limage}}"{{/if}} /></div>
			<ul class="item-details">
				{{#if price}}<li><div class="item-price">قیمت: <span>{{price}} تومان</span></div></li>{{/if}}
				{{#if oldPrice}}<li><div class="item-oldprice">قیمت قبلی: <span>{{oldPrice}} تومان</span></div></li>{{/if}}
				{{#if bids}}<li><div class="item-bids">پیشنهادات: <span>{{bids}}</span></div></li>{{/if}}
				{{#if offEnding}}<li><div class="item-offending">پایان تخفیف: <span>{{offEnding}}</span></div></li>{{/if}}
				{{#if offPercent}}<li><div class="item-offpercent">درصد تخفیف: <span>{{offPercent}}</span></div></li>{{/if}}
				{{#if data.brand}}<li><div class="item-brand">برند: <span>{{data.brand}}</span></div></li>{{/if}}
				{{#if data.status}}<li><div class="item-status">وضعیت: <span>{{data.status}}</span></div></li>{{/if}}
				{{#if shipping}}<li><div class="item-shipping">ارسال: <span>{{shipping}}</span></div></li>{{/if}}
			</ul>
			<div class="clearfix"></div>
			<div class="options pull-left">
				<div id="more-info"><a href="#" class="btn btn-primary"><i class="icon-search"></i>&nbsp;مشاهده اطلاعات بیشتر</a></div>
				<div id="add-cart"><a href="#" class="btn btn-success"><i class="icon-cart"></i>&nbsp;افزودن به سبد خرید</a></div>
			</div>
			<div class="clearfix"></div>
		</script>
	</body>
</html>
