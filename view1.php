<div class="view1wrap">
    <div class="viewTop dp_sb dp_c">
		<div class="gobackBtn dp_f dp_c">
            <span class="lnr lnr-chevron-left"></span>
        </div>
        <div class="centerTit">
            <div class="dp_f dp_c dp_cc">
                <span class="redTitCir dp_f dp_c dp_cc">신</span>
                <span class="gryAptNm">트레비앙</span>
            </div>
            <p class="smallAdrGry">서울 마포구 연남동 487-8</p>
        </div>
        <div class="likeBtn">
            <!--별-->
        </div>
	</div>
    <div class="inner_filter02">
        <div class="view1Visual po_r">
            <div class="view1ImgSlick">
                <div class="view1ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view1ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view1ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
            </div>
            <div class="pagingInfo"></div>
        </div>
        <script>
            var $status = $('.pagingInfo');
            var $slickElement = $('.view1ImgSlick');

            $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status.text(i + ' / ' + slick.slideCount);
            });


            $slickElement.slick({ 
                infinite : true, 
                autoplay : true,			// 자동 스크롤 사용 여부
                autoplaySpeed : 3000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
                speed: 500,
                arrows : true,
                fade: false
            });
        </script>
        <div class="dateWrap txt-r br_bottom area_status">
            <p class="m_5 c_blue bold">수정일시 <span>2022-01-20 10:51</span></p>
            <p class="c_blue bold">등록일자 <span>2022-01-14</span></p>
        </div>

        <div class="br_bottom">
            <div class="dp_f dp_c dp_cc area_status">
                <dl>
                    <dd>10</dd>
                    <dt>계약가능</dt>
                </dl>
                <dl>
                    <dd>0</dd>
                    <dt>계약진행중</dt>
                </dl>
                <dl>
                    <dd>0</dd>
                    <dt>계약보류</dt>
                </dl>
                <dl>
                    <dd>0</dd>
                    <dt>준비중</dt>
                </dl>
                <dl>
                    <dd>0</dd>
                    <dt>계약완료</dt>
                </dl>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">현장정보</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="group_table_view">
                        <dl class="list_table_v">
                            <dt>총 세대수</dt>
                            <dd>10세대</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>동(건물)수</dt>
                            <dd>1개</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>난방타입</dt>
                            <dd>도시가스</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">동정보</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="redCirTit dp_ib red2 bold2 c_wht">트레비앙</div>
                    <div class="group_table_view">
                        <dl class="list_table_v">
                            <dt>동이름</dt>
                            <dd>트레비앙</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>건물형태</dt>
                            <dd>다세대/연립, 상가</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>지번주소</dt>
                            <dd>서울 마포구 연남동 487-8</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>지번주소</dt>
                            <dd>서울 마포구 연남동 487-8</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>도로명주소</dt>
                            <dd>서울특별시 마포구 성미산로17길 100</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>세대수</dt>
                            <dd>10세대</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>엘리베이터</dt>
                            <dd>있음</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>주차방식</dt>
                            <dd>자주식/직렬, 자주식/병렬</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>주차비율</dt>
                            <dd>70%</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>준공일/사용승인일</dt>
                            <dd>2022-01-14</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">총 타입 <span class="gry_amt">5개</span></p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold">
                <div class="listWrap">
                    <div class="listBox">
                        <a class="dp_sb dp_wrap" href="" title="">
                            <div class="listText">
                                <div class="listText_tit dp_f dp_c dp_wrap">
                                    <div class="small_cir yello"></div>
                                    <p class="tit_item f14 bold2 c_yellow">A-방3화2</p>
                                    <p class="f12 c_gry">다세대/연립</p>
                                </div>
                                <ul class="info_price">
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_pink">매매</span>
                                        <span class="ss_price dp_f dp_c f12 bold2">8억 3,500</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">전세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">월세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">투자</span>
                                    </li>
                                </ul>
                                <p class="lastHouse">잔여세대 <span>2</span></p>
                            </div>
                            <div class="listImgWrap02">
                                <!--배경이미지-->
                            </div>
                        </a>
                    </div>
                    <div class="listBox">
                        <a class="dp_sb dp_wrap" href="" title="">
                            <div class="listText">
                                <div class="listText_tit dp_f dp_c dp_wrap">
                                    <div class="small_cir blue"></div>
                                    <p class="tit_item f14 bold2 c_blue2">B-방3화2</p>
                                    <p class="f12 c_gry">다세대/연립</p>
                                </div>
                                <ul class="info_price">
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_pink">매매</span>
                                        <span class="ss_price dp_f dp_c f12 bold2">8억 3,500</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">전세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">월세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">투자</span>
                                    </li>
                                </ul>
                                <p class="lastHouse">잔여세대 <span>2</span></p>
                            </div>
                            <div class="listImgWrap02">
                                <!--배경이미지-->
                            </div>
                        </a>
                    </div>
                    <div class="listBox">
                        <a class="dp_sb dp_wrap" href="" title="">
                            <div class="listText">
                                <div class="listText_tit dp_f dp_c dp_wrap">
                                    <div class="small_cir grn"></div>
                                    <p class="tit_item f14 bold2 c_grn">C-방1.5화1</p>
                                    <p class="f12 c_gry">다세대/연립</p>
                                </div>
                                <ul class="info_price">
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_pink">매매</span>
                                        <span class="ss_price dp_f dp_c f12 bold2">8억 3,500</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">전세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">월세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">투자</span>
                                    </li>
                                </ul>
                                <p class="lastHouse">잔여세대 <span>2</span></p>
                            </div>
                            <div class="listImgWrap02">
                                <!--배경이미지-->
                            </div>
                        </a>
                    </div>
                    <div class="listBox">
                        <a class="dp_sb dp_wrap" href="" title="">
                            <div class="listText">
                                <div class="listText_tit dp_f dp_c dp_wrap">
                                    <div class="small_cir red"></div>
                                    <p class="tit_item f14 bold2 c_red2">D-방3화2 왕테</p>
                                    <p class="f12 c_gry">다세대/연립</p>
                                </div>
                                <ul class="info_price">
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_pink">매매</span>
                                        <span class="ss_price dp_f dp_c f12 bold2">8억 3,500</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">전세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">월세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">투자</span>
                                    </li>
                                </ul>
                                <p class="lastHouse">잔여세대 <span>2</span></p>
                            </div>
                            <div class="listImgWrap02">
                                <!--배경이미지-->
                            </div>
                        </a>
                    </div>
                    <div class="listBox">
                        <a class="dp_sb dp_wrap" href="" title="">
                            <div class="listText">
                                <div class="listText_tit dp_f dp_c dp_wrap">
                                    <div class="small_cir gry"></div>
                                    <p class="tit_item f14 bold2 c_gry3">A-방3화2</p>
                                    <p class="f12 c_gry">다세대/연립</p>
                                </div>
                                <ul class="info_price">
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_pink">매매</span>
                                        <span class="ss_price dp_f dp_c f12 bold2">8억 3,500</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">전세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">월세</span>
                                    </li>
                                    <li class="dp_f dp_c">
                                        <span class="badge badge_default">투자</span>
                                    </li>
                                </ul>
                                <p class="lastHouse">잔여세대 <span>2</span></p>
                            </div>
                            <div class="listImgWrap02">
                                <!--배경이미지-->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">분양표</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="redCirTit dp_ib red2 bold2 c_wht">트레비앙</div>
                    <div class="row_floor_wrap">
                        <div class="row_floor dp_f dp_c">
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">501호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir gry"></div>
                                    <span class="c_gry3 f10">E-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">502호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir gry"></div>
                                    <span class="c_gry3 f10">E-방3화1 테</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row_floor_wrap">
                        <div class="row_floor dp_f dp_c">
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                    <span class="badge badge_yellow">전세</span>
                                </div>
                                <p class="c_gry2 bold2">401호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir red2"></div>
                                    <span class="c_red2 f10">E-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c item_dimmed">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2 dp_f dp_c">402호 <span class="redCir f10 dp_f dp_c dp_cc">완</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row_floor_wrap">
                        <div class="row_floor dp_f dp_c">
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">301호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir yello"></div>
                                    <span class="c_yellow f10">A-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">302호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir blue"></div>
                                    <span class="c_blue2 f10">B-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">303호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir grn"></div>
                                    <span class="c_grn f10">C-방3화1 테</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row_floor_wrap">
                        <div class="row_floor dp_f dp_c">
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">201호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir yello"></div>
                                    <span class="c_yellow f10">A-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">202호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir blue"></div>
                                    <span class="c_blue2 f10">B-방3화1 테</span>
                                </div>
                            </div>
                            <div class="item_ho dp_f dp_fc dp_c">
                                <div class="dp_f dp_c dp_cc dp_wrap">
                                    <span class="badge badge_pink">매매</span>
                                </div>
                                <p class="c_gry2 bold2">203호</p>
                                <div class="dp_f dp_c">
                                    <div class="small_cir grn"></div>
                                    <span class="c_grn f10">C-방3화1 테</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row_floor_wrap">
                        <div class="row_floor dp_f dp_c">
                            <div class="item_ho item_no_house dp_f dp_fc dp_c dp_cc">
                                <span class="c_gry bold">1F 상가</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">잔여정보</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="redCirTit dp_ib red2 bold2 c_wht">트레비앙</div>
                    <div class="table_wrap">
                        <table>
                            <colgroup>
                                <col>
                                <col style="width: 15%;">
                                <col>
                                <col>
                                <col>
                                <col style="width: 15%;">
                                <col style="width: 7%;">
                                <col style="width: 7%;">
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>호</th>
                                    <th>방/화장실</th>
                                    <th>복/테</th>
                                    <th>매매</th>
                                    <th>전세</th>
                                    <th>월세</th>
                                    <th>실평</th>
                                    <th>전용</th>
                                    <th>등기</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                                <tr>
                                    <td>501호</td>
                                    <td>3/1</td>
                                    <td>-/테</td>
                                    <td>6억 1,500만원</td>
                                    <td>-</td>
                                    <td>-/-</td>
                                    <td>-</td>
                                    <td>57.32</td>
                                    <td>다세대</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">속지사진</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="view1Visual02 po_r">
                        <div class="view1ImgSlick02">
                            <div class="view1ImgBox02">
                                <img src="../images/view01/view1_img02.jpg" alt="">
                            </div>
                            <div class="view1ImgBox02">
                                <img src="../images/view01/view1_img02.jpg" alt="">
                            </div>
                            <div class="view1ImgBox02">
                                <img src="../images/view01/view1_img02.jpg" alt="">
                            </div>
                        </div>
                        <div class="pagingInfo02"></div>
                    </div>
                    <script>
                        var $status02 = $('.pagingInfo02');
                        var $slickElement02 = $('.view1ImgSlick02');

                        $slickElement02.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                            var i = (currentSlide ? currentSlide : 0) + 1;
                            $status02.text(i + ' / ' + slick.slideCount);
                        });


                        $slickElement02.slick({ 
                            infinite : true, 
                            autoplay : true,			// 자동 스크롤 사용 여부
                            autoplaySpeed : 3000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
                            speed: 500,
                            arrows : true,
                            fade: false
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="br_bottom">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">상세내용</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <p>-</p>
                </div>
            </div>
        </div>

        <div class="br_bottom">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">팀메모 등록</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="dp_sb">
                        <div class="scoreWrap dp_f dp_end">
                            <ul class="starWrap dp_f">
                                <li class="star">
                                    <!--별--->
                                </li>
                                <li class="star">
                                    <!--별--->
                                </li>
                                <li class="star">
                                    <!--별--->
                                </li>
                                <li class="star">
                                    <!--별--->
                                </li>
                                <li class="star">
                                    <!--별--->
                                </li>
                            </ul>
                            <p class="gryScore">0점</p>
                        </div>
                        <div class="textCount">
                            <span>0</span>
                            <span>/</span>
                            <span>300</span>
                        </div>
                    </div>
                    <div class="memoWrap">
                        <textarea name="" id="">팀메모를 입력해주세요
                        </textarea>
                    </div>
                    <div class="inputWrap">
                        <input type="text" placeholder="링크를 입력해주세요">
                    </div>
                    <div class="dp_sb dp_c switchWrap">
                        <div class="dp_f dp_c">
                            <div class="switch">
                                <div class="whtCirSmall"></div>
                            </div>
                            <span class="grytopfix">상단고정</span>
                        </div>
                        <a class="saveBtn" href="" title="저장">저장</a>
                    </div>
                    <script>
                        var flag = true;
                        $(".switchWrap .switch").click(function(event){
                            if(flag){
                                $(this).removeClass("on");
                                $('.switchWrap .whtCirSmall').stop().animate({'left':'3px'},250);

                                flag= false;
                            } else {
                                $(this).addClass("on");
                                $('.switchWrap .whtCirSmall').stop().animate({'left':'22px'},250);

                                flag= true;
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="br_bottom">
            <button class="btn_fold dp_sb dp_c">
                <div class="dp_f dp_c">
                    <p class="bold2 c_gry2">팀메모</p>
                    <span class="gryCount">(0)</span>
                </div>
                <div class="dp_f dp_c">
                    <p class="perCount">
                        <span>0</span>
                        <span class="gryCount">/ 5.0 (0명)</span>
                    </p>
                    <div class="area_arrow">
                        <span class="lnr lnr-chevron-down c_gry2"></span>
                    </div>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <p style="margin: 50px 0; text-align: center; color: #888; font-size: 0.75rem;">등록된 팀메모가 없습니다.</p>
                </div>
            </div>
        </div>
        
    </div>
    <div id="single_btn" class="dp_f dp_cc">
        <a class="inquireBtn dp_f dp_cc dp_c" href="" title="문의하기">문의하기</a>
    </div>
</div>
<script>
    //toggle 내용
    $(".view1wrap .br_bottom .btn_fold").on("click",function(){

        if($(this).parent(".view1wrap .br_bottom").hasClass("active")){
                
            $(this).parent(".view1wrap .br_bottom").removeClass("active");
                            
        }else{

            $(this).parent(".view1wrap .br_bottom").addClass("active");
        }

    });

    //뒤로 가기
    $(".view1wrap .viewTop .gobackBtn").on("click",function(){ 
        $(".view1wrap").stop().fadeOut();
    });
</script>