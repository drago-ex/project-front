# Drago Project frontend module

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

## Soubory kopírované do projektu

Soubory do projektu kopíruje [drago-ex/project-tools](https://github.com/drago-ex/project-tools)
podle nastavení v `extra.drago-tools` v `composer.json` tohoto balíčku.

---

## Volitelné doplňky

Balíček funguje i bez nich. Pokud je projekt potřebuje, nastavte je ručně podle popisu níže.

### Provider oprávnění

S [drago-ex/permission](https://github.com/drago-ex/permission) se pravidla přístupu z [`bin/create-front-permission`](bin/create-front-permission)
vygenerují do projektu příkazem:

```bash
php vendor/bin/drago-commands
```
