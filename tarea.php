<?php


$arraynum=[3,4,5,7,9,78,7,6,8];

for($i=0;$i<count($arraynum);$i++){
	for($j=$i+1;$j<count($arraynum);$j++){
		if($arraynum[$j]<$arraynum[$i])
	{
		$tmp=$arraynum[$i];
		$arraynum[$i]=$arraynum[$j];
		$arraynum[$j]=$tmp;
	}
	 
	
	}
	
	
}
for($i=0;$i<count($arraynum);$i++){
	echo $arraynum[$i]."<br>";
}






?>