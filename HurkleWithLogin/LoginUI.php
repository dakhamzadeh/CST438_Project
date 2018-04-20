<?php
class LoginUI
{
    private $logUI;
    public function __construct()
    {
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
$worker=new LoginUI();
?>