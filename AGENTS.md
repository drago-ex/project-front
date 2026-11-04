# Agent Guide

Use this file as package-specific guidance when working in this repository. Keep changes aligned with the existing public API, project conventions, and supported PHP range.

## Package Overview
- **Package**: `drago-ex/project-front`
- **Type**: drago-tools-resource
- **Purpose**: The package adds a basic frontend module to Drago Project.
- **PHP**: >=8.3 <9
- **Runtime dependencies**: drago-ex/translator (^4.0.1), drago-ex/application (^4.0), drago-ex/permission (^2.0)
- **License**: MIT

## Repository Layout
- `resources/app/Presentation/Front/Home/acl.neon`: the ACL of the package (resources = presenter names, rules only for roles other than the administrator), merged by Nette with `role.acl.neon` of drago-ex/permission (required); a new presenter gets its resource in the `acl.neon` next to it. No bin script or providers.
- `resources/app/Presentation/BasePresenter.php` uses the `Authorization` trait of drago-ex/permission (2026-11-03, step 6 of the ACL-in-neon rework): every presenter of every package is checked by the ACL (page = action, signals by `Privilege::forSignal()`), so each one needs a resource in an `acl.neon`; `Error4xxPresenter` of the project extends Nette's `Presenter` and is not checked. project-preset has its own copy of `BasePresenter` with the same trait.
- `resources/`: application resources contributed to the consuming Drago project.
- `tests/`: automated tests.
- `.github/`: CI workflows; keep their PHP versions and commands consistent with Composer and the package scripts.
- `composer.json`: package metadata, dependency constraints, autoloading, and available Composer scripts.

## Dependencies

Composer constraints describe the package contract. Before changing integration behavior, inspect the source and the actual call sites in this package; do not infer runtime usage solely from dependency declarations.
Development dependencies include nette/tester (^2.5), phpstan/phpstan-nette (^2.0).

## Essential Commands

```bash
composer phpstan                # phpstan analyse
composer tester                 # tester tests -s -C
```

## Tests

Nette Tester tests are in `tests/`; run them with `composer tester`. `tests/bootstrap.php` autoloads `App\` classes from `resources/app`.

## Conventions & Rules

- Preserve backward compatibility unless the task explicitly permits a breaking change. Check callers and public signatures before changing behavior.
- Follow the existing PHP style: strict types, explicit parameter and return types, tabs for indentation, and single-quoted strings where practical. Match nearby code when a convention is unclear.
- Keep package-specific configuration, resources, and migrations in their established directories. Do not edit generated or consuming-project files without confirming they are part of this repository’s intended output.
- Add or update focused tests for behavioral changes when this package has a runnable test setup. Do not invent test commands; use only the scripts and configuration present here.
- Update README examples and Composer metadata when a public API or supported requirement changes.
