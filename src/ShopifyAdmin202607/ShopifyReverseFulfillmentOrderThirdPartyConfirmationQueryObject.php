<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The third-party confirmation of a reverse fulfillment order.
 */
class ShopifyReverseFulfillmentOrderThirdPartyConfirmationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderThirdPartyConfirmation";

    /**
     * The status of the reverse fulfillment order third-party confirmation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
