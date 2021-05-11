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
use PHPMolecules\DDD\Attribute;

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
nMolecules provide a set of standard annotations for the building blocks known from DDD.

## Expressing Architecture

phpMolecules provides annotations to mark a package as a layer (or ring):

TODO: port documentation from jMolecules.

## Installation

To use phpMolecules in your project just install it with Composer from Packagist.

TODO:

## Release Instructions

TODO:

Manual steps:

* 
