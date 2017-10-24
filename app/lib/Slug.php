<?php

/**
* Class untuk membuat slug
*/
class Slug
{
	
	public static function Make($str)
	{
		$explode = explode(" ",strtolower($str));
		$slug 	 = implode("-", $explode);
		return $slug;
	}
}