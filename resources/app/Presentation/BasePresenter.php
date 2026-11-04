<?php declare(strict_types=1);

namespace App\Presentation;

use Drago\Localization\TranslatorAdapter;
use Drago\Permission\Authorization;
use Nette\Application\UI\Presenter;


/**
 * Every presenter is checked by the ACL (drago-ex/permission): its page and its signals, with the presenter name
 * as the resource, so each presenter needs its resource in the acl.neon next to it.
 * @property-read BaseTemplate $template
 */
abstract class BasePresenter extends Presenter
{
	use TranslatorAdapter;
	use Authorization;
}
