<div class="container" id="tag_product">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="assets/dest/images/products/2.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span class="flash-del">$34.55</span>
												<span class="flash-sale">$33.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							<div id="promotion_price"></div>
							<div id="unit_price"></div>
							<div id="not_ajax">
							@foreach($products as $product)
								@if($product->promotion_price!=0)
									<div class="col-sm-3" style="margin-bottom: 10px;">
									<div id="promotion_price">
										<div class="single-item">
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

											<div class="single-item-header">
												<a href="product.html"><img src="image/product/{{$product->image}}" style="height:250px;" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$product->name}}</p>
												<p class="single-item-price">
													<span class="flash-del">{{$product->unit_price}}VND</span>
													<span class="flash-sale">{{$product->promotion_price}}VND</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									</div>
								@else
									<div class="col-sm-3" id="unit_price" style="margin-bottom: 10px;">
										<div class="single-item">
											<div class="single-item-header">
												<a href="product.html"><img src="image/product/{{$product->image}}" style="height:250px;" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$product->name}}</p>
												<p class="single-item-price">
													<span>{{$product->unit_price}}VND</span>
												</p>
												
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
							</div>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
		<div class="row">
			<div class="col-sm-3">{{$products->links()}}</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3"></div>
		</div>
	</div> <!-- .container -->
	