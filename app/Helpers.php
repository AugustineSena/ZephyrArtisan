<?php 
	function restrict($iduser, $idproject){
		$result = \DB::table('userList')->where('iduser',$iduser)->where('idproject',$idproject)->count();
		if($result > 0){
			return true;
		}
		return false;
	}

	function restInPiece($iduser){
		$result = \DB::table('userList')->where('id',$iduser)->count();
		if($result > 0){
			return true;
		}
		return false;
	}
	function restInPiece_user($iduser){
		$result = \DB::table('users')->where('id',$iduser)->count();
		if($result > 0){
			return true;
		}
		return false;
	}
?>