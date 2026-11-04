# Drago Project frontend module

Preconfigured frontend module for Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-front.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-front)
[![Tests](https://github.com/drago-ex/project-front/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-front/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- [Drago Project](https://github.com/drago-ex/project)

## Installation

```bash
composer require drago-ex/project-front
```

## Files copied into the project

The files are copied into the project by [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
as set in `extra.drago-tools` of this package's `composer.json`.

## Access rules

The access rules are in `app/Presentation/Front/Home/acl.neon`: the resource `Front:Home` for everyone.
[drago-ex/permission](https://github.com/drago-ex/permission) merges them with its base roles, in which the administrator is allowed everything.

`BasePresenter` checks them by the `Authorization` trait of drago-ex/permission: the page and the signals of every
presenter, with the presenter name as the resource. A new presenter therefore needs its resource (and a guest rule
when it is public) in the `acl.neon` next to it; without it the presenter is denied.
