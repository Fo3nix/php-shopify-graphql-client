<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderMergeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentOrderMergeInputs"];

    protected $fulfillmentOrderMergeInputs;

    /**
     * One or more sets of fulfillment orders to be merged.
     */
    public function setFulfillmentOrderMergeInputs(array $fulfillmentOrderMergeInputs): static
    {
        $this->fulfillmentOrderMergeInputs = $fulfillmentOrderMergeInputs;

        return $this;
    }
}
