# Agent Guide

`drago-ex/project-front` (type drago-tools-resource, PHP >=8.3 <9): the plain website module that
drago-ex/project requires. The workspace rules are in `../AGENTS.md`; dependencies are in `composer.json`.

## Layout
- `resources/app/Presentation/BasePresenter.php` + `BaseTemplate.php`: the base of every presenter of every package.
- `resources/app/Presentation/Front`: `FrontRouter` (`9.conf.neon`, the last router, so the packages add their
  routes before it with lower numbers), `@layout.latte`, `Home/` (`acl.neon` with `Front:Home` for everyone).
- `resources/assets/front.js` + `front.scss`: the entry point.
- `tests/Presentation/Front/FrontRouter.phpt`.

## How it works
- `BasePresenter` uses `TranslatorAdapter` and the `Authorization` trait of drago-ex/permission: every presenter is
  checked by the ACL (page = action, signals by `Privilege::forSignal()`), so each needs a resource in an
  `acl.neon`. `Error4xxPresenter` of the project extends Nette's `Presenter` and is not checked.
- project-front-ui replaces `BasePresenter`, `BaseTemplate`, the layout, `Home` and `front.*` with the website
  design (`replace-once`); keep this package plain.
- The layout prints `$description` as meta description (used by project-static-page).

## Commands
```bash
composer phpstan
composer tester
```
