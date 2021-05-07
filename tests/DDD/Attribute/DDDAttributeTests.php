<?php
declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use PHPUnit\Framework\TestCase;

#[ValueObject]
class IBAN
{
}

#[Entity]
class BankAccount
{
    private IBAN $iban;
}

class DDDAttributesTest extends TestCase
{
    public function testAttributes(): void
    {
        // Not really a unit test, more a syntax test...
        $this->assertTrue(true);
    }
}
