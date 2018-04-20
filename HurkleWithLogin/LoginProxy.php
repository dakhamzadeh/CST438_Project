<?php
class LoginProxy extends ILogin
{
	public function doLogin()
	{ 	
		self::$hookup=UniversalConnect::doConnect();
		$this->tableMaster=ILogin::LOGTABLE;
		$this->sun=self::$hookup->real_escape_string($_POST['username']);
		$this->spw=self::$hookup->real_escape_string($_POST['password']);
		
		$this->sql ="SELECT * FROM $this->tableMaster";
		try
		{
			$result = self::$hookup->query($this->sql);
			while ($row = $result->fetch_assoc()) 
			{
				if($row['un']==$this->sun && $row['pw']==$this->spw)
				{
					$this->passSecurity=true;
					$this->loginOrDie();
				}
			}
			if(!$this->passSecurity)
			{
				$this->loginOrDie();
			}
			
		$result->close();
		}
		catch(Exception $e)
		{
			echo "Here's what went wrong: " . $e->getMessage();
		}
		self::$hookup->close();
	}
	
	protected function loginOrDie()
	{
		if($this->passSecurity)
		{
			$goodLog=new Login();
			$goodLog->doLogin();
		}
		else
		{
			$badLog=new ReLog();
		}
	}
}
?>