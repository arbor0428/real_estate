<?
include '/home/zippro/www/adm/head.php';
$sideArr[2] = 'active';
$showArr[2] = 'show';
$subArr['managemember'] = 'active';
?>

<div id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<?
		include '/home/zippro/www/adm/sidemenu.php';
		?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">
				<?
				include '/home/zippro/www/adm/nav.php';
				?>
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Content Row -->
					<div class="row">
						<div class="col-sm mb-4">
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">회원 관리 상세</h4>
							<div class="card shadow mb-4">
								<div class="card-body">
                                    <p class="zipro_table_tit">회원기본정보</p>
                                    <table class="zipro_tbl half__tbl">
										<tbody>
											<tr>
												<th>이름</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="이름을 입력해주세요.">
													</div>
												</td>
                                                <th>닉네임</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="닉네임을 입력해주세요.">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>회원유형</th>
												<td>
                                                    <ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio9_1" id="member_chk4_1">
															<label for="member_chk4_1">집프로</label>
														</li>
														<li>
															<input type="radio" name="radio9_1" id="member_chk4_2">
															<label for="member_chk4_2">카카오</label>
														</li>
                                                        <li>
															<input type="radio" name="radio9_1" id="member_chk4_3">
															<label for="member_chk4_3">카카오</label>
														</li>
													</ul>
												</td>
                                                <th>회원구분</th>
												<td>
                                                    <ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio9_2" id="member_chk4_4">
															<label for="member_chk4_4">일반회원</label>
														</li>
														<li>
															<input type="radio" name="radio9_2" id="member_chk4_5">
															<label for="member_chk4_5">분양회원</label>
														</li>
                                                        <li>
															<input type="radio" name="radio9_2" id="member_chk4_6">
															<label for="member_chk4_6">집프로</label>
														</li>
													</ul>
												</td>
                                            </tr>
                                            <tr>
                                                <th>이메일</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text">
													</div>
												</td>
                                                <th>연락처</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text">
													</div>
												</td>
                                            </tr>
										</tbody>
									</table>

                                    <p class="zipro_table_tit">회원상세정보</p>
                                    <table class="zipro_tbl half__tbl">
										<tbody>
											<tr>
                                                <th>회사명</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="회사명을 입력해주세요.">
													</div>
												</td>
                                                <th>팀명</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="팀명을 입력해주세요.">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>직급</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="직급을 입력해주세요.">
													</div>
												</td>
											</tr>
										</tbody>
									</table>

                                    <p class="zipro_table_tit">회원상태관리</p>
                                    <table class="zipro_tbl half__tbl">
										<tbody>
											<tr>
                                                <th>상태</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="상태를 입력해주세요.">
													</div>
												</td>
                                                <th>가입일시</th>
												<td>
													<div class="inputWrap">
														<input type="date">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>승인자</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="승인자를 입력해주세요.">
													</div>
												</td>
                                                <th>승인일시</th>
												<td>
													<div class="inputWrap">
														<input type="date">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>반려자</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="반려자를 입력해주세요.">
													</div>
												</td>
                                                <th>반려일시</th>
												<td>
													<div class="inputWrap">
														<input type="date">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>반려사유</th>
												<td colspan="3" style="width: 85%;">
                                                    <div class="inputWrap">
														<input class="wid100" type="text" placeholder="반려사유를 입력해주세요.">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>결제상태</th>
												<td>
                                                    <div class="inputWrap">
														<input type="text" placeholder="결제상태를 입력해주세요.">
													</div>
												</td>
                                                <th>잔여일수</th>
												<td>
													<div class="inputWrap">
                                                    <input type="date">
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>명함</th>
												<td colspan="3" style="width: 85%;">
                                                    <div class="dp_f dp_c dp_wrap">
														<div class="img_sum">
															<img src="" alt="">
															<div class="img_sum_tit dp_f dp_c">
																<span>123koddggggggg</span>
																<span>.jpg</span>
															</div>
														</div>
														<div class="img_sum">
															<img src="" alt="">
															<div class="img_sum_tit dp_f dp_c">
																<span>123koddggggggg</span>
																<span>.jpg</span>
															</div>
														</div>
													</div>
												</td>
											</tr>
                                            <tr>
                                                <th>사업자등록증</th>
												<td colspan="3" style="width: 85%;">
													<div class="dp_f dp_c dp_wrap">
														<div class="img_sum">
															<img src="" alt="">
															<div class="img_sum_tit dp_f dp_c">
																<span>123koddggggggg</span>
																<span>.jpg</span>
															</div>
														</div>
														<div class="img_sum">
															<img src="" alt="">
															<div class="img_sum_tit dp_f dp_c">
																<span>123koddggggggg</span>
																<span>.jpg</span>
															</div>
														</div>
													</div>
												</td>
											</tr>
											<tr>
                                                <th>메모</th>
												<td colspan="3" style="width: 85%;">
													<textarea placeholder="직원 전용 활용 메모 칸" style="width: 100%; resize:none; height: 200px; box-sizing:border-box;"></textarea>
												</td>
											</tr>
											<tr>
                                                <th>권한 관리</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio9_3" id="member_chk4_7">
															<label for="member_chk4_7">경고</label>
														</li>
														<li>
															<input type="radio" name="radio9_3" id="member_chk4_8">
															<label for="member_chk4_8">1차</label>
														</li>
                                                        <li>
															<input type="radio" name="radio9_3" id="member_chk4_9">
															<label for="member_chk4_9">2차</label>
														</li>
													</ul>
												</td>
												<th>권한 정보</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio9_4" id="member_chk4_10">
															<label for="member_chk4_10">직원 등록</label>
														</li>
														<li>
															<input type="radio" name="radio9_4" id="member_chk4_11">
															<label for="member_chk4_11">관리자 등록</label>
														</li>
                                                        <li>
															<input type="radio" name="radio9_4" id="member_chk4_12">
															<label for="member_chk4_12">일반</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="dp_f dp_c dp_cc" style="margin: 40px 0 20px;">
										<a class="badge_SanMarino" href="" title="비밀번호 초기화" style="margin: 0 10px; padding: 3px 10px; border-radius: 3px; font-size: 1rem;">비밀번호 초기화</a>
										<a class="btn-danger" href="" title="탈퇴처리" style="margin: 0 10px; padding: 3px 10px; border-radius: 3px; font-size: 1rem;">탈퇴처리</a>
										<a class="badge_Sushi" href="" title="수정" style="margin: 0 10px; padding: 3px 10px; border-radius: 3px; font-size: 1rem;">수정</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?
			include 'footer.php';
			?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

</div>