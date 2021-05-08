<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use PHPUnit\Framework\TestCase;

class DDDAttributesTest extends TestCase
{
    public function testAttributes(): void
    {
        // Not really a unit test, more a syntax test...
        $account = new BankAccount();
        $this->assertTrue(true);
    }
}
