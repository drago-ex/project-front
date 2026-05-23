<?php

declare(strict_types=1);

namespace App\UI;

use Drago\Application\UI\ExtraTemplate;


/** Base template for the application. */
abstract class BaseTemplate extends ExtraTemplate
{
	public string $lang;
}
