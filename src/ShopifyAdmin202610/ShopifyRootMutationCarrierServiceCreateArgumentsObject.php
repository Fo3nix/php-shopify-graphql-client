<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCarrierServiceCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields used to create a carrier service.
     */
    public function setInput(ShopifyDeliveryCarrierServiceCreateInputInputObject $shopifyDeliveryCarrierServiceCreateInputInputObject): static
    {
        $this->input = $shopifyDeliveryCarrierServiceCreateInputInputObject;

        return $this;
    }
}
