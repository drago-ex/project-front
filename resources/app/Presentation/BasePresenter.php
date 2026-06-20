<?php

declare(strict_types=1);

namespace App\Presentation;

use Drago\Localization\TranslatorAdapter;
use Nette\Application\UI\Presenter;


/** @property-read BaseTemplate $template */
abstract class BasePresenter extends Presenter
{
	use TranslatorAdapter;
}
