<?
include '/home/zippro/www/adm/head.php';
$sideArr[2] = 'active';
$showArr[2] = 'show';
$subArr['managemember'] = 'active';
?>
<style>
    .listTable tr td {cursor: pointer;}
</style>
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
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">회원 관리</h4>
							<div class="card shadow mb-4">
								<div class="card-body">
                                    <div class="dp_sb" style="margin-bottom: 10px;">
                                        <div class="">
                                            총 3건
                                        </div>
                                        <div class="dp_f dp_c">
                                            <a class="place_filter_btn red" href="" title="필터">필터 +</a>
                                            <select style="width: 100px;">
                                                <option value="">20</option>
                                            </select>
                                        </div>
                                        <div class="popup_wrap manageplace_pop">
                                            <div class="popup_box">
                                                <div class="dp_sb">
                                                    <p class="popup_tit">필터</p>
                                                    <a class="pop_close_btn dp_f dp_c dp_cc" href="" title="닫기">
                                                        <span class="lnr lnr-cross"></span>
                                                    </a>
                                                </div>
                                                <?
                                                include './filter.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $(".place_filter_btn").on("click",function(event){

                                            event.preventDefault();
                                            $(".manageplace_pop").stop().fadeIn();

                                        });

                                        $(".pop_close_btn").on("click",function(event){

                                            event.preventDefault();
                                            $(".popup_wrap").hide();

                                        });
                                    </script>
                                    <table class="listTable">
                                        <tbody>
                                            <tr>
                                                <th>회원번호</th>
                                                <th>상태</th>
                                                <th>회원유형</th>
                                                <th>회원구분</th>
                                                <th>이름</th>
                                                <th>닉네임</th>
                                                <th>전화번호</th>
                                                <th>회사명</th>
                                                <th>팀명</th>
                                                <th>직급</th>
                                                <th>경고</th>
                                                <th>누적사용포인트</th>
                                                <th>잔여포인트</th>
                                                <th>잔여일수</th>
                                                <th>가입일시</th>
                                                <th>최종접속일시</th>
                                                <th>결제유무</th>
                                            </tr>
                                            <tr>
                                                <td onClick="location.href='./view.php'">1</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status grn">승인</div></td>
                                                <td onClick="location.href='./view.php'"><div class="mem_status red">집프로</div></td>
                                                <td onClick="location.href='./view.php'"><div class="c_red bold2">관리자</div></td>
                                                <td onClick="location.href='./view.php'">김명식</td>
                                                <td onClick="location.href='./view.php'">집프로1</td>
                                                <td onClick="location.href='./view.php'">010-6429-3162</td>
                                                <td onClick="location.href='./view.php'">트레벨부동산</td>
                                                <td onClick="location.href='./view.php'">1팀</td>
                                                <td onClick="location.href='./view.php'">부장</td>
                                                <td onClick="location.href='./view.php'"></td>
                                                <td onClick="location.href='./view.php'">157000</td>
                                                <td onClick="location.href='./view.php'">5000</td>
                                                <td onClick="location.href='./view.php'">20일</td>
                                                <td onClick="location.href='./view.php'">2022.06.05</td>
                                                <td onClick="location.href='./view.php'">2022.06.05 오전 11:00</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status badge_MineShaft">결제</div></td>
                                            </tr>
                                            <tr>
                                                <td onClick="location.href='./view.php'">2</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status grn">승인</div></td>
                                                <td onClick="location.href='./view.php'"><div class="mem_status red">집프로</div></td>
                                                <td onClick="location.href='./view.php'"><div class="c_grn bold2">직원</div></td>
                                                <td onClick="location.href='./view.php'">강효원</td>
                                                <td onClick="location.href='./view.php'">집프로1</td>
                                                <td onClick="location.href='./view.php'">010-6429-3162</td>
                                                <td onClick="location.href='./view.php'">트레벨부동산</td>
                                                <td onClick="location.href='./view.php'">1팀</td>
                                                <td onClick="location.href='./view.php'">부장</td>
                                                <td onClick="location.href='./view.php'"></td>
                                                <td onClick="location.href='./view.php'">157000</td>
                                                <td onClick="location.href='./view.php'">5000</td>
                                                <td onClick="location.href='./view.php'">20일</td>
                                                <td onClick="location.href='./view.php'">2022.06.05</td>
                                                <td onClick="location.href='./view.php'">2022.06.05 오전 11:00</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status badge_MineShaft">결제</div></td>
                                            </tr>
                                            <tr>
                                                <td onClick="location.href='./view.php'">3</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status grn">승인</div></td>
                                                <td onClick="location.href='./view.php'"><div class="mem_status red">집프로</div></td>
                                                <td onClick="location.href='./view.php'"><div class="c_orange bold2">컨설팅</div></td>
                                                <td onClick="location.href='./view.php'">문상대</td>
                                                <td onClick="location.href='./view.php'">집프로1</td>
                                                <td onClick="location.href='./view.php'">010-6429-3162</td>
                                                <td onClick="location.href='./view.php'">트레벨부동산</td>
                                                <td onClick="location.href='./view.php'">1팀</td>
                                                <td onClick="location.href='./view.php'">부장</td>
                                                <td onClick="location.href='./view.php'"></td>
                                                <td onClick="location.href='./view.php'">157000</td>
                                                <td onClick="location.href='./view.php'">5000</td>
                                                <td onClick="location.href='./view.php'">20일</td>
                                                <td onClick="location.href='./view.php'">2022.06.05</td>
                                                <td onClick="location.href='./view.php'">2022.06.05 오전 11:00</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status badge_MineShaft">결제</div></td>
                                            </tr>
                                            <tr>
                                                <td onClick="location.href='./view.php'">4</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status blue">대기</div></td>
                                                <td onClick="location.href='./view.php'"><div class="mem_status yello">카카오</div></td>
                                                <td onClick="location.href='./view.php'"><div class="c_blue2 bold2">일반회원</div></td>
                                                <td onClick="location.href='./view.php'">조재승</td>
                                                <td onClick="location.href='./view.php'">집프로1</td>
                                                <td onClick="location.href='./view.php'">010-6429-3162</td>
                                                <td onClick="location.href='./view.php'">트레벨부동산</td>
                                                <td onClick="location.href='./view.php'">1팀</td>
                                                <td onClick="location.href='./view.php'">부장</td>
                                                <td onClick="location.href='./view.php'"><span class="c_red bold2">1차</span></td>
                                                <td onClick="location.href='./view.php'">157000</td>
                                                <td onClick="location.href='./view.php'">5000</td>
                                                <td onClick="location.href='./view.php'">20일</td>
                                                <td onClick="location.href='./view.php'">2022.06.05</td>
                                                <td onClick="location.href='./view.php'">2022.06.05 오전 11:00</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status badge_WaikawaGray">무료기간</div></td>
                                            </tr>
                                            <tr>
                                                <td onClick="location.href='./view.php'">5</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status red2">반려</div></td>
                                                <td onClick="location.href='./view.php'"><div class="mem_status grn02">네이버</div></td>
                                                <td onClick="location.href='./view.php'"><div class="c_blue bold2">분양회원</div></td>
                                                <td onClick="location.href='./view.php'">이홍균</td>
                                                <td onClick="location.href='./view.php'">집프로1</td>
                                                <td onClick="location.href='./view.php'">010-6429-3162</td>
                                                <td onClick="location.href='./view.php'">트레벨부동산</td>
                                                <td onClick="location.href='./view.php'">1팀</td>
                                                <td onClick="location.href='./view.php'">부장</td>
                                                <td onClick="location.href='./view.php'"><span class="c_red bold2">1차</span></td>
                                                <td onClick="location.href='./view.php'">157000</td>
                                                <td onClick="location.href='./view.php'">5000</td>
                                                <td onClick="location.href='./view.php'">20일</td>
                                                <td onClick="location.href='./view.php'">2022.06.05</td>
                                                <td onClick="location.href='./view.php'">2022.06.05 오전 11:00</td>
                                                <td onClick="location.href='./view.php'"><div class="place_status badge_RegentGray">미결제</div></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="pageNum dp_f dp_cc dp_c">
                                        <a class="arrow" href=""><span class="lnr lnr-chevron-left"></span></a>
                                        <a class="num active dp_f dp_cc dp_c" href="">1</a>
                                        <a class="num dp_f dp_cc dp_c" href="">2</a>
                                        <a class="num dp_f dp_cc dp_c" href="">3</a>
                                        <a class="arrow" href=""><span class="lnr lnr-chevron-right"></span></a>
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