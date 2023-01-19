


    <!-- Custom styles for this template-->
    <link href="/css/login.css?v=1.32" rel="stylesheet">


	<!-- Ubuntu -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">



<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row1 justify-content-center" style="width:100%; height:100%; align-items:center;">

            <div class="col-xl-10 col-lg-12 col-md-9 txt-c">
		
				<img src='/images/logo.png' alt='로고' id="topLogo">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5 pt-6 pb-6">
									<form name='frmLogin' class="user" method='post' action='/module/login/login_proc.php'>
									<input type='text' style='display:none;'>
									<input type='hidden' name='f_mtype' value='A'>

                                        <div class="form-group">
                                            <input type="text" name="userid" id="userid" class="form-control form-control-user" placeholder="ID" onkeypress="if(event.keyCode==13){masterLogin();}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passwd" id="passwd" class="form-control form-control-user" placeholder="Password" onkeypress="if(event.keyCode==13){masterLogin();}">
                                        </div>
									<!--
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">아이디 저장</label>
                                            </div>
                                        </div>
									-->
                                        <a href="javascript:masterLogin();" class="btn btn-danger btn-user btn-block">
                                            로그인
                                        </a>

										<div class="txt-c">
											<h1 class="h6 text-gray-900 mt-4 mb-4 lh15">
												집프로 로그인페이지입니다.<br>회원등급에 따라 매물 내역을 확인하실 수 있습니다.
											</h1>
										</div>
									
                                        <hr>
                                        <a href="./join1.php" class="btn btn-facebook btn-user btn-block" style='width:50%;float:left;'>
                                            <i class="fab fa-facebook-f fa-fw"></i>회원가입
                                        </a>
                                        <a href="" class="btn btn-facebook btn-user btn-block" style='width:50px;float:left;margin:0;margin-left:5px;background:#15c654;'>
                                            <i class="fab fa-facebook-f fa-fw"></i><b>N</b>
                                        </a>
                                        <a href="" class="btn btn-facebook btn-user btn-block" style='width:50px;float:left;margin:0;margin-left:5px;background:#fee500;color:#212121;'>
                                            <i class="fab fa-facebook-f fa-fw"></i><b>K</b>
                                        </a>
									
                                    </form>
									<!--
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
									
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
									-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

<style>#loading{display:none;}</style>

<!-- 알림 메세지 -->
<a id="GblNotice_open" class="GblNotice_open"></a>
<a id="GblNotice_close" class="GblNotice_close"></a>

<div id="GblNotice" class="popup_background" style="width:90%; max-width:320px; display:none;">
	<div class="cls_buttonali" id="alertCloseBtn"><div class="cls_buttonali2" style="margin-top:0px;"><button class="GblNotice_close close_button_pop"><!--<span class="lnr lnr-cross"></span>--></button></div></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0">알림</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="alertTxt" class=""></span></div>
		<div class="btn_ali_pop2" id="alertBtn"><input type="button" class="btn_notice_reg GblNotice_close" value="확인" /></div>
	</div>
</div>

<!-- confirm창 -->
<a id="conFirm_open" class="conFirm_open"></a>
<div id="conFirm" class="popup_background" style="min-width:320px;display:none;">
	<div class="cls_buttonali"><div class="cls_buttonali2" style="margin-top:0px;"><button class="conFirm_close close_button_pop"><span class="lnr lnr-cross"></span></button></div></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0">확인</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="confirmTxt" class="txt_bold"></span></div>
		<a class="conFirm_close" href="#">
			<div class="btn2_wrap">
				<div class="btn_ali_pop3" id="confirmCancelBtn"><input type="button" class="btn_notice_reg_cancel" value="취소" /></div>
				<div class="btn_ali_pop3" id="confirmBtn"><input type="button" class="btn_notice_reg_add" value="확인"></div>
			</div>
		</a>
	</div>
</div>


<a id="titleBox_open" class="titleBox_open"></a>
<div id="titleBox" class="popup_background" style="min-width:320px;display:none;">
	<div class="popup_notice">
		<div class="clearfix">
			<div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div>
			<div class="pop_ttl0" id='title_ttl'>팝업제목</div>
			<div class="cls_buttonali"><button class="titleBox_close close_button_pop"><span class="lnr lnr-cross"></span></button></div>
		</div>
		<div class="pop_div_dotted"></div>
		<div class="write_it">
			<div id='titleFrame' style="background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>

<!-- 멀티팝업 -->

<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:320px;display:none;">
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0" id='multi_ttl'>팝업제목</div><div class="cls_buttonali2"><button class="multiBox_close close_button_pop2"></button></div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it">
			<div id='multiFrame' style="background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>
<!--
<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="multiBox_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="write_it">
			<div id='multiFrame' style="margin:30px 0 0 0;background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>
-->

<!-- 팝업 스크립트 -->
<script>
$(document).ready(function () {
	$('#GblNotice,#conFirm').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: false
	});

	$('#titleBox').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: true
	});

	$('#multiBox').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: false
	});

	//숫자만 입력받기
/*
	$('.numberOnly').keydown(function(e){
		fn_Number($(this),e);
	}).keyup(function(e){
		fn_Number($(this),e);
	}).css('imeMode','disabled');
*/

	//input필드 자동완성기능
	jQuery('input').attr("autocomplete","off");
});
</script>
<!-- 팝업 스크립트 -->




<iframe name='ifra_gbl' src='about:blank' width='0' height='0' frameborder='0' scrolling='no' style='display:none;'></iframe>