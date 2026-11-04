# Drago Project frontend module

Připravený modul pro veřejnou část webu v Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-front.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-front)
[![Tests](https://github.com/drago-ex/project-front/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- [Drago Project](https://github.com/drago-ex/project)

## Instalace

```bash
composer require drago-ex/project-front
```

## Soubory kopírované do projektu

Soubory do projektu kopíruje [drago-ex/project-tools](https://github.com/drago-ex/project-tools)
podle nastavení v `extra.drago-tools` v `composer.json` tohoto balíčku.

## Pravidla přístupu

Pravidla přístupu jsou v `app/Presentation/Front/Home/acl.neon`: zdroj `Front:Home` pro všechny.
[drago-ex/permission](https://github.com/drago-ex/permission) je sloučí se svými výchozími rolemi, ve kterých administrátor smí všechno.

`BasePresenter` je kontroluje traitem `Authorization` z drago-ex/permission: stránku a signály každého presenteru,
s názvem presenteru jako zdrojem. Nový presenter proto potřebuje svůj zdroj (a pravidlo pro hosty, pokud je veřejný)
v `acl.neon` vedle sebe; bez něj se zamítne.
