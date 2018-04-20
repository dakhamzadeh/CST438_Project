<?php
class Login extends ILogin
{
	public function doLogin()
	{ 
		$this->loginOrDie();
	}
	
	protected function loginOrDie()
	{
	   
		$goSuccess=new SuccessUI();
	}
}
?>