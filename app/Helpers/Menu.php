<?php

namespace App\Helpers;
use Illuminate\Http\Request;

/**
 *  Helper class for active menus
 */
class Menu 
{
	public static function activeMenu($uri='')
	{
		$active = '';

		if (Request::is($this->request->segment(1) . '/' . $uri . '/*') || $this->request->is($this->request->segment(1) . '/' . $uri) || $this->request->is($uri))
		{
			$active = 'active';
		}

		return $active;
	}
}