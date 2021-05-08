<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

#[Entity]
class BankAccount
{
    private IBAN $iban;
}
