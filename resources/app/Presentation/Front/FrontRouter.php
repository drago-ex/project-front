<?php declare(strict_types=1);

namespace App\Presentation\Front;

use Nette;
use Nette\Application\Routers\RouteList;


final class FrontRouter
{
	use Nette\StaticClass;

	public static function create(): RouteList
	{
		$router = new RouteList;
		$router->withModule('Front')
			->addRoute('[<lang=cs cs|en>/]<presenter>/<action>', 'Home:default');

		return $router;
	}
}
