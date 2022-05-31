<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use ReflectionClass;
use PHPUnit\Framework\TestCase;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
#[ValueObject]
class IBAN
{
}

#[Entity]
class BankAccount
{
    #[Identity]
    private IBAN $iban; /* @phpstan-ignore-line */
}

class DDDAttributesTest extends TestCase
{
    public function testValueObjectAttribute(): void
    {
        $reflector = new ReflectionClass(IBAN::class);
        $attributes = $reflector->getAttributes();
        $this->assertCount(1, $attributes);
        $this->assertEquals("PHPMolecules\DDD\Attribute\ValueObject", $attributes[0]->getName());
    }

    public function testEntityAttributes(): void
    {
        $reflector = new ReflectionClass(BankAccount::class);
        $attributes = $reflector->getAttributes();
        $this->assertCount(1, $attributes);
        $this->assertEquals("PHPMolecules\DDD\Attribute\Entity", $attributes[0]->getName());
    }
}
// phpcs:enable
