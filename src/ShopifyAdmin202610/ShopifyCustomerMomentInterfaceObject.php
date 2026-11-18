<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a session preceding an order, often used for building a timeline of events leading to an order.
 */
class ShopifyCustomerMomentInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CustomerMoment";

    /**
     * The date and time when the customer's session occurred.
     */
    public function selectOccurredAt(): static
    {
        $this->selectField("occurredAt");

        return $this;
    }

    public function onCustomerVisit(): ShopifyCustomerVisitQueryObject
    {
        $object = new ShopifyCustomerVisitQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
