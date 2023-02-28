<?
include '/home/zippro/www/adm/head.php';
$sideArr[1] = 'active';
$showArr[1] = 'show';
$subArr['manageplace'] = 'active';
$subunArr['real'] = 'active';
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
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">현장관리 - 현장 목록</h4>
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
                                                <th>유형</th>
                                                <th>현장명</th>
                                                <th>주소</th>
                                                <th>대표 연락처</th>
                                                <th>답사상태</th>
                                                <th>노출</th>
                                                <th>답사수정일자</th>
                                                <th>답사수정자</th>
                                                <th>등록일자</th>
                                                <th>등록자</th>
                                                <th>수정일시</th>
                                                <th>수정자</th>
                                                <th>수정하기</th>
                                                <th>현장상태</th>
                                                <th>위도</th>
                                                <th>경도</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="newplace_type">신축</span>
                                                </td>
                                                <td>
                                                    명학아크로펠리스
                                                </td>
                                                <td>
                                                    경기 안양시 만안구 안양동 213-28
                                                </td>
                                                <td>
                                                    010-2121-4848
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5 오전 11:00
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    <a class="edit_btn dp_f dp_c dp_cc" href="./write.php" title="수정하기">
                                                        <span class="lnr lnr-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="place_status grn">분양중</div>
                                                </td>
                                                <td>
                                                    37.593261
                                                </td>
                                                <td>
                                                    127.141115
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="oldplace_type">구옥</span>
                                                </td>
                                                <td>
                                                    명학아크로펠리스
                                                </td>
                                                <td>
                                                    경기 안양시 만안구 안양동 213-28
                                                </td>
                                                <td>
                                                    010-2121-4848
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5 오전 11:00
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    <a class="edit_btn dp_f dp_c dp_cc" href="./write.php" title="수정하기">
                                                        <span class="lnr lnr-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="place_status red">완료</div>
                                                </td>
                                                <td>
                                                    37.593261
                                                </td>
                                                <td>
                                                    127.141115
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="newplace_type">신축</span>
                                                </td>
                                                <td>
                                                    명학아크로펠리스
                                                </td>
                                                <td>
                                                    경기 안양시 만안구 안양동 213-28
                                                </td>
                                                <td>
                                                    010-2121-4848
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    대기
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    2022.6.5 오전 11:00
                                                </td>
                                                <td>
                                                    김명식
                                                </td>
                                                <td>
                                                    <a class="edit_btn dp_f dp_c dp_cc" href="./write.php" title="수정하기">
                                                        <span class="lnr lnr-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="place_status blue">보류</div>
                                                </td>
                                                <td>
                                                    37.593261
                                                </td>
                                                <td>
                                                    127.141115
                                                </td>
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