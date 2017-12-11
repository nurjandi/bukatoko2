<?php
	 require_once "PHPUnit/Framework/TestCase.php";
 
 class testoperasi extends PHPUnit_Framework_TestCase
 {
	 //test kurang barang
	 public function testTambah()
	 {
	 	$result1=myclass::methodpenjumlahan(50);
	 	$this->assertEquals(51,$result1);
	 }
 }
 class myclass
 {
 	public static function methodpenjumlahan($barang_sebelum)
 	{
 		return $barang_sebelum+1;
 	}
 }
?>