<?php

declare(strict_types=1);

namespace PHPMolecules\DDD\Attribute;

use Attribute;

/**
 * Identifies a {@link Repository}. Repositories simulate a collection of aggregates to which aggregate instances can be
 * added and removed. They usually also expose API to select a subset of aggregates matching certain criteria. Access to
 * projections of an aggregate might be provided as well but also via a dedicated separate abstraction.
 * <p>
 * Implementations use a dedicated persistence mechanism appropriate to the data structure and query requirements at
 * hand. However, they should make sure that no persistence mechanism specific APIs leak into client code.
 *
 * @author Christian Stettler
 * @author Henning Schwentner
 * @author Stephan Pirnbaum
 * @author Martin Schimak
 * @author Oliver Drotbohm
 * @see AggregateRoot
 * @see <a href="https://domainlanguage.com/wp-content/uploads/2016/05/DDD_Reference_2015-03.pdf">Domain-Driven Design
 *      Reference (Evans) - Repositories</a>
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Repository
{
}
