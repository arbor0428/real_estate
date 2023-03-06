<?
           if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<div class="mypage_withdrawWrap">
    <div class="btn_close"></div>
    <div class="boardTop">
        <p class="board_tit c_gry2 bold2 txt-c">회원탈퇴</p>
    </div>
    <div class="section_comm">
        <div class="mypage_list_wrap">
            <p class="list_tit dp_f dp_c">회원탈퇴</p>
            <p class="list_detail c_gry f12">회원 탈퇴 시 개인 정보는 즉시 파괴하며 이용 중인 이용권은 소멸 처리됩니다.<br>
                상세한 회원 탈퇴 약관은 이용약관을 확인해 주시기 바랍니다.<br>
                이에 모두 동의하며 탈퇴를 원하시는 경우<br>
                아래 집 프로 본인 계정 정보를 입력해 주시기 바랍니다.
            </p>
            <div class="mypage_box">
                <ul class="mypage_box_list">
                    <li class="dp_sb dp_c">
                        <div class="row_tit wid30">이름</div>
                        <div class="row_det wid70">
                            <input class="wid100" type="text" placeholder="이름을 입력해주세요.">
                        </div>
                    </li>
                    <li class="dp_sb">
                        <div class="row_tit wid30">전화번호</div>
                        <div class="row_det wid70">
                            <div class="inputWrap dp_f dp_c">
                                <input type="text" placeholder="핸드폰 번호를 입력해주세요.">
                                <a class="dp_f dp_c dp_cc red2 c_wht" href="" title="인증번호 발송">인증번호 발송</a>
                            </div>
                            <div class="inputWrap dp_f dp_c">
                                <input type="text">
                                <a class="dp_f dp_c dp_cc red2 c_wht" href="" title="인증">인증</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mypage_withdraw_btn_wrap dp_f dp_c dp_cc">
            <a class="dp_f dp_c dp_cc c_wht gry" href="" title="취소">취소</a>
            <a class="dp_f dp_c dp_cc c_wht red2" href="" title="동의 및 탈퇴">동의 및 탈퇴</a>
        </div>
    </div>
</div>

<script>
    //회원가입 수정하기 페이지 닫기
    $(".mypage_withdrawWrap .btn_close").click(function(event){

        event.preventDefault();

        $(".mypage_withdrawWrap").hide();
    });
</script>

<style>
    .mypage_box_list li .row_tit.wid30 {
        width: 30%;
    }
    .mypage_box_list li .row_det.wid70 {
        width: 70%;
    }
    @media (max-width: 532px) {
        .mypage_box_list li .row_det input.wid100 {
            width: 100%;
        }
        .mypage_box_list li .row_det input {
            width: 60%;
        }
        .mypage_box_list li .row_det .inputWrap a {
            width: 40%;
            font-size: 0.75rem;
        }
    }
</style>

<?
	}	
?>

