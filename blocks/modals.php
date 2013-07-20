<div id="item-modal" class="modal hide fade">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>نام کالا</h3>
					<div class="clearfix"></div>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<h3>موارد مشابه</h3>
				</div>
			</div>
			<div id="cart-modal" class="modal hide fade">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>سبد خرید</h3>
					<div class="clearfix"></div>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkall" class="checkall" /></th>
								<th colspan="2">کالا</th>
								<th>تعداد</th>
								<th>فی</th>
								<th>قیمت</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="check" /></td>
								<td class="span2">
									<div class="image-holder">
										<a href="item.php?id=15">
											<img src="sample/galaxy.jpg" alt="گوشی موبایل Samsung Galaxy S4" />
										</a>
									</div>
								</td>
								<td><h4><a href="item.php?id=15">گوشی موبایل Samsung Galaxy S4</a></h4></td>
								<td>1</td>
								<td>15000</td>
								<td>15000</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="check" /></td>
								<td class="span2">
									<div class="image-holder">
										<a href="item.php?id=15">
											<img src="sample/galaxy.jpg" alt="گوشی موبایل Samsung Galaxy S4" />
										</a>
									</div>
								</td>
								<td><h4><a href="item.php?id=15">گوشی موبایل Samsung Galaxy S4</a></h4></td>
								<td>2</td>
								<td>15000</td>
								<td>30000</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="check" /></td>
								<td class="span2">
									<div class="image-holder">
										<a href="item.php?id=15">
											<img src="sample/galaxy.jpg" alt="گوشی موبایل Samsung Galaxy S4" />
										</a>
									</div>
								</td>
								<td><h4><a href="item.php?id=15">گوشی موبایل Samsung Galaxy S4</a></h4></td>
								<td>1</td>
								<td>15000</td>
								<td>15000</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<div class="total">
						<div class="pull-right">
							<strong>تعداد کل</strong>: 4
						</div>
						<div class="pull-left">
							<strong>جمع کل</strong>
							: 6000 تومان
						</div>
						<div class="clearfix"></div>
						<br />
					</div>
					<div class="options">
						<div class="pull-right">
							<a href="#" class="btn btn-danger">حذف تمامی موارد</a>
						</div>
						<div class="pull-left">
							<a href="#" class="btn btn-success">تایید نهایی و خرید</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div id="register-modal" class="modal hide fade">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>عضویت در سایت</h3>
					<div class="clearfix"></div>
				</div>
				<div class="modal-body">
					<form id="register-form" action="" method="post" class="form-horizontal">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="name">نام *</label>
								<div class="controls">
									<input type="text" name="name" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">نام خانوادگی *</label>
								<div class="controls">
									<input type="text" name="name" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">پست الکترونیک *</label>
								<div class="controls">
									<input type="email" name="name" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">نام کاربری *</label>
								<div class="controls">
									<input type="text" name="name" />
									<span class="guide help-inline">کاراکترهای مجاز: فقط حروف و اعداد انگلیسی.</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">کلمه عبور *</label>
								<div class="controls">
									<input type="text" name="name" />
									<span class="guide help-inline">کلمه عبور باید حداقل 6 کاراکتر باشد.</span>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="modal-footer">
					<p class="pull-right">
						<input type="checkbox" name="terms" />
						تمامی <a href="#">قوانین و مقررات سایت</a> را مطالعه کرده و قبول دارم.
					</p>
					<a href="#" class="btn btn-primary pull-left">ثبت اطلاعات</a>
				</div>
			</div>