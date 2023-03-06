<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>집PRO</title>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
		<link href="/css/main.css?v=2" rel="stylesheet" type="text/css">
		<link href="/css/all.css?v=1" rel="stylesheet" type="text/css">
		<link href="/css/mediaquery.css?v=2" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<!-- slick 불러오기 -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<!--<script src="/js/slick.min.js"></script>-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<script src="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/bootstrap-slider.js"></script>
		<link href="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/css/bootstrap-slider.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<?
			include'my.php';
		?>


		<div style='display:flex;width:100%;height:100%;'>
			<div class='leftBox'>
				<div class="m_left_close_btn">
					<span class="lnr lnr-chevron-right"></span>
					<span class="lnr lnr-chevron-left"></span>
				</div>
				<h1 class="logo" style='text-align:center;'><img src="/images/logo.png" style='width:100px;'></h1>
				
				<div class="gnb_menu_area">
					<div>
						<div style='font-size:24px;'><i class="fas fa-user-circle" style='color:#d1d3e2'></i> <b>홍길동</b>님</div>
						<div class='coupon'>
							이용권이 없습니다.<br>
							상품을 구매해주세요.
						</div>
					</div>
					<ul class="gnb_menu">
						<li><a href="#">홈으로</a></li>
						<li><a href="#">현장관리</a></li>
						<li><a href="#">마이페이지</a></li>
						<li><a href="#">회원관리</a></li>
						<li><a href="#">고객센터</a></li>
					</ul>
				</div>
				<div class="footer_area">
					<div class="footer_menu">
						<ul>
							<li><b><a>개인정보처리방침</a></b></li>
							<li><a>이용약관</a></li>
							<li><a>위치기반서비스 이용약관</a></li>
							<li><a>매물관리정책</a></li>
							<li><a href="#">사업자 정보</a></li>
						</ul>
					</div>
				</div>
				<!-- <img src='x.png' style='position:absolute;top:0;right:-48px;cursor:pointer;' class='close'> -->
			</div>
			<div style='width:100%;height:100%;overflow:hidden;position:relative;'>


				<div style='width:100%;height:100%;position:absolute;top:0;left:0;z-index:10;' class='bgbgbg'></div>

				<div class="map_search">
					<!--집프로 참고 코딩-->
					<?
						include'detail.php';
					?>
				</div>
				
				<script>
					var flag02 = true;
					$(".leftBox .m_left_close_btn").click(function(event){
						event.preventDefault();
						if(flag02){
							$(".leftBox").css({"left":"0","z-index":"45"});
							$(this).addClass("on");

							flag02= false;
						} else {
							$(".leftBox").css({"left":"-281px","z-index":"30"});
							$(this).removeClass("on");

							flag02= true;
						}
						
					});
					//마이페이지 화면 나타남
					$(".gnb_menu li:nth-child(3) a").click(function(event){

					event.preventDefault();

					$(".mypageWrap").show();
					$(".board_tbl").hide();

					});
					//마이페이지 화면 사라짐
					$(".mypageWrap .btn_close").click(function(event){

						event.preventDefault();

						$(".mypageWrap").hide();
					});
					//일반 게시판 화면 나타남
					$(".gnb_menu li:nth-child(5) a").click(function(event){

						event.preventDefault();

						$(".board_tbl").show();
						$(".mypageWrap").hide();
						
					});
					//일반 게시판 화면 사라짐
					$(".board_tbl .btn_close").click(function(event){

						event.preventDefault();

						$(".board_tbl").hide();
					});
					//filter페이지 나타남
					$(".searchBar .filterBtn").click(function(event){

						event.preventDefault();

						$(".filterMenu").show();
						
					});
					//filter페이지 사라짐
					$(".filterMenu .btn_close").click(function(event){

						event.preventDefault();

						$(".filterMenu").hide();
					});
					//list페이지 나타남
					var flag = true;
					$(".searchBarWrap .searchMenuBtn").click(function(event){

						event.preventDefault();
						
						if(flag){
							$(".map_search").addClass("active");

							flag= false;
						} else {
							$(".map_search").removeClass("active");

							flag= true;
						}
					});
					//view1페이지 나타남
					$(".detailWrap .listWrap .listBox a ").click(function(event){

						event.preventDefault();

						$(".view1wrap").show();
						$('.view1ImgSlick').slick('slickGoTo', 0); //탭클릭시 slick의 순서를 0번째부터 나오게
						$('.view1ImgSlick').slick('setPosition'); //slick의 위치를 수동으로 새로 고쳐줌
					});

					//view2페이지 나타남
					$(".view1wrap .listWrap .listBox").click(function(event){

						event.preventDefault();

						$(".view2wrap").show();
						$('.view2ImgSlick').slick('slickGoTo', 0); //탭클릭시 slick의 순서를 0번째부터 나오게
						$('.view2ImgSlick').slick('setPosition'); //slick의 위치를 수동으로 새로 고쳐줌
					});

					//view3페이지 나타남
					$(".view1wrap .row_floor .item_ho").click(function(event){

						event.preventDefault();

						$(".view3wrap").show();
						$('.view3ImgSlick').slick('slickGoTo', 0); //탭클릭시 slick의 순서를 0번째부터 나오게
						$('.view3ImgSlick').slick('setPosition'); //slick의 위치를 수동으로 새로 고쳐줌
					});
				</script>




				<!-- * 카카오맵 - 지도퍼가기 -->
				<!-- 1. 지도 노드 -->
				<div id="daumRoughmapContainer1665708674585" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%; height: 100vh !important;"></div>

				<!--
					2. 설치 스크립트
					* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
				-->
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

				<!-- 3. 실행 스크립트 -->
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1665708674585",
						"key" : "2c2a6",
						"mapWidth" : "auto",
						"mapHeight" : "auto"
					}).render();
				</script>
			</div>
		</div>

		<script>
			//$(".leftBox").addClass("open");
			$(".obtn").click(function(){
				$(".leftBox").addClass("open");
				$(".bgbgbg").addClass("bgbgbg_a");

			})
			$(".close").click(function(){
				$(".leftBox").removeClass("open");
				$(".bgbgbg").removeClass("bgbgbg_a");

			})
		</script>
	</body>
</html>