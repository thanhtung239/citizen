@extends('layouts.app')

@section('content')
	<div class="home">
		<!-- PRELOADER -->
		{{-- <div class="loader">
			<div class="loader-icon">
				<img src="img/loader.png" alt="preloder">
			</div>
		</div> --}}
		<!-- START HEADER AREA -->
		<header id="bottomToup" class="header-area">
			<!-- main header here -->
			<div class="main-header">
				<div class="container">
					<div class="row align-items-center">
						<!-- logo -->
						<div class="col-lg-2">
							<div class="logo">
								<a href="#">
									<img src="img/logo.png" alt="logo">
								</a>
							</div>
						</div>
						<!-- manu -->
						<div class="col-lg-10 main-menu">
							<nav id="menu">
								<ul>
									<li><a class="opinion" href="#">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER AREA -->
		<!-- START HERO AREA -->
		<section class="home-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-4 col-sm-9">
						<div class="hero-content">
							<h1 data-wow-duration="2s" class=" wow animate__animated animate__fadeInRight">CITIZEN V <br><span>Tổng cục điều tra dân số Việt Nam</span> </h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END HERO AREA -->


		<!-- START ABOUT US AREA -->
		<section id="about" class="aboutUs-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div data-wow-duration="2s" data-wow-delay="0.5s" class="about-content-left wow animate__animated animate__fadeInLeft">
							<div class="about-content-left-imgOne">
								<img src="img/bandodanso.jpg" alt="Bản đồ dân số Việt Nam">
							</div>
							<div class="about-content-left-imgTow">
								<img src="img/thuthapthongtindancu.jpg" alt="Thu thập thông tin dân cư">
							</div>
							<div class="about-content-left-text">
								<h3>60 năm thành lập</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-5 ">
						<div class="about-content-right">
							<h4 class="wow animate__animated animate__fadeInRight">Thông tin</h4>
							<h1 data-wow-duration="1.6s" data-wow-delay="0.2s" class="wow animate__animated animate__fadeInRight">Tổng cục dân số Việt Nam</h1>
							<br>
							<p data-wow-duration="1.6s" data-wow-delay="0.4s" class="wow animate__animated animate__fadeInRight">Tổng cục Dân số là cơ quan trực thuộc Bộ Y tế, thực hiện chức năng tham mưu, giúp Bộ trưởng Bộ Y tế quản lý nhà nước và tổ chức thực thi pháp luật về dân số trong phạm vi cả nước, bao gồm các lĩnh vực: Quy mô dân số, cơ cấu dân số và chất lượng dân số; tổ chức thực hiện các hoạt động dịch vụ công về dân số theo quy định của pháp luật.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END ABOUT US AREA -->


		<!-- START POPULATION INFO AREA -->
		<section id="why" class="populationinfo-area">
			<div class="container">
				<div class="row choserow">
					<!-- population info left -->
					<div class="col-lg-6">
						<div data-wow-delay="0.5s" data-wow-duration="1.5s" class="population-info-left-content wow animate__animated animate__zoomIn">
							<div class="population-info-left-content-head">
								<h4>Thông tin dân cư</h4>
								<h2>Thông tin về dân cư Việt Nam</h2>
								<p>Số liệu được thống kê vào năm 2021</p>
							</div>
							<div class="population-info-left-content-body">
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Tỉnh/Thành phố </p>
										<h5 id="number1" class="wow1">63</h5>
									</div>
								</div>
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Diện tích</p>
										<h5 id="number2">331690 </h5> <p>Km2</p>
									</div>
								</div>
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Dân số</p>
										<h5 id="number3">98548320</h5>
										<p>Người</p>
									</div>
								</div>
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Mật độ dân số</p>
										<h5 id="number4">318</h5>
										<p>Người/Km2 </p>
									</div>
								</div>
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Độ tuổi trung bình</p>
										<h5>32.9</h5>
										<p>Tuổi</p>
									</div>
								</div>
								<div class="content-body-modul">
									<div class="modul-text">
										<p>Tốc độ gia tăng dân số</p>
										<h5>0.91%</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- population info right -->
					<div class="col-lg-6 choseRight">
						<div data-wow-delay="0.4s" data-wow-duration="1.6s" data-wow-delay="0.2s" class="population-info-right-content wow animate__animated animate__fadeInRight" >
							<div class="population-info-right-content-img">
								<img src="img/tongdanso.jpg" alt="tongdanso">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END CHOOSE US AREA -->


		<!-- START EVALUATE AREA -->
		<section id="evaluate" class="evaluate-area">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-lg-7 col-md-12">
						<div data-wow-duration="1.5s" class="owl-carousel wow animate__animated animate__fadeInUp">
							<div class="evaluate-content">
								<div class="evaluate-content--img">
									<img src="img/conten1.png" alt="conten1">
								</div>
								<div class="evaluate-content--text">
									<p>Kết quả Tổng điều tra dân số và Nhà ở năm 2019 (TĐT) do Tổng Cục Thống kê thực hiện cho thấy, dân số Việt Nam đã đạt mốc trên 96 triệu người. Tốc độ tăng dân số giai đoạn 2009-2019 thấp hơn so với giai đoạn 1999-2009 giúp Việt Nam giảm thứ bậc về quy mô dân số trên bản đồ dân số thế giới.</p>
								</div>
							</div>
							<div class="evaluate-content">
								<div class="evaluate-content--img">
									<img src="img/conten1.png" alt="conten">
								</div>
								<div class="evaluate-content--text">
									<p>Tỷ trọng dân số từ 15-64 tuổi chiếm 68,0% (giảm 1,1 điểm phần trăm so với năm 2009), tỷ trọng dân số dưới 15 tuổi và từ 65 tuổi trở lên chiếm lần lượt là 24,3% và 7,7%. Như vậy, Việt Nam đang trong thời kỳ “cơ cấu dân số vàng” khi mà cứ một người phụ thuộc thì có hai người trong độ tuổi lao động. Dự báo đến khoảng năm 2040, Việt Nam sẽ kết thúc thời kỳ “cơ cấu dân số vàng”.</p>
								</div>
							</div>
							<div class="evaluate-content">
								<div class="evaluate-content--img">
									<img src="img/conten1.png" alt="conten">
								</div>
								<div class="evaluate-content--text">
									<p>Mật độ dân số của Việt Nam là 290 người/km2, tăng 31 người/km2 so với năm 2009. Với kết quả này, Việt Nam là quốc gia có mật độ dân số đứng thứ ba trong khu vực Đông Nam Á, sau Phi-li-pin (363 người/km2) và Xin-ga-po (8.292 người/km2) .</p>
								</div>
							</div>
							<div class="evaluate-content">
								<div class="evaluate-content--img">
									<img src="img/conten1.png" alt="conten">
								</div>
								<div class="evaluate-content--text">
									<p>Tại Việt Nam, do sự biến đổi về cơ cấu tuổi của dân số theo xu hướng tỷ trọng của trẻ em dưới 15 tuổi giảm và tỷ trọng của dân số từ 60 tuổi trở lên tăng đã làm cho chỉ số già hóa có xu hướng tăng lên nhanh chóng trong hai thập kỷ qua: Chỉ số già hóa năm 2019 là 48,8%, tăng 13,3 điểm phần trăm so với năm 2009 và tăng hơn hai lần so với năm 1999. Chỉ số già hóa có xu hướng tiếp tục tăng lên trong những năm sắp tới.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END EVALUATE AREA -->
		




			<!-- START LATEST NEWS AREA -->
			<section class="latestNews-area ">
				<div class="container">
					<div class="row wow animate__animated animate__fadeInUp">
						<div class="col-lg-12 ">
							<div class="letestNews-content">
								<div class="content-head">
									<h4>Thông tin nhanh</h4>
									<h2>Thông tin mới nhất về dân cư </h2>
									<p>Cập nhật mới nhất các thông tin về hoạt động liên quan đến quy mô dân số, cơ cấu dân số và chất lượng dân số; tổ chức thực hiện các hoạt động dịch vụ công về dân số</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row blog-body">
						<div class="col-lg-4 col-md-6 col-sm-6 mt-5">
							<div data-wow-duration="1.5s" class="leatestNews-blogItem wow animate__animated animate__fadeInUp">
								<div class="blogItem-content">
									<div class="content-img">
										<a href="#">
											<img src="img/hoinghi.png" alt="hoinghiketquadieutradanso">
										</a>
									</div>
									<div class="body-text">
										<div class="content-archive">
											<div class="date">
												<a href="#">24/12/2021</a>
											</div>
											<div class="tag">
												<a href="#">Phạm Vũ</a>
											</div>
										</div>
										<a href="#">
											<h3>Hội nghị công bố kết quả điều tra dân số</h3>
										</a>
										<div class="read-more">
											<a href="#">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 mt-5">
							<div data-wow-duration="1.5s" data-wow-delay="0.5s" class="leatestNews-blogItem wow animate__animated animate__fadeInUp">
								<div class="blogItem-content">
									<div class="content-img">
										<a href="#">
											<img src="img/thongtindanso.jpg" alt="thongtindanso">
										</a>
									</div>
									<div class="body-text">
										<div class="content-archive">
											<div class="date">
												<a href="#">25/12/2021</a>
											</div>
											<div class="tag">
												<a href="#">Thanh Tùng</a>
											</div>
										</div>
										<a href="#">
											<h3>Thông tin chi tiết kế quả điều tra dân số</h3>
										</a>
										<div class="read-more">
											<a href="#">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 mt-5">
							<div data-wow-duration="1.5s" data-wow-delay="0.9s" class="leatestNews-blogItem wow animate__animated animate__fadeInUp">
								<div class="blogItem-content">
									<div class="content-img">
										<a href="#">
											<img src="img/vaitro.jpg" alt="Vaitrodieutradanso">
										</a>
									</div>
									<div class="body-text">
										<div class="content-archive">
											<div class="date">
												<a href="#">26/12/2021</a>
											</div>
											<div class="tag">
												<a href="#">Minh Hùng</a>
											</div>
										</div>
										<a href="#">
											<h3>Vai trò của tổng điều tra dân số</h3>
										</a>
										<div class="read-more">
											<a href="#">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- START OPINION AREA -->
		<section id="contact" class="opinion-area ">
			<div class="container">
				<div class="row wow animate__animated animate__fadeInUp">
					<!-- opinion left area -->
					<div class="col-lg-6">
						<div class="opinion-left-content">
							<h2>Đóng góp ý kiến</h2>
							<p>Thu thập mọi ý kiến đóng góp của người dân cũng như cán bộ, viên chức </p>
						</div>
					</div>
					<!-- opinion right area -->
					<div class="col-lg-6">
						<div class="opinion-right-content">
							<form id="contact-form" class="atf-contact-form" method="POST" action="php/mail.php">
								<div class="opinion-form-inputField">
									<input type="text" name="Full Name" placeholder="Họ và tên" required>
									<input type="text" name="Phone" placeholder="Số điện thoại" required>
									<select class="select" name="Chức vụ" id="brand-select">
										<option selected disabled>Chức vụ</option>
										<option value="Dan">Người dân</option>
										<option value="Xa">Công chức xã</option>
										<option value="Huyen">Công chức huyện</option>
										<option value="Tinh">Công chức tỉnh</option>
										<option value="Khac">Khác</option>
									</select>
									<input type="text" name="Full Name" placeholder="Ý kiến" required>
								</div>
								<button type="submit" class="box-btn box-transparent">Gửi</button>
							</form>

							<p class="form-message"></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END BOOK APPIONMENT AREA -->



	
		
		<!-- START FOOTER AREA -->
		
		<footer>
			<div class="top-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="footer-col1">
								<a href="#"><img src="img/Logo.png" alt="logo"></a>
								<p>Hệ thống nhập liệu dân cư Việt Nam</p>
								<p>Địa chỉ: 54 Nguyễn Chí Thanh</p>
								<p>SĐT:(+84) 123456789</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="footer-col2">
								<h4>Liên hệ</h4>
								<form action="#">
									<input type="email" name="Email" placeholder="Email Address" required>
									<button>Send</button>
								</form>
								<div class="social-link">
									<a href="#"><i class="fab fa-facebook-square"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter-square"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="footer-col3">
								<h4>Sinh Viên</h4>
								<div class="footer-blog">
									<div class="footer-single-blog">
										<a href="#">
											<div class="img">
												<img src="img/hung.jpg" alt="img">
											</div>
											<div class="text">
												<h5>Hoàng Thanh Tùng</h5>
												<p>18000000</p>
											</div>
										</a>
									</div>
									<div class="footer-single-blog">
										<a href="#">
											<div class="img">
												<img src="img/hung.jpg" alt="img">
											</div>
											<div class="text">
												<h5>Vũ Phạm</h5>
												<p>1800000000</p>
											</div>
										</a>
									</div>
									<div class="footer-single-blog">
										<a href="#">
											<div class="img">
												<img src="img/hung.jpg" alt="img">
											</div>
											<div class="text">
												<h5>Tăng Văn Minh Hùng</h5>
												<p>19020314</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="footer-col4">
								<h4>Hình ảnh</h4>
								<div class="gallery-cotent">
									<a class="image-link" ><img src="img/bandodanso.jpg"></a>
									<a class="image-link" ><img src="img/fotter1.jpg"> </a>
									<a class="image-link" ><img src="img/fotter2.png"> </a>
									<a class="image-link" ><img src="img/fotter3.jfif"> </a>
									<a class="image-link" ><img src="img/fotter4.jfif"> </a>
									<a class="image-link" ><img src="img/fotter5.jfif"> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row justify-content-center">
						<p>&copy; INT3306 5 <span>|</span> Designed by <a href="#">students of UET</a></p>
					</div>
				</div>
				<a class="bottomToup" href="#bottomToup"><i class="flaticon-arrow-up"></i></a>
			</div>
		</footer>
	</div>
@endsection
