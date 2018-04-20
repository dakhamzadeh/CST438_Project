<?php

interface IConnectInfo
{
	//Enter your MySql connection information here
	//Uses PHP mysqli() method (NOT mysql())
	const DB_HOST ="localhost";
	const DB_USER ="root";
	const DB_NAME = "login";
	const DB_PW ="";
	
	public static function doConnect();
}

?>