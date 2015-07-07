<?php

//获取的就是SOL_TCP的值，也可以直接指定
$protocol = getprotobyname("tcp");
$socket = socket_create(AF_INET, SOCK_STREAM, $protocol);
if(! socket_connect($socket, "192.168.1.104",8000) ){
	$errorCode = socket_last_error();		// get error code 
	$errorStr = socket_strerror($errorCode);	// get error str describe
	die($errorStr);
}


set_time_limit(0);

while(1){
	socket_write($socket, "123");
	sleep(3);
}

// while(($buffer = socket_read($socket, 1024))){
	
// 		echo $buffer;
	
// }

//socket_bind($socket, "127.0.0.1",8000);
//socket_listen($socket);

// while(($client=socket_accept($socket))){
	
// }
