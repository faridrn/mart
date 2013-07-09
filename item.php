<?php
(int) @$itemid = $_GET['id'];
switch ($itemid) {
	case 1: case 8: 
		$title = 'عینک آفتابی RayBan';
		$image = 'sample/sunglass.jpg';
		break;
	case 2: case 9: 
		$title = 'بازی کامپیوتر Call of Duty'; 
		$image = 'sample/blackops.jpg';
		break;
	case 3: case 10: default:
		$title = 'گوشی موبایل سونی اکسپریا زد';
		$image = 'sample/xperia.jpg';
		break;
	case 4: case 11: 
		$title = 'کول پشتی مسافرتی و سبک';
		$image = 'sample/bag.jpg';
		break;
	case 5: case 12: 
		$title = 'گوشی موبایل HTC One';
		$image = 'sample/one.jpg';
		break;
	case 6: case 13: 
		$title = 'دوربین دیجیتال فوجی فیلم';
		$image = 'sample/cam.jpg';
		break;
	case 7: case 14: case 15: 
		$title = 'گوشی موبایل Samsung Galaxy S4';
		$image = 'sample/galaxy.jpg';
		break;
}
function createLargeImage($img) {
	$parts = explode('/', $img);
	$parts[count($parts) - 1] = 'l_' . $parts[count($parts) - 1];
	$largeImage = implode('/', $parts);
	return $largeImage;
}
$largeImage = createLargeImage($image);
?>
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
								<div class="userarea-inner">
									<div class="greetings">
										<i class="icon-user"></i>
										<span class="message">سلام</span>&nbsp;<span class="username">فرید</span>&nbsp;<a href="#" id="logout-link"><span>خروج</span></a>
									</div>
									<div class="cart-info">
										<a href="#" rel="cart-modal" id="cart-link"><i class="icon-cart"></i><span class="message">سبد خرید (خالی)</span></a>
									</div>
								</div>
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
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">البسه<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">لوازم الکترونیکی<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">البسه<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">لوازم الکترونیکی<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">البسه<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">لوازم الکترونیکی<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">البسه<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">لوازم الکترونیکی<i class="arrow icon-left-open"></i></a></li>
							<li><a href="#">اتومبیل<i class="arrow icon-left-open"></i></a></li>
						</ul>
					</div>
					<div class="span9">
						<section id="item">
							<div class="item-title">
								<h2><?php echo $title; ?></h2>
							</div>
							<div class="item-image zoom pull-left">
								<img src="<?php echo $image; ?>" alt="گوشی موبایل سونی اکسپریا " data-zoom-image="<?php echo $largeImage; ?>" />
								<div class="item-gallery"></div>
							</div>
							<div class="item-options">
								<ul>
									<li><a href="#" class="btn btn-info"><i class="icon-suitcase"></i>&nbsp;هم‌اکنون بخرید</a></a></li>
									<li><a href="#" class="btn btn-success"><i class="icon-cart"></i>&nbsp;افزودن به سبد خرید</a></a></li>
								</ul>
							</div>
							<div class="item-info">
								<ul>
									<li><div class="item-price">قیمت: <span>15000 تومان</span></div></li>
									<li><div class="item-oldprice">قیمت قبلی: <span>18000 تومان</span></div></li>
									<li><div class="item-bids">پیشنهادات: <span>0</span></div></li>
									<li><div class="item-offending">پایان تخفیف: <span>6 روز</span></div></li>
									<li><div class="item-offpercent">درصد تخفیف: <span>17</span></div></li>
									<li><div class="item-brand">برند: <span>Sony</span></div></li>
									<li><div class="item-status">وضعیت: <span>دست دوم</span></div></li>
									<li><div class="item-shipping">ارسال: <span>با هزینه فروشنده</span></div></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="item-details">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#specs" data-toggle="tab">مشخصات کلی</a></li>
									<li><a href="#thechnical" data-toggle="tab">مشخصات فنی</a></li>
									<li><a href="#comments" data-toggle="tab">نظرات کاربران</a></li>
									<li><a href="#reviews" data-toggle="tab">نقد و بررسی</a></li>
									<li><a href="#seller" data-toggle="tab">اطلاعات فروشنده</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="specs">
										<p class="intro">
											انتظارها به پایان رسید و بالاخره کمپانی شناخته شده اپل مدل جدید تلفن همراه خود را با نام iPhone 5 معرفی نمود. این گوشی بعد از مدل‌های 2G، 3G، 3GS، 4 و 4S نسل ششم تلفن‌های همراه ساخت اپل محسوب می‌گردد. در طراحی اصلی این گوشی از نظر ظاهری نسبت به مدل پیشین یعنی iPhone 4S تحول خاصی ایجاد نگردیده است. اما در تکنولوژی ساخت، اپل یک‌بار دیگر شگفتی ساز شد و در حالی که صفحه نمایش و ابعاد مدل جدید آن نسبت به 4S بزرگ‌تر شده است، گوشی به میزان قابل توجهی سبک‌تر و باریک‌تر ساخته شده است، یعنی با قطر تنها 7.6 میلی‌متر و وزن تنها 112 گرم!
										</p>
										<table class="table table-hover table-condensed table-bordered table-striped">
											<tbody>
												<tr class="th info">
													<td colspan="2">مشخصات کلی</td>
												</tr>
												<tr>
													<td class="span3">تاریخ معرفی</td>
													<td class="span9">2012/10/01</td>
												</tr>
												<tr>
													<td>فرم گوشی</td>
													<td>ساده</td>
												</tr>
												<tr>
													<td>تعداد سیم کارت</td>
													<td>یک سیم کارته</td>
												</tr>
												<tr>
													<td>ابعاد</td>
													<td>123.8 × 58.6 × 7.6 mm</td>
												</tr>
												<tr class="th info">
													<td colspan="2">مشخصات کلی</td>
												</tr>
												<tr>
													<td class="span3">تاریخ معرفی</td>
													<td class="span9">2012/10/01</td>
												</tr>
												<tr>
													<td>فرم گوشی</td>
													<td>ساده</td>
												</tr>
												<tr>
													<td>تعداد سیم کارت</td>
													<td>یک سیم کارته</td>
												</tr>
												<tr>
													<td>ابعاد</td>
													<td>123.8 × 58.6 × 7.6 mm</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="thechnical">
									
									</div>
									<div class="tab-pane fade" id="comments"></div>
									<div class="tab-pane fade" id="reviews"></div>
									<div class="tab-pane fade" id="seller"></div>
								</div>
							</div>
							<div class="related-items">
								<h3>موارد مشابه</h3>
								<ul>
									<li><a href="item.html"><img src="sample/sunglass.jpg" alt="عینک آفتابی RayBan" /></a></li>
									<li><a href="item.html"><img src="sample/blackops.jpg" alt="بازی کامپیوتر Call of Duty: Black Ops" /></a></li>
									<li><a href="item.html"><img src="sample/one.jpg" alt="گوشی موبایل HTC One" /></a></li>
									<li><a href="item.html"><img src="sample/galaxy.jpg" alt="گوشی موبایل Samsung Galaxy S4" /></a></li>
								</ul>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section id="modals">
			
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
	</body>
</html>
