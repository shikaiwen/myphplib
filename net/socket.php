<?php
//参考文章：http://www.cnblogs.com/thinksasa/archive/2013/02/26/2934206.html


//获取的就是SOL_TCP的值，也可以直接指定
$protocol = getprotobyname("tcp");
$socket = socket_create(AF_INET, SOCK_STREAM, $protocol);
if(! socket_connect($socket, "192.168.1.104",8000) ){
	$errorCode = socket_last_error();		// get error code 
	$errorStr = socket_strerror($errorCode);	// get error str describe
	die($errorStr);
}


set_time_limit(0); //  让脚本运行时间没有限制

while(1){
	if(!socket_write($socket, "123")){
		die(socket_strerror(socket_last_error()) );
	}
	
	sleep(3);
}

// while(($buffer = socket_read($socket, 1024))){
	
// 		echo $buffer;
	
// }

//socket_bind($socket, "127.0.0.1",8000);
//socket_listen($socket);

// while(($client=socket_accept($socket))){
	
// }
