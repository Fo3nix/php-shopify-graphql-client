<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a shipping line.
 */
class ShopifyOrderEditUpdateShippingLineInputInputObject extends InputObject
{
    protected $price;
    protected $title;

    /**
     * The price of the shipping line.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The title of the shipping line.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}
