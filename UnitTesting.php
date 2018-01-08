<?php
	class UnitTesting{
		public function select(){
			include "koneksi.php";
			$sql = "SELECT * FROM akun";
			$query = $db->prepare($sql);
			$query->execute();
			$row = $q->fetchAll();
			if($q->rowCount()>0){
				return true;
			}
			else{
				return false;
			}
		}
		/*public function delete_data($id){
		include ("koneksi.php");
			$sql = "select rating from user_rating sum(user_rating) where user_guest=."$id;"
			$query = $db->prepare($sql);
			$query->execute();
		}*/
	}
?>
