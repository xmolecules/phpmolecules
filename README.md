# phpMolecules – Architectural Abstractions for PHP

A set of libraries to help developers work with architectural concepts in PHP.
Member of the xMolecules family.
Goals:

* Express that a piece of code (namespace, class, method...) implements an architectural concept.
* Make it easy for the human reader to determine what kind of architectural concepts a given piece of code is.
* Allow tool integration (to do interesting stuff like generating persistence or static architecture analysis to check for validations of the architectural rules.)

## Expressing DDD Concepts

Example:

```php
use PHPMolecules\DDD\Attribute\{Entity, ValueObject, Repository};

#[Entity]
class BankAccount { /* ... */ }

#[ValueObject]
class Currency { /* ... */ }

#[Repository]
class Accounts { /* ... */ }
```

When we take Ubiquitous Language serious, we want names (for classes, methods, etc.) that only contain words from the domain language.
That means the titles of the building blocks should not be part of the names.
So in a banking domain we don't want `BankAccountEntity`, `CurrencyVO` or even `AccountRepository` as types.
Instead, we want `BankAccount`, `Currency` and `Accounts` – like in the example above.

Still, we want to express that a given class (or other architectural element) is a special building block; i.e. uses a design pattern.
PHPMolecules provide a set of standard annotations for the building blocks known from DDD.

## Expressing Architecture

phpMolecules provides annotations to mark a package as a layer (or ring):

TODO: port documentation from jMolecules.

## Installation

To use phpMolecules in your project just install it with Composer from Packagist:

```fish
composer require xmolecules/phpmolecules
```

## Development Scripts

This project includes several Composer scripts to assist with development, testing, and code quality checks. You can run these scripts using `composer run <script-name>`.

- `unit`: Runs PHPUnit tests with colored output.
- `stan`: Performs static analysis using PHPStan.
- `cs-check`: Checks code style compliance using PHP CodeSniffer, including version display and caching for performance.
- `cs-fix`: Automatically fixes code style issues using PHP CodeSniffer.
- `composer-audit`: Runs Composer audit to check for security vulnerabilities in dependencies.
- `rector`: Runs Rector in dry-run mode to check for potential code improvements.
- `rector-fix`: Runs Rector to apply code improvements.
- `fix`: Runs both code style fixes and Rector improvements.
- `test`: Runs a comprehensive test suite including unit tests, code style checks, static analysis, Rector checks, and security audit.

Example usage:

```fish
composer run test
composer run fix
```

## Release Instructions

Create a new Git version tag and push it:

```fish
git tag --sign vX.Y.Z
git push --tags
```
