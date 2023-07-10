<?php
	$host="localhost"
	$port=3000;

	set_time_limit(0);

	$sock=socket_create(AF_INET, SOCK_STREAM,0) or die("Could not create socket");
	$result= socket_bind($sock,$host,$port) or die("could not connect to server");
	$message = "this is server side";
	socket_write($sock,$message,strlen(message)) or die("could not send data to server");
	$result=socket_read($sock,1024) or die("could not send data to server");
	echo "reply from server:".$result;
	socket_close($sock);
?>