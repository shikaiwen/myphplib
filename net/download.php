<?php
$fileArr = ["dig.html","kernel_enter.html","kmod.htm","lecture1.pdf","lecture2.pdf","lecture3.pdf",
		"lecture4.pdf","lecture5.pdf","lecture6.pdf","lecture7.pdf","lecture8.pdf","logic.html",
		"mkkernel.htm","mkmod.htm","openfree.html","osmodule1.htm","osmodule2.htm","osmodule3.htm",
		"philosophy.html","road.html","ulk_preface.pdf"
];

for($i=0;$i<count($fileArr);$i++){
	$curl = curl_init();
	$prefix = "http://www.kerneltravel.net/chenlj/";
	curl_setopt($curl,CURLOPT_URL,$prefix . $fileArr[$i] );
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	$data = curl_exec($curl);
	
	$filepath = "G:/OperatingSystem/chenli/".$i.$fileArr[$i] ; 
	file_put_contents( $filepath , $data );
}
?>
