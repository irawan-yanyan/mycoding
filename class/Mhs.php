<?php
	class Mhs{
		function __construct($nip){
			$this->nip = $nip;
			return $this->nip;
		}
		function viewMhs(){
		   echo "nip : ".$this->nip;
		
		}

	}
?>
