<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryCustomizationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "deliveryCustomization"];

    protected $id;
    protected $deliveryCustomization;

    /**
     * The global ID of the delivery customization.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input data used to update the delivery customization.
     */
    public function setDeliveryCustomization(ShopifyDeliveryCustomizationInputInputObject $shopifyDeliveryCustomizationInputInputObject): static
    {
        $this->deliveryCustomization = $shopifyDeliveryCustomizationInputInputObject;

        return $this;
    }
}
