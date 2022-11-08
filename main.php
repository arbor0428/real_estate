<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>집PRO</title>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
		<link href="/css/main.css?v=1" rel="stylesheet" type="text/css">
		<link href="/css/all.css?v=1" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	</head>

	<body>

		<?
			include'my.php';
		?>


		<div style='display:flex;width:100%;height:100%;'>
			<div style='width:280px;height:100%;background:#ffffff;position:fixed;left:0px;top:0;z-index:100;transition:all 1s;border-right:1px solid #ed164b;' class='leftBox'>
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
				</script>




				<!-- * 카카오맵 - 지도퍼가기 -->
				<!-- 1. 지도 노드 -->
				<div id="daumRoughmapContainer1665708674585" class="root_daum_roughmap root_daum_roughmap_landing"></div>

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
						"mapWidth" : "1920",
						"mapHeight" : "950"
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