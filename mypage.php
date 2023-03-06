<?
           if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<div class="mypageWrap">
    <div class="btn_close"></div>
    <div class="boardTop">
        <p class="board_tit c_gry2 bold2 txt-c">마이페이지</p>
    </div>
    <div class="section_comm">
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c"><span class="material-symbols-outlined">person</span><span class="list_txt">내 정보</span></p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <span>이름</span>
                        <span class="bold2">김명식</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>E-mail</span>
                        <span class="bold2">kimms444@nate.com</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>전화번호</span>
                        <span class="bold2">010-4668-3162</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>계정유형</span>
                        <span class="bold2">집프로</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>소속 부동산명</span>
                        <span class="bold2">집프로</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>소속 팀</span>
                        <span class="bold2">ZIP_PRO팀</span>
                    </li>
                    <li class="dp_sb dp_c">
                        <span>직급</span>
                        <span class="bold2">-</span>
                    </li>
                    <li>
                        <div class="dp_sb dp_c">
                            <span>브리핑</span>
                            <div class="switch_wrap">
                                <label class="switch-button">
                                    <input type="checkbox"/>
                                    <span class="onoff-switch"></span>
                                </label>
                            </div>
                        </div>
                        <p class="m-12 m_20 f12 c_gry">ⓘ 홈에서 리베이트, 현장상세내용, 속지사진, 매매/전세/원세 메모,<br> 현장메모, 타입메모, 세대메모 정보가 숨겨집니다.</p>
                    </li>
                </ul>
                <div class="twobtn_wrap dp_f dp_c">
                    <a class="mypage_edit_go dp_f dp_c dp_cc" href="" title="수정하기">수정하기</a>
                    <a class="mypage_withdraw_go dp_f dp_c dp_cc" href="" title="회원탈퇴">회원탈퇴</a>
                </div>
            </div>
        </div>
        <div class="mypage_list_wrap">
            <div class="dp_sb dp_c">
                <p class="list_tit dp_f dp_c"><span class="material-symbols-outlined">credit_card</span> <span class="list_txt">상품현황</span></p>
                <span class="usingAmt">0개의 상품 이용중</span>
            </div>
            <div class="mypage_box dp_f dp_c dp_cc">
                <p class="f15">이용중인 상품이 없습니다.</p>
            </div>
        </div>
    </div>
</div>
<script>
    //마이페이지 수정 화면 나타남
    $(".mypage_edit_go").click(function(event){

        event.preventDefault();
        $(".mypage_editWrap").show();

    });
    //회원탈퇴 나타남
    $(".mypage_withdraw_go").click(function(event){

        event.preventDefault();
        $(".mypage_withdrawWrap").show();

    });
</script>
<style>
    @media (max-width: 532px) {
        .section_comm {
            overflow-y: scroll;
            height: calc(100vh - 68px);
        }
        .mypage_box_list li p br {
            display: none;
        }
    }
</style>

<?
	}	
?>

