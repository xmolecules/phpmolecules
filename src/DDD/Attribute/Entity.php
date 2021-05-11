<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use Attribute;

/**
 * Identifies an {@link Entity}. Entities represent a thread of continuity and identity, going through a lifecycle,
 * though their attributes may change. Means of identification may come from the outside, or it may be an arbitrary
 * identifier created by and for the system, but it must correspond to the identity distinctions in the model. The model
 * must define what it means to be the same thing.
 *
 * @author Christian Stettler
 * @author Henning Schwentner
 * @author Stephan Pirnbaum
 * @author Martin Schimak
 * @author Oliver Drotbohm
 * @link https://domainlanguage.com/wp-content/uploads/2016/05/DDD_Reference_2015-03.pdf Domain-Driven Design Reference (Evans) - Entities
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Entity
{
}
