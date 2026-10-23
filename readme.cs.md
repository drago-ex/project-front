# Drago Project frontend module

[English](readme.md) | Čeština

Připravený modul pro veřejnou část webu v Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-front.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-front)
[![Tests](https://github.com/drago-ex/project-front/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Základní balíčky Drago Project

## Instalace

```bash
composer require drago-ex/project-front
```

## Soubory projektu

Kopírování souborů obstarává automaticky [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
který musí být v projektu nainstalovaný. Bez něj zkopírujte soubory ručně podle sekce `copy`
v `composer.json` tohoto balíčku. Pro přeskočení balíčku nastavte `"skip": true` v
`extra.drago-tools.packages.<package-name>` v kořenovém `composer.json`.

## Provider oprávnění

S [drago-ex/permission](https://github.com/drago-ex/permission) se pravidla přístupu z [`permission.php`](permission.php)
vygenerují do projektu příkazem:

```bash
php vendor/bin/create-permission --packages
```
