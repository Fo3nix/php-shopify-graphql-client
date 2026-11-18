<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a rate definition.
 */
class ShopifyDeliveryRateDefinitionInputInputObject extends InputObject
{
    const REQUIRED = ["price"];

    protected $id;
    protected $price;

    /**
     * A globally-unique ID of the rate definition.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The price of the rate definition.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }
}
