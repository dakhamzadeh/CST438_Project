<?php
abstract class ILogin
{
	protected abstract function loginOrDie();
	public abstract function doLogin();
	protected static $hookup;
	const LOGTABLE="LOGIN";
	protected $tableMaster;
	protected $sun;
	protected $spw;
	protected $passSecurity=false;
	protected $sql;
}
?>