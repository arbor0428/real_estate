<div class="view3wrap">
    <?
        include'viewTop.php'
    ?>
    <div class="inner_filter02">
        <div class="view3Visual po_r">
            <div class="view3ImgSlick">
                <div class="view3ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view3ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view3ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
            </div>
            <div class="pagingInfo04"></div>
        </div>
        <script>
            var $status04 = $('.pagingInfo04');
            var $slickElement04 = $('.view3ImgSlick');

            $slickElement04.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status04.text(i + ' / ' + slick.slideCount);
            });


            $slickElement04.slick({ 
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
            <div class="aptDetail_wrap">
                <p class="desc_ho">휴먼하우징 202호</p>
                <p class="desc_type">
                    <span class="badge_type badge_BurningOrange"></span>
                    B-방2화1
                </p>
            </div>
        </div>

        <div class="br_bottom">
            <div class="area_price dp_f dp_wrap">
                <dl class="info_price badge_pink">
                    <dt class="badge_FrenchRose">매매</dt>
                    <dd>6억 5,300만원</dd>
                </dl>
                <dl class="info_price badge_yellow">
                    <dt class="badge_LightningYellow">전세</dt>
                    <dd>-</dd>
                </dl>
                <dl class="info_price badge_green">
                    <dt class="badge_Apple">월세</dt>
                    <dd>- / -</dd>
                </dl>
                <dl class="info_price badge_blue">
                    <dt class="badge_SanMarino">투자</dt>
                    <dd>-</dd>
                </dl>
            </div>
        </div>
        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">거래정보</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="group_table_view">
                        <dl class="list_table_v">
                            <dt>계약분류</dt>
                            <dd>매매</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>계약상태</dt>
                            <dd>가능</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>가격정보</dt>
                            <dd>
                                <div class="group_table_view">
                                    <dl class="list_table_v">
                                        <dt>매매</dt>
                                        <dd>6억 5,300만원</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>담보실입</dt>
                                        <dd>2억 6,120만원</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>취득세 지원</dt>
                                        <dd>-</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>무입여부</dt>
                                        <dd>-</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>전세</dt>
                                        <dd>-</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>월세</dt>
                                        <dd>-/-</dd>
                                    </dl>
                                </div>
                            </dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>소유권</dt>
                            <dd>법인</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>공실체크</dt>
                            <dd>공실</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>입주가능일</dt>
                            <dd>즉시입주</dd>
                        </dl>
                    </div>
                </div>
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
                    <div class="group_table_view">
                        <dl class="list_table_v">
                            <dt>동이름</dt>
                            <dd>호원캐슬</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>건물형태</dt>
                            <dd>도생</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>지번주소</dt>
                            <dd>서울 서대문구 북가좌동 300-19</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>도로명주소</dt>
                            <dd>서울특별시 서대문구 거북골로18길 55</dd>
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
                            <dd>자주식/직렬</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>주차비율</dt>
                            <dd>60%</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>준공일/사용승인일</dt>
                            <dd>2022-01-03</dd>
                        </dl>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">세대정보</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <div class="group_table_view">
                        <dl class="list_table_v">
                            <dt>등기정보</dt>
                            <dd>도생</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>실평수</dt>
                            <dd>-</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>공급 / 전용면적</dt>
                            <dd>- / 59.49m²</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>주택방향</dt>
                            <dd>북향</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>방 / 화장실</dt>
                            <dd>4개 / 2개</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>에어컨수 / 타입</dt>
                            <dd>2개 / 시스템</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>거실주방 / 구조</dt>
                            <dd>오픈형 / 11자</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>조리시설</dt>
                            <dd>하이라이트</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>바닥형태</dt>
                            <dd>마루</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>복층</dt>
                            <dd>복층아님</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>안방 폭 (장롱)</dt>
                            <dd>-</dd>
                        </dl>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">옵션</p>
                <div class="area_arrow">
                    <span class="lnr lnr-chevron-down c_gry2"></span>
                </div>
            </button>
            <div class="body_fold area_status">
                <div class="inner_body">
                    <p class="tit_option brtop">세대옵션</p>
                    <ul class="list_option">
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">공기순환장치</span>
                        </li>
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">붙박이장</span>
                        </li>
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">냉장고</span>
                        </li>
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">오븐레인지</span>
                        </li>
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">중문</span>
                        </li>
                    </ul>

                    <p class="tit_option">생활시설</p>
                    <ul class="list_option">
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">없음</span>
                        </li>
                    </ul>

                    <p class="tit_option">기타시설</p>
                    <ul class="list_option">
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">CCTV</span>
                        </li>
                        <li>
                            <div class="icon_zippro"></div>
                            <span class="txt_option">화재경보기</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="br_bottom">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">현장메모</p>
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
                <p class="bold2 c_gry2">타입메모</p>
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
                <p class="bold2 c_gry2">세대메모</p>
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

    </div>
    <?
        include'view_inquireBtn.php'
    ?>
</div>

<script>
    //toggle 내용
    $(".view3wrap .br_bottom .btn_fold").on("click",function(){

        if($(this).parent(".view3wrap .br_bottom").hasClass("active")){
                
            $(this).parent(".view3wrap .br_bottom").removeClass("active");
                            
        }else{

            $(this).parent(".view3wrap .br_bottom").addClass("active");
        }

    });
    
    //뒤로 가기
    $(".view3wrap .viewTop .gobackBtn").on("click",function(){ 
        $(".view3wrap").stop().fadeOut();
    });
</script>