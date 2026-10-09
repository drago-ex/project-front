<?php

declare(strict_types=1);

namespace App\Presentation;

use Drago\Application\UI\ExtraTemplate;
use Nette\Application\Attributes\Persistent;


abstract class BaseTemplate extends ExtraTemplate
{
	#[Persistent]
	public string $lang;
}
