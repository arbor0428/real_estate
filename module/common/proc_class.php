<?php
include "/home/edufim/www/module/class/class.DbCon.php";
include "/home/edufim/www/module/class/class.Msg.php";
include "/home/edufim/www/module/class/class.Util.php";
include "/home/edufim/www/module/class/class.jUtil.php";

if (isEmpty($userid))		{ echo "NOT_LOGIN";  exit; }
else if (isEmpty($method))	{ echo "NOT_ACCESS"; exit; }
else if (isEmpty($_CTYPE))	{ echo "NOT_ACCESS"; exit; }
else {
	switch ($method) {
		case 'CART':
			if (isEmpty($uid))	{ echo "NOT_ACCESS"; exit; }
			
			$isExist = sqlRowOne("SELECT COUNT(1) FROM ks_cart WHERE userid='$userid' AND pid=$uid") > 0;
			
			if ($isExist) {
				echo "EXIST";
			} else {
				$rTime = time();
				$query = "INSERT INTO ks_cart (userid, pid, rTime) values ('$userid', $uid, $rTime)";
				$result = sqlExe($query);
				if($result) echo "SUCCESS";
				else echo "FAILED";
			}
			break;
			
		case 'CART_SET':
			if (isEmpty($class_uids))	{ echo "NOT_ACCESS"; exit; }
			$uid_arr = json_decode(stripslashes($class_uids));
			$SUCCESS = 0;
			$FAILED = 0;
			$EXIST = 0;
			foreach ($uid_arr as $key => $uid) {
				$isExist = sqlRowOne("SELECT COUNT(1) FROM ks_cart WHERE userid='$userid' AND pid=$uid") > 0;
				if ($isExist) {
					$EXIST++;
				} else {
					$rTime = time();
					$query = "INSERT INTO ks_cart (userid, pid, rTime) values ('$userid', $uid, $rTime)";
					$result = sqlExe($query);
					if($result) $SUCCESS++;
					else $FAILED++;
				}
			}
			// $response = "{'SUCCESS':'$SUCCESS','FAILED':'$FAILED','EXIST':'$EXIST'}";
			$response = '{"SUCCESS":"'.$SUCCESS.'","FAILED":"'.$FAILED.'","EXIST":"'.$EXIST.'"}';

			echo $response;
			break;
			
		case 'WISH':
			$isExist = sqlRowOne("SELECT COUNT(1) FROM ks_wish WHERE userid='$userid' AND cType='$_CTYPE' AND pid=$uid") > 0;

			if ($isExist) {
				$query = "DELETE FROM ks_wish WHERE userid='$userid' AND cType='$_CTYPE' AND pid=$uid";
				$result = sqlExe($query);
				if($result) echo "SUCCESS";
				else echo "FAILED";
			} else {
				$rTime = time();
				$query = "INSERT INTO ks_wish (userid, cType, pid, rTime) values ('$userid', '$_CTYPE', $uid, $rTime)";
				$result = sqlExe($query);
				if($result) echo "SUCCESS";
				else echo "FAILED";
			}
			break;

		default:
			echo "METHOD_UNAVAILABLE";
	}
}