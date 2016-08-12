<?php 
class TBox{
	function __construct(&$data){
		$this->Data=$data;
	}

	function setData(&$row){
		$this->Data=$row;
	}

	function makeView(){
		echo '<div class="thinks">';
   		echo $this->Data['date'],"<hr noshade>",$this->Data['text'];
   		echo '</div>';
	}

}	
?>