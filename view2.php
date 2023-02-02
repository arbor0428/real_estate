<div class="view2wrap">
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
        <div class="view2Visual po_r">
            <div class="view2ImgSlick">
                <div class="view2ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view2ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
                <div class="view2ImgBox">
                    <img src="../images/view01/view1_img01.JPG" alt="">
                </div>
            </div>
            <div class="pagingInfo03"></div>
        </div>
        <script>
            var $status03 = $('.pagingInfo03');
            var $slickElement03 = $('.view2ImgSlick');

            $slickElement03.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status03.text(i + ' / ' + slick.slideCount);
            });


            $slickElement03.slick({ 
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
                            <dd>미완료</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>가격정보</dt>
                            <dd>
                                <div class="group_table_view">
                                    <dl class="list_table_v">
                                        <dt>매매</dt>
                                        <dd>5억 5,800만원 ~ 5억 6,300만원</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>담보실입</dt>
                                        <dd>현장문의</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>전세</dt>
                                        <dd>-</dd>
                                    </dl>
                                    <dl class="list_table_v">
                                        <dt>월세</dt>
                                        <dd>-</dd>
                                    </dl>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="br_bottom active">
            <button class="btn_fold dp_sb dp_c">
                <p class="bold2 c_gry2">타입상세정보</p>
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
                            <dd>- / 56.19m²</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>주택방향</dt>
                            <dd>북향</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>방 / 화장실</dt>
                            <dd>3개 / 2개</dd>
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
                        <dl class="list_table_v">
                            <dt>거실 폭 (쇼파)</dt>
                            <dd>-</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>냉장고자리</dt>
                            <dd>-</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>다용도실</dt>
                            <dd>1개</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>위반여부</dt>
                            <dd>위반사항없음</dd>
                        </dl>
                        <dl class="list_table_v">
                            <dt>테라스</dt>
                            <dd>- / 없음</dd>
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

    </div>
    <div id="single_btn" class="dp_f dp_cc">
        <a class="inquireBtn dp_f dp_cc dp_c" href="" title="문의하기">문의하기</a>
    </div>
</div>

<script>
    //toggle 내용
    $(".view2wrap .br_bottom .btn_fold").on("click",function(){

        if($(this).parent(".view2wrap .br_bottom").hasClass("active")){
                
            $(this).parent(".view2wrap .br_bottom").removeClass("active");
                            
        }else{

            $(this).parent(".view2wrap .br_bottom").addClass("active");
        }

    });

    //뒤로 가기
    $(".view2wrap .viewTop .gobackBtn").on("click",function(){ 
        $(".view2wrap").stop().fadeOut();
    });
</script>