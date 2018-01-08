<?php
	require 'UnitTesting.php';
	include "koneksi.php";
	class UnitTestingTest extends PHPUnit_Framework_TestCase{
		protected function setUp(){
			$this->UnitTesting = new UnitTesting();
		}
		/*public function testSelect(){
			$result = $this->UnitTesting->select();
			$this->assertEquals('true',$result);
		}
		public function testDelete(){
			$result = $this->UnitTesting->sum_data(1);
			$this->assertEquals('5',$result);
		}*/
		public function testJual(){
			$result = $this->UnitTesting->tesjual(5,2000);
			$this->assertEquals('190000',$result);
		}
		public function testRating(){
			$result = $this->UnitTesting->tesrating(5,4,3,2,1);
			$this->assertEquals('true',$result);
		}
	}
?>