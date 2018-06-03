<!DOCTYPE html>
<html>
<head>
	<title>Bài thi</title>
	<meta charset="utf-8">
	<meta http-equiv="U-XA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid hot-header">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">PHP12</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Trang chủ</a></li>
		        <li><a href="#">Khóa học</a></li>
		        <li><a href="#">Môn học</a></li>
						<li><a href="#">Giáo viên</a></li>
						<li><a href="#">Liên hệ</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-toggle="modal" data-target="#form-login">Đăng nhập</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="{{asset('image/slider1.jpg')}}" alt="...">
				    </div>
				    <div class="item">
				      <img src="image/slider1.jpg" alt="...">
				    </div>
				    <div class="item">
				      <img src="image/slider1.jpg" alt="...">
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 hot-new">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="title">KHOÁ HỌC MỚI</h3>
						<hr>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 hot-post">
								<img src="image/hot-news.jpg" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 hot-post">
								<img src="image/hot-news.jpg" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 hot-post">
								<img src="image/hot-news.jpg" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 hot-post">
								<img src="image/hot-news.jpg" class="img-responsive">
								<a href="#">CÂU CHUYỆN ANH KỸ SƯ CỦA FACEBOOK KHÔNG CÓ BẰNG CẤP 3 LẪN ĐẠI HỌC</a>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row new-post">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3 class="new-title">Khóa học mới</h3>
					</div>
					<div class="col-sm-6 text-right right-post">
						<a>Xem thêm</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3">
						<div class="thumbnail">
					      <img src="image/hot-news.jpg" alt="...">
					      <div class="caption">
					        <h3 class="hot-content">C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
					        <p>Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…</p>
					        <p><a href="#" class="btn btn-primary" role="button">Xem chi tiết</a></p>
					      </div>
					    </div>
					</div>
					<div class="col-sm-3">
						<div class="thumbnail">
					      <img src="image/hot-news.jpg" alt="...">
					      <div class="caption">
					        <h3 class="hot-content">C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
					        <p>Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…</p>
					        <p><a href="#" class="btn btn-primary" role="button">Xem chi tiết</a></p>
					      </div>
					    </div>
					</div>
					<div class="col-sm-3">
						<div class="thumbnail">
					      <img src="image/hot-news.jpg" alt="...">
					      <div class="caption">
					        <h3 class="hot-content">C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
					        <p>Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…</p>
					        <p><a href="#" class="btn btn-primary" role="button">Xem chi tiết</a></p>
					      </div>
					    </div>
					</div>
					<div class="col-sm-3">
						<div class="thumbnail">
					      <img src="image/hot-news.jpg" alt="...">
					      <div class="caption">
					        <h3 class="hot-content">C LANGUAGE, HTML5, CSS3, JAVASCRIPT</h3>
					        <p>Xây dựng và phát triển website doanh nghiệp, website thương mại điện tử; tự phân tích, chuẩn hóa và quản trị cơ sở dữ liệu trên nền SQL Server,…</p>
					        <p><a href="#" class="btn btn-primary" role="button">Xem chi tiết</a></p>
					      </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal login -->
		<div class="modal fade" id="form-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal" action="#" method="post">
		        	<div class="form-group form-style">
		        		<label>Tên đăng nhập</label>
		        		<input type="text" id="login-user" class="form-control" placeholder="Username">
		        		<p id="error-user" class="text-danger"></p>
		        	</div>
		        	<div class="form-group form-style">
		        		<label>Mật khẩu</label>
		        		<input type="password" id="login-pass" class="form-control" placeholder="Password">
		        		<p id="error-pass" class="text-danger"></p>
		        	</div>
		        	<div class="form-group form-style">
		        		<input class="btn btn-info" value="Đăng nhập" id="login-submit" type="submit">
		        	</div>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</body>
</html>