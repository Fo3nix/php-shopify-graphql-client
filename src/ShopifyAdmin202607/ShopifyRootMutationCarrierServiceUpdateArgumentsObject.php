<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCarrierServiceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields used to update a carrier service.
     */
    public function setInput(ShopifyDeliveryCarrierServiceUpdateInputInputObject $shopifyDeliveryCarrierServiceUpdateInputInputObject): static
    {
        $this->input = $shopifyDeliveryCarrierServiceUpdateInputInputObject;

        return $this;
    }
}
