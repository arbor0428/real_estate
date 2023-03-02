<?
include '/home/zippro/www/adm/head.php';
$sideArr[1] = 'active';
$showArr[1] = 'show';
$subArr['place'] = 'active';
$subunArr['old'] = 'active';
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
							<h4 class="font-weight-bold text-primary" style="margin-bottom: 20px;">구옥현장등록</h4>
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
										</tbody>
									</table>

									<p class="zipro_table_tit">담당자 정보</p>
									<div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
										<table class="zipro_tbl wid50">
											<tbody>
												<tr>
													<th>담당자1 <span class="c_red">*</span></th>
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
													<th>담당자2 <span class="c_red">*</span></th>
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

									<p class="zipro_table_tit">메모</p>
									<table class="zipro_tbl">
										<tbody>
											<tr style="height: 200px;">
												<th>메모</th>
												<td>
													<textarea placeholder="텍스트박스 안내문구 : 사용자들에게 노출되지 않고 등록자 본인만 확인할 수 있는 메모칸입니다. " style="width: 100%; resize:none; height: 200px; box-sizing:border-box;"></textarea>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit">세대 기본 정보</p>
									<table class="zipro_tbl">
										<tbody>
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
												<th>엘리베이터 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_1" id="house_chk1_1">
															<label for="house_chk1_1">있음</label>
														</li>
														<li>
															<input type="radio" name="radio1_1" id="house_chk1_2">
															<label for="house_chk1_2">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>주차 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="radio" name="radio1_2" id="house_chk1_3">
															<label for="house_chk1_3">주차가능</label>
														</li>
														<li class="dp_f dp_c">
															<input type="radio" name="radio1_2" id="house_chk1_4">
															<label for="house_chk1_4">주차불가</label>
														</li>
														<li class="dp_f dp_c">
															<div class="inputWrap">
																<input type="text" placeholder="주차 방식에 대해 설명해주세요. (ex : 자주식 주차 100%)">
															</div>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>복층/고야 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_5">
															<label for="house_chk1_5">복층</label>
														</li>
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_6">
															<label for="house_chk1_6">복복층</label>
														</li>
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_7">
															<label for="house_chk1_7">지복층</label>
														</li>
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_8">
															<label for="house_chk1_8">고야</label>
														</li>
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_9">
															<label for="house_chk1_9">복층아님</label>
														</li>
														<li>
															<input type="radio" name="radio1_3" id="house_chk1_10">
															<label for="house_chk1_10">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>테라스타입 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_4" id="house_chk1_11">
															<label for="house_chk1_11">일반테라스</label>
														</li>
														<li>
															<input type="radio" name="radio1_4" id="house_chk1_12">
															<label for="house_chk1_12">왕테라스</label>
														</li>
														<li>
															<input type="radio" name="radio1_4" id="house_chk1_13">
															<label for="house_chk1_13">미확인</label>
														</li>
														<li>
															<input type="radio" name="radio1_4" id="house_chk1_14">
															<label for="house_chk1_14">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>공실체크 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_5" id="house_chk1_15">
															<label for="house_chk1_15">공실</label>
														</li>
														<li>
															<input type="radio" name="radio1_5" id="house_chk1_16">
															<label for="house_chk1_16">거주중</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>입주가능일 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li class="dp_f dp_c">
															<input type="date" name="" id="">
															<span style="margin-left: 10px;">이후</span>
														</li>
														<li>
															<input type="radio" name="radio1_6" id="house_chk1_18">
															<label for="house_chk1_18">협의가능</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit">금액 정보</p>
									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>계약 분류 <span class="c_red">*</span></th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_7" id="house_chk1_19">
															<label for="house_chk1_19">매매</label>
														</li>
														<li>
															<input type="radio" name="radio1_7" id="house_chk1_20">
															<label for="house_chk1_20">전세</label>
														</li>
														<li>
															<input type="radio" name="radio1_7" id="house_chk1_21">
															<label for="house_chk1_21">월세</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>전세</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_8" id="house_chk1_22">
															<label for="house_chk1_22">안심</label>
														</li>
														<li>
															<input type="radio" name="radio1_8" id="house_chk1_23">
															<label for="house_chk1_23">중기청</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>분양가/매매가 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="0">
														&nbsp;&nbsp;만원
													</div>
												</td>
											</tr>
											<tr>
												<th>매매 R <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" value="0">
													</div>
												</td>
											</tr>
											<tr>
												<th>매매 메모</th>
												<td>
													<div class="inputWrap">
														<input class="wid100" type="text" placeholder="매매 메모를 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>취득세 지원</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="취득세 지원을 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>담보실업</th>
												<td>
													<div class="dp_f dp_c">
														<select>
															<option>미확인</option>
														</select>
														<div class="inputWrap dp_f dp_c">
															<input type="text">
															&nbsp;&nbsp;%&nbsp;&nbsp;
														</div>
														<div class="inputWrap dp_f dp_c">
															<input type="text">
															&nbsp;&nbsp;만원
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>전세가 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="0">
														&nbsp;&nbsp;만원
													</div>
												</td>
											</tr>
											<tr>
												<th>전세R <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap">
														<input type="text" value="0">
													</div>
												</td>
											</tr>
											<tr>
												<th>전세 메모</th>
												<td>
													<div class="inputWrap">
														<input class="wid100" type="text" placeholder="전세 메모를 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>월세보증금 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="0">
														&nbsp;&nbsp;만원
													</div>
												</td>
											</tr>
											<tr>
												<th>월세 <span class="c_red">*</span></th>
												<td>
													<div class="inputWrap dp_f dp_c">
														<input type="text" value="0">
														&nbsp;&nbsp;만원
													</div>
												</td>
											</tr>
											<tr>
												<th>월세 메모</th>
												<td>
													<div class="inputWrap">
														<input class="wid100" type="text" placeholder="전세 메모를 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<td colspan="2" style="border-left: 1px solid #ccc; padding: 0;">
													<div class="fileupload_field_wrap" style="border: none;">
														<div class="dp_sb fileupload_field_top">
															<a class="upload_btn dp_f dp_c dp_cc bold2" href="" title="업로드">업로드</a>
															<p class="amt_status">
																<span class="bold2">0</span>/
																<span>50</span>
															</p>
														</div>
														<p class="upload_caut">ⓘ PNG, JPG, JPEG 형식으로 최대 50개까지 등록가능</p>
														<div class="fileupload_field dp_f dp_c dp_cc">
															파일을 여기에 놓아주세요.
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>특이사항</th>
												<td>
													<textarea placeholder="텍스트박스 안내문구 : 현장에 대해 설명해주세요 " style="width: 100%; resize:none; height: 200px; box-sizing:border-box;"></textarea>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit_m">
										상세 입력 정보 <span>아래 항목은 선택 입력 사항 입니다. 입력하는 항목은 필터 적용시 노출됩니다.</span>
									</p>

									<p class="zipro_table_tit">세대 기본 정보</p>

									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>등기정보</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_24">
															<label for="house_chk1_24">다세대/연립/도생</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_25">
															<label for="house_chk1_25">아파트</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_26">
															<label for="house_chk1_26">오피스텔</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_27">
															<label for="house_chk1_27">타운/단독</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_28">
															<label for="house_chk1_28">근린생활시설</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_29">
															<label for="house_chk1_29">다가구</label>
														</li>
														<li>
															<input type="radio" name="radio1_9" id="house_chk1_30">
															<label for="house_chk1_30">숙박생활시설</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>난방타입</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_10" id="house_chk1_31">
															<label for="house_chk1_31">도시가스</label>
														</li>
														<li>
															<input type="radio" name="radio1_10" id="house_chk1_32">
															<label for="house_chk1_32">LPG</label>
														</li>
														<li>
															<input type="radio" name="radio1_10" id="house_chk1_33">
															<label for="house_chk1_33">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>주차방식</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_11" id="house_chk1_34">
															<label for="house_chk1_34">지하주차장</label>
														</li>
														<li>
															<input type="radio" name="radio1_11" id="house_chk1_35">
															<label for="house_chk1_35">주차 E/V</label>
														</li>
														<li>
															<input type="radio" name="radio1_11" id="house_chk1_36">
															<label for="house_chk1_36">주차타워</label>
														</li>
														<li>
															<input type="radio" name="radio1_11" id="house_chk1_37">
															<label for="house_chk1_37">자주식/직렬</label>
														</li>
														<li>
															<input type="radio" name="radio1_11" id="house_chk1_38">
															<label for="house_chk1_38">자주식/병렬</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>준공일/사용승인일</th>
												<td>
													<div class="inputWrap">
														<input type="date">
													</div>
												</td>
											</tr>
											<tr>
												<th>전용면적</th>
												<td>
													<div class="dp_f dp_c">
														<div class="inputWrap">
															<input type="text">&nbsp;&nbsp;㎡&nbsp;&nbsp;
														</div>
														<div class="inputWrap">
															<input type="text">&nbsp;&nbsp;평
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>공급면적</th>
												<td>
													<div class="inputWrap">
														<input type="text">&nbsp;&nbsp;㎡
													</div>
												</td>
											</tr>
											<tr>
												<th>관리비</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="관리비입력">&nbsp;&nbsp;만원
													</div>
												</td>
											</tr>
											<tr>
												<th>위반여부</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_12" id="house_chk1_39">
															<label for="house_chk1_39">위반사항있음</label>
														</li>
														<li>
															<input type="radio" name="radio1_12" id="house_chk1_40">
															<label for="house_chk1_40">위반사항 없음</label>
														</li>
														<li>
															<input type="radio" name="radio1_12" id="house_chk1_41">
															<label for="house_chk1_41">미확인</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>위반내용</th>
												<td>
													<div class="inputWrap">
														<input type="text" placeholder="위반내용을 입력해주세요.">
													</div>
												</td>
											</tr>
											<tr>
												<th>계약부동산</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_13" id="house_chk1_42">
															<label for="house_chk1_42">있음</label>
														</li>
														<li>
															<input type="radio" name="radio1_13" id="house_chk1_43">
															<label for="house_chk1_43">없음</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit">세대 특징</p>

									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>세대 층수</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_14" id="house_chk1_44">
															<label for="house_chk1_44">최저층</label>
														</li>
														<li>
															<input type="radio" name="radio1_14" id="house_chk1_45">
															<label for="house_chk1_45">최고층</label>
														</li>
														<li>
															<input type="radio" name="radio1_14" id="house_chk1_46">
															<label for="house_chk1_46">중간층</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>주택 방향</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_47">
															<label for="house_chk1_47">동향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_48">
															<label for="house_chk1_48">서향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_49">
															<label for="house_chk1_49">남향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_50">
															<label for="house_chk1_50">북향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_51">
															<label for="house_chk1_51">남동향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_52">
															<label for="house_chk1_52">남서향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_53">
															<label for="house_chk1_53">북동향</label>
														</li>
														<li>
															<input type="radio" name="radio1_15" id="house_chk1_54">
															<label for="house_chk1_54">북서향</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>바닥형태</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_16" id="house_chk1_55">
															<label for="house_chk1_55">마루</label>
														</li>
														<li>
															<input type="radio" name="radio1_16" id="house_chk1_56">
															<label for="house_chk1_56">타일</label>
														</li>
														<li>
															<input type="radio" name="radio1_16" id="house_chk1_57">
															<label for="house_chk1_57">장판</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>냉장고자리</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_17" id="house_chk1_58">
															<label for="house_chk1_58">1대</label>
														</li>
														<li>
															<input type="radio" name="radio1_17" id="house_chk1_59">
															<label for="house_chk1_59">2대</label>
														</li>
														<li>
															<input type="radio" name="radio1_17" id="house_chk1_60">
															<label for="house_chk1_60">3대 이상</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>보조주방</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_18" id="house_chk1_61">
															<label for="house_chk1_61">있음</label>
														</li>
														<li>
															<input type="radio" name="radio1_18" id="house_chk1_62">
															<label for="house_chk1_62">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>다용도실</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_63">
															<label for="house_chk1_63">주방</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_64">
															<label for="house_chk1_64">통베란다</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_65">
															<label for="house_chk1_65">방</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_66">
															<label for="house_chk1_66">실외</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_67">
															<label for="house_chk1_67">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>반려동물</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_19" id="house_chk1_68">
															<label for="house_chk1_68">가능</label>
														</li>
														<li>
															<input type="radio" name="radio1_19" id="house_chk1_69">
															<label for="house_chk1_69">불가능</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>수리항목</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_70">
															<label for="house_chk1_70">화장실</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_71">
															<label for="house_chk1_71">주방</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_72">
															<label for="house_chk1_72">바닥</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_73">
															<label for="house_chk1_73">도배</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_74">
															<label for="house_chk1_74">없음</label>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="zipro_table_tit">옵션 사항</p>

									<table class="zipro_tbl">
										<tbody>
											<tr>
												<th>에어컨</th>
												<td>

												</td>
											</tr>
											<tr>
												<th>냉방 시설</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_20" id="house_chk1_75">
															<label for="house_chk1_75">시스템</label>
														</li>
														<li>
															<input type="radio" name="radio1_20" id="house_chk1_76">
															<label for="house_chk1_76">스탠드</label>
														</li>
														<li>
															<input type="radio" name="radio1_20" id="house_chk1_77">
															<label for="house_chk1_77">벽걸이</label>
														</li>
														<li>
															<input type="radio" name="radio1_20" id="house_chk1_78">
															<label for="house_chk1_78">없음</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>가전</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_79">
															<label for="house_chk1_79">냉장고</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_80">
															<label for="house_chk1_80">김치냉장고</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_81">
															<label for="house_chk1_81">식기세척기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_82">
															<label for="house_chk1_82">세탁기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_83">
															<label for="house_chk1_83">건조기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_84">
															<label for="house_chk1_84">공기 청정/순환장치</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_85">
															<label for="house_chk1_85">전기/오븐 레인지</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_86">
															<label for="house_chk1_86">스타일러</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_87">
															<label for="house_chk1_87">TV</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_88">
															<label for="house_chk1_88">와인냉장고</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_89">
															<label for="house_chk1_89">빔프로젝트</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_90">
															<label for="house_chk1_90">전동 빨래건조대</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_91">
															<label for="house_chk1_91">정수기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_92">
															<label for="house_chk1_92">제습기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_93">
															<label for="house_chk1_93">비데</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_94">
															<label for="house_chk1_94">음식물 처리/분쇄기</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>가구</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_95">
															<label for="house_chk1_95">드레스룸</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_96">
															<label for="house_chk1_96">펜트리룸</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_97">
															<label for="house_chk1_97">붙박이장</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_98">
															<label for="house_chk1_98">시스템장</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_99">
															<label for="house_chk1_99">쇼파</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_100">
															<label for="house_chk1_100">식탁</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_101">
															<label for="house_chk1_101">루버셔터</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_102">
															<label for="house_chk1_102">실링팬</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>기타</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_103">
															<label for="house_chk1_103">주방창</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_104">
															<label for="house_chk1_104">욕조</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_105">
															<label for="house_chk1_105">E/V 콜</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_106">
															<label for="house_chk1_106">중문</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_107">
															<label for="house_chk1_107">자동중문</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>생활시설</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_108">
															<label for="house_chk1_108">텃밭</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_109">
															<label for="house_chk1_109">마당</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_110">
															<label for="house_chk1_110">개별창고</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_111">
															<label for="house_chk1_111">수영장</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_112">
															<label for="house_chk1_112">바베큐장</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>생활시설2</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="checkbox" name="" id="house_chk1_113">
															<label for="house_chk1_113">CCTV</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_114">
															<label for="house_chk1_114">경비실</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_115">
															<label for="house_chk1_115">무인택배함</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_116">
															<label for="house_chk1_116">운동시설</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_117">
															<label for="house_chk1_117">입주민회의실</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_118">
															<label for="house_chk1_118">화재경보기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_119">
															<label for="house_chk1_119">스프링쿨러</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_120">
															<label for="house_chk1_120">옥상공원</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_121">
															<label for="house_chk1_121">음식물수거기</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_122">
															<label for="house_chk1_122">휴게실</label>
														</li>
														<li>
															<input type="checkbox" name="" id="house_chk1_123">
															<label for="house_chk1_123">전기차충전기</label>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<th>공개여부</th>
												<td>
													<ul class="checkWrap dp_f dp_wrap">
														<li>
															<input type="radio" name="radio1_21" id="house_chk1_124">
															<label for="house_chk1_124">나만보기</label>
														</li>
														<li>
															<input type="radio" name="radio1_21" id="house_chk1_125">
															<label for="house_chk1_125">전체공개</label>
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
