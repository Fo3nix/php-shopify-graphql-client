<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryCustomizationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["deliveryCustomization"];

    protected $deliveryCustomization;

    /**
     * The input data used to create the delivery customization.
     */
    public function setDeliveryCustomization(ShopifyDeliveryCustomizationInputInputObject $shopifyDeliveryCustomizationInputInputObject): static
    {
        $this->deliveryCustomization = $shopifyDeliveryCustomizationInputInputObject;

        return $this;
    }
}
