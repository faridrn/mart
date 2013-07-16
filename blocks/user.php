<div class="userarea-inner">
									<div class="greetings">
										<i class="icon-user"></i>
										<!--<span class="message">سلام</span>&nbsp;<span class="username">فرید</span>&nbsp;<a href="#" id="logout-link"><span>خروج</span></a>-->
										<?php if (isset($_COOKIE['mart'])) { ?>
										خوش آمدید
											<a href="#" id="profile"><?php echo $_COOKIE['mart']; ?></a>&nbsp;|&nbsp;
											<form id="login-form" action="" method="post">
												<fieldset>
													<input type="hidden" name="username" value="<?php echo $_COOKIE['mart']; ?>" />
													<input type="hidden" name="task" value="logout" />
													<a href="#" id="logout-link"><span>خروج</span></a>
												</fieldset>
											</form>
										<?php } else { ?>
										<a href="#" id="login-link" data-toggle="popover" title="ورود به سایت"><span>ورود به سایت</span></a>&nbsp;|&nbsp;
										<a href="#" id="register-link"><span>کاربر جدید</span></a>
										<div id="login-popover" class="hide">
											<form id="login-form" action="" method="post">
												<fieldset>
													<input type="text" name="username" placeholder="نام کاربری" />
													<input type="password" name="password" placeholder="رمز عبور" />
													<input type="hidden" name="task" value="login" />
													<button type="submit" class="btn btn-success">ورود</button>
													<div class="clearfix"></div>
												</fieldset>
												<ul>
													<li>
														<a href="#" id="forgot">رمز عبورم را فراموش کرده ام</a>
													</li>
													<li>
														<a href="#" id="forgot">کلمه عبورم را فراموش کرده ام</a>
													</li>
												</ul>
											</form>
										</div>
										<?php } ?>
									</div>
									<div class="cart-info">
										<a href="#" rel="cart-modal" id="cart-link"><i class="icon-cart"></i><span class="message">سبد خرید (خالی)</span></a>
									</div>
								</div>