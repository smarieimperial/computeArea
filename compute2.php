<?php
class Rectangle {
	private $length;
	private $width;
	 
	public function __construct ($len,$wid){
		$this->length=$len;
		$this->width=$wid;
	}
	public function getLength(){
		return $this->length;
	}
	public function getWidth(){
		return $this->width;
		 
	}
	public function findArea (){
		$area=$this->length * $this->width;
		return $area;
	}
	public function findPerim(){
		return 0;	 
	}
	public function findDiag(){
		return 0;		 
	}	
	 
}
$rec= array();
for ($i=0;$i<3;$i++){
	$rec[$i]=new Rectangle($_GET['length'][$i],
                           $_GET['width'][$i]);
}
$area1=$rec[0]->findArea();
$area2=$rec[1]->findArea();
$area3=$rec[2]->findArea();
print <<<HERE
$area1 <br>
$area2 <br>
$area3 <br>
HERE;
?>
