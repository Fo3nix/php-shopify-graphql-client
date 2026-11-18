<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for merging fulfillment orders.
 */
class ShopifyFulfillmentOrderMergeInputInputObject extends InputObject
{
    const REQUIRED = ["mergeIntents"];

    protected $mergeIntents;

    /**
     * The details of the fulfillment orders to be merged.
     */
    public function setMergeIntents(array $mergeIntents): static
    {
        $this->mergeIntents = $mergeIntents;

        return $this;
    }
}
