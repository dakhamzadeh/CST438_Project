<?php
include_once('IUI.php');
class ReLog implements IUI
{
    private $logUI;
    
    public function __construct()
    {
        //Use the Security object to encode table
        $this->logUI=<<<LOGIN
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" type="text/css" href="login.css">
            <meta charset="UTF-8">
            <title>Login</title>
        </head>
        <body>
        <form action="LoginClient.php" method="post">
        <h5>Your password and username did not match.</h5>
        Try again or Register.<p />
        <fieldset class="fset"><legend>Login</legend>
            <input type="text" name="username" size="14">&nbsp; Username<br />
            <input type="password" name="password" size="14">&nbsp;Password &nbsp;
        </fieldset><br />
        <input type="submit" name ="login" value ="Click to Login">
        </form>
        
        </body>
        </html>
LOGIN;
        echo $this->logUI;
    }
}
?>