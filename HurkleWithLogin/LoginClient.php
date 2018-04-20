<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    if ($class_name == 'characterClass' || $class_name == 'boardClass' || $class_name=='gameClass'){
        
    include '/Hurkle/'.$class_name.'.php';
    }
    else
    include $class_name . '.php';
}
class LoginClient
{
    private static $login;
    //client request
    public static function request()
    {
      self::$login=new LoginProxy();
      self::$login->doLogin();
    }
}
LoginClient::request();
?>
