<?php

declare(strict_types=1);

namespace DragoFrontPlugin;


final class Installer
{
	public static function install(): void
	{
		$root = self::getProjectRoot();
		$projectRoot = $root . '/app';
		$files = [
			'Core/Widget/@lang.switch.latte',
			'UI/Front/Home/default.latte',
			'UI/Front/Home/HomePresenter.php',
			'UI/Front/Home/HomeTemplate.php',
			'UI/Front/@layout.latte',
			'UI/Front/conf.neon',
			'UI/Front/Router.php',
			'UI/BasePresenter.php',
			'UI/BaseTemplate.php',
		];

		foreach ($files as $file) {
			self::copy(__DIR__ . '/../resources/app/' . $file, $projectRoot . '/' . $file);
		}

		echo "[project-front] Front module support installed\n";
	}


	private static function getProjectRoot(): string
	{
		// vendor/drago-ex/project-front/src → ROOT
		return dirname(__DIR__, 4);
	}


	private static function copy(string $from, string $to): void
	{
		if (file_exists($to)) {
			echo "[project-front] Skipped (exists): $to\n";
			return;
		}

		@mkdir(dirname($to), 0o777, true);
		copy($from, $to);
	}
}
