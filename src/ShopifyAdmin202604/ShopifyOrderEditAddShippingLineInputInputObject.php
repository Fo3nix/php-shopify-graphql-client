<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to add a shipping line.
 */
class ShopifyOrderEditAddShippingLineInputInputObject extends InputObject
{
    const REQUIRED = ["price", "title"];

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
