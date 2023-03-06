<?
           if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<div class="mypage_editWrap">
    <div class="btn_close"></div>
    <div class="boardTop">
        <p class="board_tit c_gry2 bold2 txt-c">회원정보 수정</p>
    </div>
    <div class="section_comm">
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c">회원기본정보</p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <div class="row_tit">이름</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">닉네임</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">회원유형</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">회원구분</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">이메일</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">연락처</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c">회원상세정보</p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <div class="row_tit">회사명</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">팀명</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">직급</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c">회원상태</p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <div class="row_tit">상태</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">결제상태</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">가입일시</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">잔여일수</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c">비밀번호 변경</p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <div class="row_tit">기존 비밀번호</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">변경비밀번호</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                    <li class="dp_sb dp_c">
                        <div class="row_tit">변경 비밀번호 확인</div>
                        <div class="row_det">
                            <input class="wid100" type="text">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dp_f dp_c dp_cc">
            <a class="edit_btn dp_f dp_c dp_cc c_wht red2" href="" title="수정하기">변경</a>
        </div>
    </div>
</div>

<script>
    //회원가입 수정하기 페이지 닫기
    $(".mypage_editWrap .btn_close").click(function(event){

        event.preventDefault();

        $(".mypage_editWrap").hide();
    });
</script>

<style>
    .section_comm {
        overflow-y: scroll;
        height: calc(100vh - 68px);
    }
</style>

<?
	}	
?>

