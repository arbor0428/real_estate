<?php
include "/home/edufim/www/module/class/class.DbCon.php";
include "/home/edufim/www/module/class/class.Msg.php";
include "/home/edufim/www/module/class/class.Util.php";

$MSG = new Msg();
$UTIL = new Util();

$userid = strtolower(addslashes(trim($userid)));
$userid = str_replace(' ', '', $userid);

if($UTIL->isEmailExist($userid)) {
    $msg = "이미 사용중인 이메일입니다";
    $MSG->GblMsgBoxParent($msg);
    exit;
}

if ($pwd) {
	$pwd = hash('sha256', trim($_POST['pwd']));
} else {
    $msg = "비밀번호를 입력하세요";
    $MSG->GblMsgBoxParent($msg);
    exit;
}



$option01 = $UTIL->conv_nll($option01);
$option02 = $UTIL->conv_nll($option02);
$option03 = $UTIL->conv_nll($option03);
$receiveChk = ($agree03 == "receiveChk")? 1 : 0;
$userip = $_SERVER['REMOTE_ADDR'];
$rTime = time();

$sql = "insert into ks_member(userid, pwd, name, phone, zipcode, addr01, addr02, gender, option01, option02, option03, receiveChk, userip, rTime) values ";
$sql .= "('$userid', '$pwd', '$mname', '$phone', '$postCode', '$addr01', '$addr02', '$gender', $option01, $option02, $option03, '$receiveChk', '$userip', '$rTime')";
$result = sqlExe($sql);

if ($result) {
	$msg = "회원 가입이 완료되었습니다.";
	$url = "location.href = '/member/login.php'";
	$MSG->GblMsgBoxParent($msg, $url);
} else {
	$msg = "회원 가입이 일시적으로 제한 되었습니다. 관리자에게 문의 바랍니다.";
	$url = "location.href = '/'";
	$MSG->GblMsgBoxParent($msg, $url);
}
