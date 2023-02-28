<?
include '/home/zippro/www/adm/head.php';
$sideArr[1] = 'active';
$showArr[1] = 'show';
$subArr['place'] = 'active';
$subunArr['new'] = 'active';
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
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">신축현장등록</h4>
							<div class="card shadow mb-4">
								<div class="card-body">
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>건물주소 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input class="wid100" type="text" placeholder="검색할 주소를 입력해주세요.">
													</div>
													<!-- * 카카오맵 - 지도퍼가기 -->
													<!-- 1. 지도 노드 -->
													<div id="daumRoughmapContainer1677226944324" class="root_daum_roughmap root_daum_roughmap_landing" style="margin-top: 10px;"></div>

													<!--
														2. 설치 스크립트
														* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
													-->
													<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

													<!-- 3. 실행 스크립트 -->
													<script charset="UTF-8">
														new daum.roughmap.Lander({
															"timestamp" : "1677226944324",
															"key" : "2dus7",
														}).render();
													</script>
												</td>
											</tr>
											<tr>
												<th>현장이름 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="현장 이름을 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>답사상태</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_1">
															<label for="house_chk2_1">대기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_2">
															<label for="house_chk2_2">답사완료</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_3">
															<label for="house_chk2_3">재답사예정</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_4">
															<label for="house_chk2_4">재답사가능</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_5">
															<label for="house_chk2_5">분양팀번호없음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_6">
															<label for="house_chk2_6">재확인요청</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_1" id="house_chk2_7">
															<label for="house_chk2_7">답사 및 등록완료</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>현장상태</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_2" id="house_chk2_8">
															<label for="house_chk2_8">분양중</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_2" id="house_chk2_9">
															<label for="house_chk2_9">보류</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_2" id="house_chk2_10">
															<label for="house_chk2_10">분양팀교체</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_2" id="house_chk2_11">
															<label for="house_chk2_11">완료</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>현장관리</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_12">
															<label for="house_chk2_12">속지비공개</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_13">
															<label for="house_chk2_13">금액비공개</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr style="height: 200px;">
												<th>상세내용</th>
												<td>
													<textarea placeholder="상세내용을 입력해주세요." style="width: 100%; resize:none; height: 200px; box-sizing:border-box;"></textarea>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit">관리자 정보</p>
									<div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
										<table class="zipro_tbl wid50">
											<tbody>
												<tr>
													<th>관리자1 <span class="c_red">*</span></th>
													<td>
														<div class="dp_sb dp_c">
															<span>아이웹</span>
															<div>
																<a href="" class="btn btn-success btn-sm" title="미노출" onclick="">미노출</a>
																<a href="" class="btn btn-danger btn-sm" title="삭제" onclick="">삭제</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th>이름 <span class="c_red">*</span></th>
													<td>
														<div class="inputWrap">
															<input type="text" placeholder="담당자 이름을 입력해주세요.">
														</div>
													</td>
												</tr>
												<tr>
													<th>연락처 <span class="c_red">*</span></th>
													<td>
														<div class="inputWrap">
															<input type="text" placeholder="담당자 연락처를 입력해주세요.">
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<table class="zipro_tbl wid50">
											<tbody>
												<tr>
													<th>관리자2 <span class="c_red">*</span></th>
													<td>
														<div class="dp_sb dp_c">
															<span>아이웹</span>
															<div>
																<a href="" class="btn btn-success btn-sm" title="미노출" onclick="">미노출</a>
																<a href="" class="btn btn-danger btn-sm" title="삭제" onclick="">삭제</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th>이름 <span class="c_red">*</span></th>
													<td>
														<div class="inputWrap">
															<input type="text" placeholder="담당자 이름을 입력해주세요.">
														</div>
													</td>
												</tr>
												<tr>
													<th>연락처 <span class="c_red">*</span></th>
													<td>
														<div class="inputWrap">
															<input type="text" placeholder="담당자 연락처를 입력해주세요.">
														</div>													
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="zipro_table_tit dp_f dp_c">
										<span>현장 이미지</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="checkbox" id="house_chk2_14">
												<label for="house_chk2_14">공사중</label>
											</li>
										</ul>
									</div>

									<p class="zipro_table_tit dp_f dp_c">
										썸네일 이미지
									</p>

									<div class="zipro_table_tit dp_f dp_c">
										<span>속지 이미지</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="radio" name="radio2_3" id="house_chk2_15">
												<label for="house_chk2_15">못받음</label>
											</li>
											<li class="dp_f dp_c">
												<input type="radio" name="radio2_3" id="house_chk2_16">
												<label for="house_chk2_16">없는 현장상태</label>
											</li>
										</ul>
									</div>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>지도노출</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_4" id="house_chk2_17">
															<label for="house_chk2_17">못받음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_4" id="house_chk2_18">
															<label for="house_chk2_18">없는 현장상태</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>직원 메모</th>
												<td>
													<textarea placeholder="직원용 메모란 - 회원은 볼 수 없음" style="width: 100%; resize:none; height: 200px; box-sizing:border-box;"></textarea>
													<p class="zipro_det_small">현장 등록자 : 2022. 6. 5 오전 11:00 김명식 (관리자) 010-6429-3162</p>
													<p class="zipro_det_small">현장 수정자 : 2022. 6. 5 오전 11:00 문상대 (매니저) 010-2967-7110</p>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="zipro_table_tit dp_f dp_c">
										<span>타입정보</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="checkbox" id="house_chk2_19">
												<label for="house_chk2_19">미확인</label>
											</li>
										</ul>
									</div>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>타입명</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<div class="inputWrap">
																<input type="text" placeholder="타입명1">
															</div>		
														</li>
														<li class="dp_f dp_c">
															<div class="inputWrap">
																<input type="text" value="타입명2">
															</div>		
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>방 <span class="c_red">*</span></th>
												<td>
													<div class="updown_count dp_f dp_c">
														<div class="plus_btn dp_f dp_c dp_cc">-</div>
														<input id="count_num" type="text" value="0">
														<div class="minus_btn dp_f dp_c dp_cc">+</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>화장실 <span class="c_red">*</span></th>
												<td>
													<div class="updown_count dp_f dp_c">
														<div class="plus_btn dp_f dp_c dp_cc">-</div>
														<input id="count_num" type="text" value="0">
														<div class="minus_btn dp_f dp_c dp_cc">+</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>복층/고야</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_20">
															<label for="house_chk2_20">복층</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_21">
															<label for="house_chk2_21">복복층</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_22">
															<label for="house_chk2_22">지복층</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_23">
															<label for="house_chk2_23">고야</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_24">
															<label for="house_chk2_24">복층아님</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_5" id="house_chk2_25">
															<label for="house_chk2_25">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>테라스 타입</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_6" id="house_chk2_26">
															<label for="house_chk2_26">일반테라스</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_6" id="house_chk2_27">
															<label for="house_chk2_27">왕테라스</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_6" id="house_chk2_28">
															<label for="house_chk2_28">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_6" id="house_chk2_29">
															<label for="house_chk2_29">없음</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="zipro_table_tit dp_f dp_c">
										<span>타입 이미지</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="checkbox" id="house_chk2_30">
												<label for="house_chk2_30">공사중</label>
											</li>
										</ul>
									</div>


									<div class="zipro_table_tit dp_f dp_c">
										<span>동정보</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="checkbox" id="house_chk2_31">
												<label for="house_chk2_31">미확인</label>
											</li>
										</ul>
									</div>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>동이름 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" value="명학아크로팰리스">
													</div>	
												</td>
											</tr>
											<tr>
												<th>난방타입</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_7" id="house_chk2_32">
															<label for="house_chk2_32">도시가스</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_7" id="house_chk2_33">
															<label for="house_chk2_33">LPG</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_7" id="house_chk2_34">
															<label for="house_chk2_34">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_7" id="house_chk2_35">
															<label for="house_chk2_35">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>엘레베이터</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_8" id="house_chk2_36">
															<label for="house_chk2_36">있음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_8" id="house_chk2_37">
															<label for="house_chk2_37">없음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_8" id="house_chk2_38">
															<label for="house_chk2_38">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>주차방식</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_9" id="house_chk2_39">
															<label for="house_chk2_39">자주식/직렬</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_9" id="house_chk2_40">
															<label for="house_chk2_40">자주식/병렬</label>
														</li>
													</ul>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_41">
															<label for="house_chk2_41">지하주차장</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_42">
															<label for="house_chk2_42">주차 E/V</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_43">
															<label for="house_chk2_43">주차타워</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_10" id="house_chk2_44">
															<label for="house_chk2_44">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_10" id="house_chk2_45">
															<label for="house_chk2_45">주차불가</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>주차비율</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="텍스트로 입력">
													</div>	
												</td>
											</tr>
											<tr>
												<th>생활시설2</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_46">
															<label for="house_chk2_46">CCTV</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_47">
															<label for="house_chk2_47">경비실</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_48">
															<label for="house_chk2_48">무인택배함</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_49">
															<label for="house_chk2_49">운동시설</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_50">
															<label for="house_chk2_50">입주민회의실</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_51">
															<label for="house_chk2_51">화재경보기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_52">
															<label for="house_chk2_52">스프링쿨러</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_53">
															<label for="house_chk2_53">옥상공원</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_54">
															<label for="house_chk2_54">음식물수서기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_55">
															<label for="house_chk2_55">휴게실</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_56">
															<label for="house_chk2_56">전기차충전기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_11" id="house_chk2_57">
															<label for="house_chk2_57">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_11" id="house_chk2_58">
															<label for="house_chk2_58">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>사용승인일</th>
												<td>
													<div class="dp_f dp_c">
														<input type="date">
														<ul class="checkWrap dp_f dp_wrap" style="margin-left: 10px;">
															<li class="dp_f dp_c">
																<input type="checkbox" id="house_chk2_59">
																<label for="house_chk2_59">있음</label>
															</li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="zipro_table_tit dp_f dp_c">
										<span>세대정보</span>
										<ul class="checkWrap dp_f dp_wrap">
											<li class="dp_f dp_c">
												<input type="checkbox" id="house_chk2_60">
												<label for="house_chk2_60">미확인</label>
											</li>
										</ul>
									</div>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>세대 이름 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" value="101호">
													</div>	
												</td>
											</tr>
											<tr>
												<th>세대 유무 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_12" id="house_chk2_61">
															<label for="house_chk2_61">세대</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_12" id="house_chk2_62">
															<label for="house_chk2_62">세대아님</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>타입선택</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_63">
															<label for="house_chk2_63">A-방3화2</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_64">
															<label for="house_chk2_64">B-방3화2</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>등기정보</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_65">
															<label for="house_chk2_65">다세대/연립/도생</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_66">
															<label for="house_chk2_66">아파트</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_67">
															<label for="house_chk2_67">오피스텔</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_68">
															<label for="house_chk2_68">타운/단독</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_69">
															<label for="house_chk2_69">근린생활시설</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_70">
															<label for="house_chk2_70">다가구</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_71">
															<label for="house_chk2_71">숙박생활시설</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_13" id="house_chk2_72">
															<label for="house_chk2_72">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>계약 분류</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_73">
															<label for="house_chk2_73">매매</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox"  id="house_chk2_74">
															<label for="house_chk2_74">전세</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox"  id="house_chk2_75">
															<label for="house_chk2_75">월세</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_14" id="house_chk2_76">
															<label for="house_chk2_76">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>전세</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_15" id="house_chk2_77">
															<label for="house_chk2_77">안심</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_15" id="house_chk2_78">
															<label for="house_chk2_78">중기청</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>계약상태</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_16" id="house_chk2_79">
															<label for="house_chk2_79">가능</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_16" id="house_chk2_80">
															<label for="house_chk2_80">진행중</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_16" id="house_chk2_81">
															<label for="house_chk2_81">완료</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_16" id="house_chk2_82">
															<label for="house_chk2_82">보류</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_16" id="house_chk2_83">
															<label for="house_chk2_83">준비중</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td colspan="2" style="padding: 0; width: 100%; border-right: 0; border-left: 1px solid #ccc;">
													<div class="zipro_tbl_wrap">
														<!--매매 선택 시-->
														<table class="zipro_tbl">
															<tbody>
																<tr>
																	<th>분양가/매매가</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input type="text" value="0">
																			&nbsp;&nbsp;만원
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>매매 R</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" value="0">
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>매매 메모</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" placeholder="매매 메모를 입력해주세요.">
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>취득세 지원</th>
																	<td>
																		<ul class="checkWrap dp_f dp_wrap">
																			<li class="dp_f dp_c">
																				<div class="inputWrap dp_f dp_c">
																					<input type="text" placeholder="취득세 지원을 입력해주세요.">
																				</div>
																			</li>
																			<li class="dp_f dp_c">
																				<input type="radio" name="radio2_17" id="house_chk2_84">
																				<label for="house_chk2_84">미확인</label>
																			</li>
																			<li class="dp_f dp_c">
																				<input type="radio" name="radio2_17" id="house_chk2_85">
																				<label for="house_chk2_85">없음</label>
																			</li>
																		</ul>
																	</td>
																</tr>
																<tr>
																	<th>담보실입</th>
																	<td>
																		<div class="dp_f dp_c">
																			<select>
																				<option>미확인</option>
																			</select>
																			<div class="inputWrap dp_f dp_c">
																				<input type="text" placeholder="입력란" style="margin-right: 10px;">
																				<input type="text" placeholder="실입주금">
																				&nbsp;&nbsp;만원
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<!--전세 선택 시-->
														<table class="zipro_tbl">
															<tbody>
																<tr>
																	<th>전세가</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input type="text" value="0">
																			&nbsp;&nbsp;만원
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>전세R</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" value="0">
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>전세 메모</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" placeholder="전세 메모를 입력해주세요">
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<!--월세 선택 시-->
														<table class="zipro_tbl">
															<tbody>
																<tr>
																	<th>
																		월세보증금
																	</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input type="text" value="0">
																			&nbsp;&nbsp;만원
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>
																		월세
																	</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input type="text" value="0">
																			&nbsp;&nbsp;만원
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>
																		월세 R
																	</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" value="0">
																		</div>
																	</td>
																</tr>
																<tr>
																	<th>
																		월세 메모
																	</th>
																	<td>
																		<div class="inputWrap dp_f dp_c">
																			<input class="wid100" type="text" placeholder="월세 메모를 입력해주세요">
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th>
													주택방향
												</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_86">
															<label for="house_chk2_86">동향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_87">
															<label for="house_chk2_87">서향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_88">
															<label for="house_chk2_88">남향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_89">
															<label for="house_chk2_89">북향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_90">
															<label for="house_chk2_90">남동향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_91">
															<label for="house_chk2_91">남서향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_92">
															<label for="house_chk2_92">북동향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_93">
															<label for="house_chk2_93">북서향</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_18" id="house_chk2_94">
															<label for="house_chk2_94">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>
													전용면적
												</th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="44.34">
														&nbsp;&nbsp;㎡&nbsp;&nbsp;
														<input type="text">&nbsp;&nbsp;평
													</div>
												</td>
											</tr>
											<tr>
												<th>
													공급면적
												</th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="0">
														&nbsp;&nbsp;㎡
													</div>
												</td>
											</tr>
											<tr>
												<th>에어컨 <span class="c_red">*</span></th>
												<td>
													<div class="dp_f dp_c">
														<div class="updown_count dp_f dp_c">
															<div class="plus_btn dp_f dp_c dp_cc">-</div>
															<input id="count_num" type="text" value="0">
															<div class="minus_btn dp_f dp_c dp_cc">+</div>
														</div>
														<ul class="checkWrap dp_f dp_wrap" style="margin-left: 10px;">
															<li class="dp_f dp_c">
																<input type="checkbox" id="house_chk2_95">
																<label for="house_chk2_95">미확인</label>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<th>냉방시설 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_96">
															<label for="house_chk2_96">시스템</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_97">
															<label for="house_chk2_97">스탠드</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_98">
															<label for="house_chk2_98">벽걸이</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_19" id="house_chk2_99">
															<label for="house_chk2_99">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_19" id="house_chk2_100">
															<label for="house_chk2_100">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>다용도실</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_101">
															<label for="house_chk2_101">주방</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_102">
															<label for="house_chk2_102">통베란다</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_103">
															<label for="house_chk2_103">방</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_104">
															<label for="house_chk2_104">실외</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_20" id="house_chk2_105">
															<label for="house_chk2_105">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_20" id="house_chk2_105">
															<label for="house_chk2_105">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>냉장고자리 <span class="c_red">*</span></th>
												<td>
													<div class="dp_f dp_c">
														<div class="updown_count dp_f dp_c">
															<div class="plus_btn dp_f dp_c dp_cc">-</div>
															<input id="count_num" type="text" value="0">
															<div class="minus_btn dp_f dp_c dp_cc">+</div>
														</div>
														<ul class="checkWrap dp_f dp_wrap" style="margin-left: 10px;">
															<li class="dp_f dp_c">
																<input type="checkbox" id="house_chk2_106">
																<label for="house_chk2_106">미확인</label>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<th>보조주방 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_21" id="house_chk2_107">
															<label for="house_chk2_107">있음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_21" id="house_chk2_108">
															<label for="house_chk2_108">없음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_21" id="house_chk2_109">
															<label for="house_chk2_109">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>바닥형태 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap" style="margin-right: 10px;">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_22" id="house_chk2_110">
															<label for="house_chk2_110">마루</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_22" id="house_chk2_111">
															<label for="house_chk2_111">타일</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_22" id="house_chk2_112">
															<label for="house_chk2_112">장판</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_22" id="house_chk2_113">
															<label for="house_chk2_113">기타</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_22" id="house_chk2_114">
															<label for="house_chk2_114">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>위반여부 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap" style="margin-right: 10px;">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_23" id="house_chk2_115">
															<label for="house_chk2_115">위반사항있음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_23" id="house_chk2_116">
															<label for="house_chk2_116">위반사항없음</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_23" id="house_chk2_117">
															<label for="house_chk2_117">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>위반 내용</th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input class="wid100" type="text" placeholder="위반내용을 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>공실체크</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_24" id="house_chk2_118">
															<label for="house_chk2_118">공실</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_24" id="house_chk2_119">
															<label for="house_chk2_119">거주중</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>입주가능일 </th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="date">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									
									<p class="zipro_table_tit dp_f dp_c">
										세대 옵션
									</p>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>가전</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_120">
															<label for="house_chk2_120">냉장고</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_121">
															<label for="house_chk2_121">김치냉장고</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_122">
															<label for="house_chk2_122">식기세척기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_123">
															<label for="house_chk2_123">세탁기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_124">
															<label for="house_chk2_124">건조기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_125">
															<label for="house_chk2_125">공기 청정/순환 장치</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_126">
															<label for="house_chk2_126">전기/오븐 레인지</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_127">
															<label for="house_chk2_127">스타일러</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_128">
															<label for="house_chk2_128">TV</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_129">
															<label for="house_chk2_129">와인냉장고</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_130">
															<label for="house_chk2_130">빔프로젝트</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_131">
															<label for="house_chk2_131">전동 빨래건조대</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_132">
															<label for="house_chk2_132">정수기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_133">
															<label for="house_chk2_133">제습기</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_134">
															<label for="house_chk2_134">비데</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_135">
															<label for="house_chk2_135">음식물 처리/ 분쇄기</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>가구</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_136">
															<label for="house_chk2_136">드레스룸</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_137">
															<label for="house_chk2_137">펜트리룸</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_138">
															<label for="house_chk2_138">붙박이장</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_139">
															<label for="house_chk2_139">시스템장</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_140">
															<label for="house_chk2_140">쇼파</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_141">
															<label for="house_chk2_141">식탁</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_142">
															<label for="house_chk2_142">루버셔터</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_143">
															<label for="house_chk2_143">실링팬</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>기타</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_144">
															<label for="house_chk2_144">주방창</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_145">
															<label for="house_chk2_145">욕조</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_146">
															<label for="house_chk2_146">E/V콜</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_147">
															<label for="house_chk2_147">중문</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_148">
															<label for="house_chk2_148">자동중문</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>생활시설</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_149">
															<label for="house_chk2_149">텃밭</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_150">
															<label for="house_chk2_150">마당</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_151">
															<label for="house_chk2_151">개별창고</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_152">
															<label for="house_chk2_152">수영장</label>
														</li>
														<li class="dp_f dp_c">
															<input type="checkbox" id="house_chk2_153">
															<label for="house_chk2_153">바베큐장</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>옵션 확인</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_25" id="house_chk2_154">
															<label for="house_chk2_154">미확인</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_25" id="house_chk2_155">
															<label for="house_chk2_155">없음</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit dp_f dp_c">
										세대 정보
									</p>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>세대이름 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" value="101호">
													</div>
												</td>
											</tr>
											<tr>
												<th>세대유무 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_26" id="house_chk2_156">
															<label for="house_chk2_156">세대</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio2_26" id="house_chk2_157">
															<label for="house_chk2_157">세대아님</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="dp_f dp_c dp_cc" style="margin: 40px 0 20px;">
										<a class="btn btn-success btn-sm" href="" title="등록" style="margin: 0 10px; width: 150px; font-size: 1rem;">등록</a>
										<a class="btn btn-danger btn-sm" href="" title="취소" style="margin: 0 10px; width: 150px; font-size: 1rem;">취소</a>
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