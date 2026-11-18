<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A fulfillment order line item warning. For example, a warning about why a fulfillment request was rejected.
 */
class ShopifyFulfillmentOrderLineItemWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemWarning";

    /**
     * The description of warning.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The title of warning.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
