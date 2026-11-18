<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The international duties relevant to a fulfillment order.
 */
class ShopifyFulfillmentOrderInternationalDutiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderInternationalDuties";

    /**
     * The method of duties payment. Example values: `DDP`, `DAP`.
     */
    public function selectIncoterm(): static
    {
        $this->selectField("incoterm");

        return $this;
    }
}
