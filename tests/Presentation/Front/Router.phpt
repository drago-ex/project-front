<?php

/**
 * Test: App\Presentation\Front\Router
 */

declare(strict_types=1);

use App\Presentation\Front\Router;
use Nette\Http\Request;
use Nette\Http\UrlScript;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';


function matchUrl(string $path): ?array
{
	return Router::create()->match(new Request(new UrlScript('http://example.com' . $path, '/')));
}


function buildUrl(array $params): ?string
{
	return Router::create()->constructUrl($params, new UrlScript('http://example.com/', '/'));
}


test('The home page is the default page in Czech', function () {
	Assert::equal(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'cs'], matchUrl('/'));
	Assert::same('http://example.com/', buildUrl(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'cs']));
});


test('The language is an optional prefix', function () {
	Assert::equal(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'en'], matchUrl('/en/'));
	Assert::equal(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'en'], matchUrl('/en/home/default'));
	Assert::same('http://example.com/en/', buildUrl(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'en']));
});


test('Other presenters of the Front module get their own address', function () {
	Assert::equal(['presenter' => 'Front:Contact', 'action' => 'default', 'lang' => 'cs'], matchUrl('/contact/'));
	Assert::same('http://example.com/contact/', buildUrl(['presenter' => 'Front:Contact', 'action' => 'default', 'lang' => 'cs']));
});


test('Presenters of other modules are left to their own routers', function () {
	Assert::null(buildUrl(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'cs']));
});
