<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand-->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/adm/">
		<div class="sidebar-brand-icon" style="padding: 5px 20px; border-radius: 4px; background-color: #f3f2f2; color: #000; display: flex; justify-content: space-between; align-items: center;"><img src='/images/logo.png' style="height: 40px; margin-right: 10px;"> 집프로 관리자</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<li class="nav-item <?= $sideArr[1] ?>">
		<a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#subList1" aria-expanded="true" aria-controls="subList1">
			<span>매물관리</span>
		</a>
		<div id="subList1" class="collapse <?= $showArr[1] ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<ul>
					<li>
						<a class="collapse-item <?= $subArr['place'] ?>" href="/adm/house/place/old">매물관리</a>
						<ul class="depth2">
							<li class="<?= $subunArr['old'] ?>"><a href="/adm/house/place/old">- 구옥현장등록</a></li>
							<li class="<?= $subunArr['new'] ?>"><a href="/adm/house/place/new">- 신축현장등록</a></li>
						</ul>
					</li>
					<li>
						<a class="collapse-item <?= $subArr['manageplace'] ?>" href="/adm/house/manageplace/real">현장관리</a>
						<ul class="depth2">
							<li class="<?= $subunArr['real'] ?>"><a href="/adm/house/manageplace/real">- 현장목록</a></li>
							<li class="<?= $subunArr['inspect'] ?>"><a href="/adm/house/manageplace/inspect">- 검수목록</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</li>

	<li class="nav-item <?= $sideArr[2] ?>"">
		<a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#subList2" aria-expanded="true" aria-controls="subList2">
			<span>회원관리</span>
		</a>
		<div id="subList2" class="collapse <?= $showArr[2] ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?= $subArr['managemember'] ?>" href="/adm/members/managemember">회원목록</a>
				<a class="collapse-item <?= $subArr['report'] ?>" href="/adm/members/report">회원제보</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#subList3" aria-expanded="true" aria-controls="subList3">
			<span>결제관리</span>
		</a>
		<div id="subList3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="">결제내역</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">


</ul>
<!-- End of Sidebar -->