# Drago Project Front

The website module of Drago Project: `BasePresenter` with the ACL check, the front router with the languages
`cs`/`en`, a plain layout, the home page and the `front.js`/`front.scss` entry point. It is installed with
[Drago Project](https://github.com/drago-ex/project).

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

[Project Tools](https://github.com/drago-ex/project-tools) copies the files of the package into the project,
where you adapt them.

## Usage

The route `[<lang=cs cs|en>/]<presenter>/<action>` is added by `Front/9.conf.neon`, after the routes of the other
packages. Presenters of the website extend `App\Presentation\BasePresenter`.

For the website design with a navbar, the user menu and the blog on the home page, add
[Front UI](https://github.com/drago-ex/project-front-ui).

## Permissions

`BasePresenter` checks every presenter by the `Authorization` trait of
[drago-ex/permission](https://github.com/drago-ex/permission): its page and signals, with the presenter name as the
resource. A new presenter needs its resource, and a guest rule when it is public, in an `acl.neon` next to it;
otherwise it is denied. The rules of the home page are in `Front/Home/acl.neon` (resource `Front:Home`, everyone).

The same file describes the privileges (`permissionLabels`) for the permissions page of [Project Permission](https://github.com/drago-ex/project-permission).
