<?php
ini_set("display_errors","1");
ERROR_REPORTING( E_ALL | E_STRICT );
include_once('IConnectInfo.php');
 
class UniversalConnect implements IConnectInfo
{
	private static $server=IConnectInfo::DB_HOST;
	private static $currentDB= IConnectInfo::DB_NAME;
	private static $user= IConnectInfo::DB_USER;
	private static $pass= IConnectInfo::DB_PW;
	private static $hookup;
	
	public static function doConnect()
	{
		self::$hookup=mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
		try
		{	
			self::$hookup;
			//Uncomment following line for develop/debug
			//echo "Successful MySql connection:<br />";
		}
		catch (Exception $e)
		{
			echo "There is a problem: " . $e->getMessage();
			exit();
		}
		return self::$hookup;
	}
}
?>
