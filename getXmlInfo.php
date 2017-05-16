<?php 

$xml_file=simplexml_load_file('info.xml');
echo $xml_file->getname();
echo $xml_file->pers;
foreach ($xml_file->children() as $child){
/*	if($xml_file->children()){
		foreach ($child->children() as $child2) {
			echo $child2;
		}
	}else{*/
		if($xml_file->children())
	echo $child;
	/*
}*/
}
?>