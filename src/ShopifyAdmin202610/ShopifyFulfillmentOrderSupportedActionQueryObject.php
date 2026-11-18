<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * One of the actions that the fulfillment order supports in its current state.
 */
class ShopifyFulfillmentOrderSupportedActionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSupportedAction";

    /**
     * The action value.
     */
    public function selectAction(): static
    {
        $this->selectField("action");

        return $this;
    }

    /**
     * The external URL to be used to initiate the fulfillment process outside Shopify.
     * Applicable only when the `action` value is `EXTERNAL`.
     */
    public function selectExternalUrl(): static
    {
        $this->selectField("externalUrl");

        return $this;
    }
}
