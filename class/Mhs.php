<?php
	class Mhs{
		function __construct($nip){
			$this->nip = $nip;
			return $this->nip;
		}
		function viewMhs($nama){
		   echo "nip : ".$this->nip." dengan nama : ".$nama;
		
		}

	}
?>
