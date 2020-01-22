<?php
class Mhs{
	        //var $nama;
		function __construct($nip){
			$this->nip = $nip;
			return $this->nip;
		}
		function viewMhs($nama){
		   echo "nip : ".$this->nip." dengan nama : ".$nama."\n";
		   $this->nama = $nama;
		}
		function __destruct(){
		   echo "ini adalah destruct utk nip :".$this->nip."dengan nama : ".$this->nama."\n";
		}

	}
?>
