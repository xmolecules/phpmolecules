<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use Attribute;

/**
 * Identifies a {@link Factory}. Factories encapsulate the responsibility of creating complex objects in general and
 * Aggregates in particular. Objects returned by the factory methods are guaranteed to be in valid state.
 *
 * @author Christian Stettler
 * @author Henning Schwentner
 * @author Stephan Pirnbaum
 * @author Martin Schimak
 * @author Oliver Drotbohm
 * @see AggregateRoot
 * @see <a href="https://domainlanguage.com/wp-content/uploads/2016/05/DDD_Reference_2015-03.pdf">Domain-Driven Design
 *      Reference (Evans) - Factories</a>
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Factory
{
}
