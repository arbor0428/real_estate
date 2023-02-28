<!-- 여기 네비도 -->
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>

	<i class="far fa-clock"></i><span id="clock" style="color:#666;padding-left:10px;"></span>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

	

		<li class="nav-item">
			<a href="/" title="홈페이지 이동" class="nav-link">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">집프로 홈페이지 이동</span>
			</a>
		</li>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small" id="GBL_NAME"><?= $GBL_NAME ?></span>
				<!--
				<img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
			-->
				<i class="fas fa-user-circle" style="font-size:2.1em;"></i>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<!--
				<a class="dropdown-item" href="#">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					<span>프로필</span>
				</a>
			-->
				<a class="dropdown-item" href="javascript:userModify();">
					<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
					<span>정보변경</span>
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="/module/login/logout_proc.php">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					<span>로그아웃</span>
				</a>
			</div>
		</li>

	</ul>

</nav>
<!-- End of Topbar -->
<!--//여기 네비도 -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top" style="display:inline;z-index:9999;">
	<i class="fas fa-angle-up"></i>
</a>

<script>
	function userModify() {
		$("#multiBox").css({
			"width": "90%",
			"max-width": "500px"
		});
		$('#multi_ttl').text('정보변경');
		$('#multiFrame').html("<iframe src='/adm/modify.php' name='modifyFrame' style='width:100%;height:400px;' frameborder='0' scrolling='auto'></iframe>");
		$('.multiBox_open').click();
	}

	function digitalClock() {
		week = ["일", "월", "화", "수", "목", "금", "토"];

		timer = new Date();
		year = timer.getFullYear();
		month = timer.getMonth() + 1;
		date = timer.getDate();
		day = timer.getDay();
		h = timer.getHours();
		m = timer.getMinutes();
		s = timer.getSeconds();

		month = (("00" + month.toString()).slice(-2));
		date = (("00" + date.toString()).slice(-2));
		h = (("00" + h.toString()).slice(-2));
		m = (("00" + m.toString()).slice(-2));
		s = (("00" + s.toString()).slice(-2));

		$('#clock').text(year + "-" + month + "-" + date + "(" + week[day] + ") " + h + ":" + m + ":" + s);
	}

	$(document).ready(function() {
		digitalClock();

		setInterval(function() {
			digitalClock();
		}, 1000);
	});
</script>





<!-- Page level plugins -->
<script src="/common/vendor/chart.js/Chart.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/common/js/sb-admin-2.min.js"></script>