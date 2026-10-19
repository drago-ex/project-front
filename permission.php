<?php

declare(strict_types=1);

/**
 * Basic access rules of this package for drago-ex/permission.
 * Generated into the project by: php vendor/bin/create-permission --packages
 */
return [
	// Everyone may open the home page.
	[
		'className' => 'PermissionProvider',
		'namespace' => 'App\Presentation\Front\Home',
		'resource' => 'Front:Home',
		'outputDir' => 'app/Presentation/Front/Home',
		'allow' => ['RoleGuest,self::Resource'],
	],
];
