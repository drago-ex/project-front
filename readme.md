# Drago Project frontend module

English | [Čeština](readme.cs.md)

Preconfigured frontend module for Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-front.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-front)
[![Tests](https://github.com/drago-ex/project-front/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Drago Project core packages

## Installation

```bash
composer require drago-ex/project-front
```

## Project files

File copying is handled automatically by [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
which must be installed in your project. Without it, copy the files manually according to the `copy` section
in this package's `composer.json`. To skip this package, set `"skip": true` under
`extra.drago-tools.packages.<package-name>` in your root `composer.json`.

## Permission provider

With [drago-ex/permission](https://github.com/drago-ex/permission), the access rules from [`permission.php`](permission.php)
are generated into the project by:

```bash
php vendor/bin/create-permission --packages
```
