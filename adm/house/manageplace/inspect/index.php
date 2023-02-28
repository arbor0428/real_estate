<?
include '/home/zippro/www/adm/head.php';
$sideArr[1] = 'active';
$showArr[1] = 'show';
$subArr['manageplace'] = 'active';
$subunArr['inspect'] = 'active';
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
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">현장관리 - 검수 목록</h4>
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
                                                <th>검수목록</th>
                                                <th>항목명</th>
                                                <th>사진</th>
                                                <th>속지</th>
                                                <th>미확인</th>
                                                <th>전용면적</th>
                                                <th>미준공</th>
                                                <th>미입력</th>
                                                <th>세대/타입 없음</th>
                                                <th>메모</th>
                                                <th>수정</th>
                                                <th>리스트업 일자</th>
                                                <th>예약 확인 일자</th>
                                                <th>담당자</th>
                                                <th>답사상태</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="newplace_type">신축</span>
                                                </td>
                                                <td>명학아크로펠리스</td>
                                                <td>경기 안양시 만안구 안양동 213-28</td>
                                                <td>
                                                    <div class="inpect_status">현장정보</div>
                                                </td>
                                                <td></td>
                                                <td>썸네일 - 누락</td>
                                                <td>누락</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="p_r">
                                                    <a class="memo_btn dp_f dp_c dp_cc" href="javascript:void(0);" title="메모하기">
                                                        <span class="material-symbols-outlined">article</span>
                                                    </a>
                                                    <div class="popup_wrap memo_pop">
                                                        <div class="popup_box">
                                                            <div class="dp_sb">
                                                                <p class="popup_tit">메모</p>
                                                                <a class="pop_close_btn dp_f dp_c dp_cc" href="" title="닫기">
                                                                    <span class="lnr lnr-cross"></span>
                                                                </a>
                                                            </div>
                                                            <?
                                                            include './memo.php';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(".memo_btn").on("click",function(event){

                                                            event.preventDefault();
                                                            $(".memo_pop").stop().fadeIn();

                                                        });
                                                    </script>
                                                </td>
                                                <td>
                                                    <a class="edit_btn dp_f dp_c dp_cc" href="./write.php" title="수정하기">
                                                        <span class="lnr lnr-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>2022.06.23</td>
                                                <td></td>
                                                <td>김명식</td>
                                                <td>
                                                    <div class="visit_status">재답사가능</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="newplace_type">신축</span>
                                                </td>
                                                <td>명학아크로펠리스</td>
                                                <td>경기 안양시 만안구 안양동 213-28</td>
                                                <td>
                                                    <div class="inpect_status">현장정보</div>
                                                </td>
                                                <td></td>
                                                <td>썸네일 - 누락</td>
                                                <td>누락</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="memo_btn dp_f dp_c dp_cc" href="javascript:void(0);" title="메모하기">
                                                        <span class="material-symbols-outlined">article</span>
                                                    </a>
                                                    <div class="popup_wrap memo_pop">
                                                        <div class="popup_box">
                                                            <div class="dp_sb">
                                                                <p class="popup_tit">메모</p>
                                                                <a class="pop_close_btn dp_f dp_c dp_cc" href="" title="닫기">
                                                                    <span class="lnr lnr-cross"></span>
                                                                </a>
                                                            </div>
                                                            <?
                                                            include './memo.php';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(".memo_btn").on("click",function(event){

                                                            event.preventDefault();
                                                            $(".memo_pop").stop().fadeIn();

                                                        });
                                                    </script>
                                                </td>
                                                <td>
                                                    <a class="edit_btn dp_f dp_c dp_cc" href="./write.php" title="수정하기">
                                                        <span class="lnr lnr-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>2022.06.23</td>
                                                <td></td>
                                                <td>김명식</td>
                                                <td>
                                                    <div class="visit_status">재답사가능</div>
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