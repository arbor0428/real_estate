<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>집PRO</title>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
		<link href="/css/main.css?v=1" rel="stylesheet" type="text/css">
		<link href="/css/all.css?v=1" rel="stylesheet" type="text/css">
		<link href="/css/mediaquery.css?v=1" rel="stylesheet" type="text/css">
        <link href="/css/login.css?v=1.32" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<!-- slick 불러오기 -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<!--<script src="/js/slick.min.js"></script>-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<script src="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/bootstrap-slider.js"></script>
		<link href="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/css/bootstrap-slider.css" rel="stylesheet" type="text/css">

	</head>

	<body>
        <div class="joinWrap">
            <div class="join_top_bar dp_sb dp_c">
                <h1 class="logo"><a href="/"><img src="/images/logo.png" alt=""></a></h1>
                <a class="gotologin" href="./login.php" title="로그인">로그인</a>
            </div>
            <div class="bg-gradient-light">
                <div class="step_wrap">
                    <ul class="icon_stepper dp_f dp_c dp_cc">
                        <li class="on"><a class="dp_f dp_c dp_cc" href="./join1.php">1</a></li>
						<li class="on"><a class="dp_f dp_c dp_cc" href="./join2.php">2</a></li>
						<li><a class="dp_f dp_c dp_cc" href="./join3.php">3</a></li>
						<li><a class="dp_f dp_c dp_cc" href="./join4.php">4</a></li>
						<li><a class="dp_f dp_c dp_cc" href="./join5.php">5</a></li>
                    </ul>
					<div class="step_cont">
						<h3 class="step_cont_tit"><span class="step_cont_tit_step">step2</span>약관</h3>
						<div class="check_form_wrap">
							<input type="checkbox" name="c_box1" id="chk1" onclick="c_box1(this.name,0);">
							<label for="chk1">
								<div class="agree_check"></div>
								전체동의
							</label>
						</div>
						<a class="step_btn dp_f dp_c dp_cc red2 c_wht" href="javascript:void(0)" title="다음">다음</a>
					</div>
					<script>
						function c_box1(obj,chk){
							
							eChk = document.getElementsByName(obj);

							if(eChk[0].checked){
								$('.check_form_wrap > label').addClass('active');
								$('.step_btn').prop('href', './join3.php'); //이메일 맞는지 체크 후 다음 단계 진행
							}else{
								$('.check_form_wrap > label').removeClass('active');
								$('.step_btn').prop('href', 'javascript:void(0)'); //다음 단계 진행 disable
							}
						}
					</script>
                </div>
            </div>
        </div>
    </body>
</html>