<?php
	class UnitTesting{
		/*public function select(){
			include "koneksi.php";
			$sql = "select * from akun";
			$query = $db->prepare($sql);
			$query->execute();
			if($query->rowCount()>0){
				$hasil="true";
				return $hasil;
			}
			else{
				$hasil="false";
				return $hasil;
			}
		}
		public function sum_data($id){
		include ("koneksi.php");
			$sql = "select rating from user_rating sum(rating) where user_guest=".$id;
			$query = $db->prepare($sql);
			$query->execute();
			$jdata = $query->rowcount();
			foreach ($query as $key) {
				$hasil = $key->rating;
				$total = $hasil/$jdata;
				return $total;
			}
		}*/
		public function tesjual($jml, $harga){
			$total = $harga * $jml;
			$saldo = 200000;
			$sisa = $saldo - $total;
			return $sisa;
		}
	}
?>
