<?php

declare(strict_types=1);

namespace App\Presentation;

use Drago\Application\UI\ExtraTemplate;


abstract class BaseTemplate extends ExtraTemplate
{
	public string $lang;
}
