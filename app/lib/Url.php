<?php 

/**
* Class Untuk Bermain2 dengan Url 
*/
class URL
{
	
	public static function Base()
	{
		return 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '').'://'.$_SERVER['HTTP_HOST'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/');
	}
	
	public static function Redirect($target)
	{
		echo "<script>window.location='". URL::Base() .$target."'</script>";
	}

	public static function Link($to)
	{
		return URL::Base().$to;
	}

	public static function Current()
	{
		return $_SERVER['REQUEST_URI'];
	}
}