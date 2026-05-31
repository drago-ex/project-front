# Drago Project frontend module

Preconfigured basic frontend module for the basic Drago Project.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/project-front/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-front.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-front)
[![Coding Style](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml)

## Requirements
- PHP >= 8.3
- Nette Framework
- Drago Project core packages

## Installation
```bash
composer require drago-ex/project-front
```

## Project files
File copying is handled automatically by [drago-ex/project-installer](https://github.com/drago-ex/project-installer),
which must be installed in your project. Without it, copy the files manually according to the `copy` section
in this package's `composer.json`. To skip this package, set `"skip": true` under
`extra.drago-project.packages.<package-name>` in your root `composer.json`.

## Generate permission provider
If you use project ACL (drago-ex/permission), you can generate a module permission class:
```bash
php vendor/bin/create-front-permission
```
