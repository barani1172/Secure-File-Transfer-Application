<?php
	$host="localhost"
	$port=3000;

	set_time_limit(0);

	$sock=socket_create(AF_INET, SOCK_STREAM,0) or die("Could not create socket");
	$result= socket_bind($sock,$host,$port) or die("could not bind to socket");
	while(true)
	{
		$result=socket_listen($sock,3) or die("could not set up socket listener");
		$spawn=socket_accept($sock) or die("could not accept incoming connection");
		$input=socket_read($spawn,1024) or die("could not read input");
		$output="This is the admin side";
		socket_write($spawn,$output,strlen($output)) or die("could not write output");
	}
	socket_close($spawn);
	socket_close($socket);
?>