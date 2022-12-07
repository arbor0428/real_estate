<div class="filterMenu">
    <div class="btn_close">
        <img src="../images/btn_close.png" alt="">
    </div>
    <div class="inner_filter">
        <p class="c_gry2 bold2 m_20">필터검색</p>
        <div class="row dp_f">
            <div class="row_tit">건물형태</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall01" id="chkall01" checked>
                        <label for="chkall01">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_01" id="chk01_01">
                        <label for="chk01_01">다세대/연립</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_02" id="chk01_02">
                        <label for="chk01_02">다가구</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_03" id="chk01_03">
                        <label for="chk01_03">오피스텔</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_04" id="chk01_04">
                        <label for="chk01_04">아파트</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_05" id="chk01_05">
                        <label for="chk01_05">단독주택</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_06" id="chk01_06">
                        <label for="chk01_06">타운하우스</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_07" id="chk01_07">
                        <label for="chk01_07">도생</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_08" id="chk01_08">
                        <label for="chk01_08">근생</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk01_09" id="chk01_09">
                        <label for="chk01_09">숙박</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">계약분류</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall02" id="chkall02" checked>
                        <label for="chkall02">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_01" id="chk02_01">
                        <label for="chk02_01">매매</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_02" id="chk02_02">
                        <label for="chk02_02">전세</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_03" id="chk02_03">
                        <label for="chk02_03">안심</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_04" id="chk02_04">
                        <label for="chk02_04">중기청</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_05" id="chk02_05">
                        <label for="chk02_05">월세</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk02_06" id="chk02_06">
                        <label for="chk02_06">대물</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f dp_c">
            <div class="row_tit"> 
                R 
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info01" name="info01" type="text" onkeyup="set01();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info02" name="info02" type="text" onkeyup="set01();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit"> 
                매매가
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info03" name="info03" type="text" onkeyup="set02();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info04" name="info04" type="text" onkeyup="set02();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c02" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit"> 
                담보실입
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info05" name="info05" type="text" onkeyup="set03();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info06" name="info06" type="text" onkeyup="set03();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c03" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">무입여부</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap list_radio1">
                    <li>
                        <input type="checkbox" name="chk03_01" id="chk03_01">
                        <label for="chk03_01">가능</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit"> 
                전세가/보증금
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info07" name="info07" type="text" onkeyup="set04();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info08" name="info08" type="text" onkeyup="set04();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c04" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit"> 
                월세
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info09" name="info09" type="text" onkeyup="set05();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info10" name="info10" type="text" onkeyup="set05();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c05" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit"> 
                실평수 
                <div class="c_red f12 dp_f">
                    <input class="numCount" id="info11" name="info11" type="text" onkeyup="set06();" value='0.1'>
                    <span>이상 ~</span>
                    <input class="numCount" id="info12" name="info12" type="text" onkeyup="set06();" value='10'>
                    <span>이하</span>
                </div>
            </div>
            <div class="row_det">
                <div class="slider-cont">
                    <input id="ex12c06" type="text"/>
                </div>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">방</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall04" id="chkall04" checked>
                        <label for="chkall04">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk04_01" id="chk04_01">
                        <label for="chk04_01">원룸</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk04_02" id="chk04_02">
                        <label for="chk04_02">1.5룸</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk04_03" id="chk04_03">
                        <label for="chk04_03">투룸</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk04_04" id="chk04_04">
                        <label for="chk04_04">쓰리룸</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk04_05" id="chk04_05">
                        <label for="chk04_05">4룸이상</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">화장실</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall05" id="chkall05" checked>
                        <label for="chkall05">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk05_01" id="chk05_01">
                        <label for="chk05_01">1개</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk05_02" id="chk05_02">
                        <label for="chk05_02">2개</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk05_03" id="chk05_03">
                        <label for="chk05_03">3개</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk05_04" id="chk05_04">
                        <label for="chk05_04">4개이상</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">복층</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap list_radio2">
                    <li>
                        <input type="checkbox" name="chk06_01" id="chk06_01">
                        <label for="chk06_01">복층</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk06_02" id="chk06_02">
                        <label for="chk06_02">복층아님</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">복층</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall07" id="chkall07" checked>
                        <label for="chkall07">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk07_01" id="chk07_01">
                        <label for="chk07_01">테라스</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk07_02" id="chk07_02">
                        <label for="chk07_02">왕테라스</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk07_03" id="chk07_03">
                        <label for="chk07_03">없음</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">엘리베이터</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap list_radio2">
                    <li>
                        <input type="checkbox" name="chk08_01" id="chk08_01">
                        <label for="chk08_01">있음</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk08_02" id="chk08_02">
                        <label for="chk08_02">없음</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">주차방식</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chk09_01" id="chk09_01">
                        <label for="chk09_01">자주식/병렬</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk09_02" id="chk09_02">
                        <label for="chk09_02">지하주차장</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk09_03" id="chk09_03">
                        <label for="chk09_03">벙커주차장</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">주택방향</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall10" id="chkall10" checked>
                        <label for="chkall10">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_01" id="chk10_01">
                        <label for="chk10_01">동향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_02" id="chk10_02">
                        <label for="chk10_02">서향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_03" id="chk10_03">
                        <label for="chk10_03">남향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_04" id="chk10_04">
                        <label for="chk10_04">북향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_05" id="chk10_05">
                        <label for="chk10_05">남동향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_06" id="chk10_06">
                        <label for="chk10_06">남서향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_07" id="chk10_07">
                        <label for="chk10_07">북동향</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk10_08" id="chk10_08">
                        <label for="chk10_08">북서향</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">바닥형태</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall11" id="chkall11" checked>
                        <label for="chkall11">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk11_01" id="chk11_01">
                        <label for="chk11_01">마루</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk11_02" id="chk11_02">
                        <label for="chk11_02">타일</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk11_03" id="chk11_03">
                        <label for="chk11_03">장판</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">세대옵션</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall12" id="chkall12" checked>
                        <label for="chkall12">에어컨</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk12_01" id="chk12_01">
                        <label for="chk12_01">냉장고</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk12_02" id="chk12_02">
                        <label for="chk12_02">세탁기</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk12_03" id="chk12_03">
                        <label for="chk12_03">세탁기<br>(건조기능)</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk12_03" id="chk12_03">
                        <label for="chk12_03">욕조</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk12_04" id="chk12_04">
                        <label for="chk12_04">마당</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">준공년월</div>
            <div class="row_det">
                
            </div>
        </div>

        <div class="row dp_f">
            <div class="row_tit">소유권</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap">
                    <li>
                        <input type="checkbox" name="chkall13" id="chkall13" checked>
                        <label for="chkall13">전체</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk13_01" id="chk13_01">
                        <label for="chk13_01">개인</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk13_02" id="chk13_02">
                        <label for="chk13_02">법인</label>
                    </li>
                    <li>
                        <input type="checkbox" name="chk14_03" id="chk14_03">
                        <label for="chk14_03">신탁</label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row dp_f">
            <div class="row_tit">공실</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap list_radio1">
                    <li>
                        <input type="checkbox" name="chkall14" id="chkall14" checked>
                        <label for="chkall14">공실만</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row dp_f">
            <div class="row_tit">즉시입주</div>
            <div class="row_det">
                <ul class="checkWrap dp_f dp_wrap list_radio1">
                    <li>
                        <input type="checkbox" name="chkall15" id="chkall15" checked>
                        <label for="chkall15">즉시입주</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="group_btn dp_sb">
        <a class="btn_basic dp_f dp_c dp_cc f14 bold2" href="" title="취소">취소</a>
        <a class="btn_basic dp_f dp_c dp_cc f14 bold2" href="" title="초기화">초기화</a>
        <a class="red_btn dp_f dp_c dp_cc f14 bold2" href="" title="적용하기">적용하기</a>
    </div>
</div>
<style>
    .slider .tooltip.top {display: none;}
    .slider-handle{
        background: #ffffff;
	    border:1px solid #efefef;
	    box-sizing:border-box;
    }
    .slider-selection {
        background-color: #ed164b;
        box-shadow: none;
        background-image: url();
    }
    .slider.slider-horizontal {
        width: 100%;
    }
    .slider-track {
        box-shadow: none;
    }
    .slider.slider-horizontal .slider-track {
        height: 4px;
    }
    .slider.slider-horizontal .slider-tick, 
    .slider.slider-horizontal .slider-handle {
        margin-top: -8px;
    }
    .slider-track {
        background-color: #e4e7ed;
        background-image: url();
    }
</style>
<script>
    set01()
    function set01(){
        a = parseFloat($("#info01").val())
        b = parseFloat($("#info02").val())
        $("#ex12c").slider({ id: "slider12c", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c").on("slide", function(slideEvt) {
            $("#in3SliderVal01").text(slideEvt.value[0]);
            $("#ex3SliderVal01").text(slideEvt.value[1]);
            $("#info01").val(slideEvt.value[0]);
            $("#info02").val(slideEvt.value[1]);
        });

    }
    set02()
    function set02(){
        a = parseFloat($("#info03").val())
        b = parseFloat($("#info04").val())
        $("#ex12c02").slider({ id: "slider12c02", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c02").on("slide", function(slideEvt) {
            $("#in3SliderVal02").text(slideEvt.value[0]);
            $("#ex3SliderVal02").text(slideEvt.value[1]);
            $("#info03").val(slideEvt.value[0]);
            $("#info04").val(slideEvt.value[1]);
        });
    }

    set03()
    function set03(){
        a = parseFloat($("#info05").val())
        b = parseFloat($("#info06").val())
        $("#ex12c03").slider({ id: "slider12c03", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c03").on("slide", function(slideEvt) {
            $("#in3SliderVal03").text(slideEvt.value[0]);
            $("#ex3SliderVal03").text(slideEvt.value[1]);
            $("#info05").val(slideEvt.value[0]);
            $("#info06").val(slideEvt.value[1]);
        });
    }

    set04()
    function set04(){
        a = parseFloat($("#info07").val())
        b = parseFloat($("#info08").val())
        $("#ex12c04").slider({ id: "slider12c04", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c04").on("slide", function(slideEvt) {
            $("#in3SliderVal04").text(slideEvt.value[0]);
            $("#ex3SliderVal04").text(slideEvt.value[1]);
            $("#info07").val(slideEvt.value[0]);
            $("#info08").val(slideEvt.value[1]);
        });
    }

    set05()
    function set05(){
        a = parseFloat($("#info09").val())
        b = parseFloat($("#info10").val())
        $("#ex12c05").slider({ id: "slider12c05", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c05").on("slide", function(slideEvt) {
            $("#in3SliderVal05").text(slideEvt.value[0]);
            $("#ex3SliderVal05").text(slideEvt.value[1]);
            $("#info09").val(slideEvt.value[0]);
            $("#info10").val(slideEvt.value[1]);
        });
    }

    set06()
    function set06(){
        a = parseFloat($("#info11").val())
        b = parseFloat($("#info12").val())
        $("#ex12c06").slider({ id: "slider12c06", min: a, max: b, range: true, step:0.1, value: [a, b] });
        $("#ex12c06").on("slide", function(slideEvt) {
            $("#in3SliderVal06").text(slideEvt.value[0]);
            $("#ex3SliderVal06").text(slideEvt.value[1]);
            $("#info11").val(slideEvt.value[0]);
            $("#info12").val(slideEvt.value[1]);
        });
    }
</script>
