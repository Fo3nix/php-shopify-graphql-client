<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReverseFulfillmentOrderDisposeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["dispositionInputs"];

    protected $dispositionInputs;

    /**
     * The input parameters required to dispose reverse fulfillment order line items.
     */
    public function setDispositionInputs(array $dispositionInputs): static
    {
        $this->dispositionInputs = $dispositionInputs;

        return $this;
    }
}
