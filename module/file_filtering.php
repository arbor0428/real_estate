<?
//파일확장자 확인
function msg_strip($msg){ return stripslashes($msg); }

function file_strip($up_file_name){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);
	

	 if(!eregi($ext, "gif|jpg|jpeg|bmp|png|swf|hwp|doc|docx|txt|pdf|pdf|xls|xlsx|ico|wmv|wma|mp3|dwg|dxf|ai|ppt|pptx|zip")){
		 echo "<script>alert('업로드 할 수 없는 파일입니다');history.go(-1);</script>";
		 exit;
	 }
}



function file_strip_img($up_file_name,$etxt){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);

	if(!$etxt)	$etxt = '업로드 할 수 없는 파일입니다';


	 if(!eregi($ext, "gif|jpg|jpeg|bmp|png|swf")){
		 echo "<script>alert('$etxt');history.go(-1);</script>";
		 exit;
	 }
}



function file_strip_music($up_file_name,$etxt){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);

	if(!$etxt)	$etxt = '업로드 할 수 없는 파일입니다';


	 if(!eregi($ext, "wmv|wma|mp3")){
		 echo "<script>alert('$etxt');history.go(-1);</script>";
		 exit;
	 }
}



function file_strip_gd($up_file_name){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);


	 if(eregi($ext, "gif|jpg|jpeg|bmp|png|swf"))	return true;
}


function file_strip_chk($up_file_name,$exe){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);


	 if(eregi($ext, $exe))	return true;
}

function file_strip_cut($up_file_name,$etxt,$filelist){

	$Last_File_Name = substr(strrchr(msg_strip($up_file_name),'.'),1);

	$ext = strtolower($Last_File_Name);

	if(!$etxt)	$etxt = '업로드 할 수 없는 파일입니다';


	 if(!eregi($ext, $filelist)){
		 echo "<script>alert('$etxt');history.go(-1);</script>";
		 exit;
	 }
}


?>