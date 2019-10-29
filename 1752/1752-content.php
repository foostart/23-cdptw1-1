
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="row"></div>
			<div class="banner">
				<div class="banner-left">
					<h3><b>Browse by <span id="text-color">Make</b></span></h3>
				</div>
				<div class="banner-right">
					<div class="main">
						<nav id="cbp-hrmenu" class="cbp-hrmenu">
							<ul>
								<li>
									<a href="#">Show all Makes</a>
									<div class="cbp-hrsub">
										<div class="cbp-hrsub-inner"> 
										<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
										</div><!-- /cbp-hrsub-inner -->
									</div><!-- /cbp-hrsub -->
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="car-manufacturer">
				<div class="row">
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
				</div>
				<div class="car-manufacturer">
					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<div class="image">
									<img src="../1752/images/img.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/img.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/img.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/img.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
		<div class="banner">
				<div class="banner-left">
					<h3><b>Browse by <span id="text-color">Make</b></span></h3>
				</div>
				<div class="banner-right">
					<div class="main">
						<nav id="cbp-hrmenu" class="cbp-hrmenu">
							<ul>
								<li>
									<a href="#">Show all Makes</span></a>
									<div class="cbp-hrsub">
										<div class="cbp-hrsub-inner"> 
										<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
									<div>
										<ul>
											<li><a href="#">BMW</a></li>
											<li><a href="#">Lexus</a></li>
											<li><a href="#">Acura</a></li>
											<li><a href="#">Mecerdex Ben</a></li>
										</ul>
									</div>
										</div><!-- /cbp-hrsub-inner -->
									</div><!-- /cbp-hrsub -->
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="car-manufacturer">
				<div class="row">
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/img.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/img.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#">
							<div class="image">
								<img src="../1752/images/bmw-189x131.png">
							</div>
							<div class="text-name">
								BWM<span class="count"> (2)</span>
							</div>
						</a>
					</div>
				</div>
				<div class="car-manufacturer">
					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<div class="image">
									<img src="../1752/images/bmw-189x131.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/bmw-189x131.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/bmw-189x131.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
						<a href="#">
								<div class="image">
									<img src="../1752/images/bmw-189x131.png">
								</div>
								<div class="text-name">
									BWM<span class="count"> (2)</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<hr>
	</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

