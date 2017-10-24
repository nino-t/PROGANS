<?php 

/**
* Class Filter
*/
class Filter 
{
	
	public static function XSS($str)
	{
		$result = stripcslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
      return $result;
	}
	
}