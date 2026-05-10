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

## Generate permission provider
If you use project ACL (drago-ex/permission), you can generate a module permission class:
```bash
php vendor/bin/create-front-permission
```
