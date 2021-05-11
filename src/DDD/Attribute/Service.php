<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use Attribute;

/**
 * Identifies a domain {@link Service}. A service is a significant process or transformation in the domain that is not a
 * natural responsibility of an entity or value object, add an operation to the model as a standalone interface declared
 * as a service. Define a service contract, a set of assertions about interactions with the service. (See assertions.)
 * State these assertions in the ubiquitous language of a specific bounded context. Give the service a name, which also
 * becomes part of the ubiquitous language.
 *
 * @author Christian Stettler
 * @author Henning Schwentner
 * @author Stephan Pirnbaum
 * @author Martin Schimak
 * @author Oliver Drotbohm
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Service
{
}
