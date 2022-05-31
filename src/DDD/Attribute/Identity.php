<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use Attribute;

/**
 * Declares a property (or a getter) of a class to constitute the identity of the corresponding class. Primarily used in
 * {@link AggregateRoot} and {@link Entity} types.
 *
 * @author Oliver Drotbohm
 * @author Stephan Pirnbaum
 * @author Henning Schwentner
 * @link https://domainlanguage.com/wp-content/uploads/2016/05/DDD_Reference_2015-03.pdf Domain-Driven Design Reference
 *     (Evans) - Entities
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_METHOD)]
class Identity
{
}
