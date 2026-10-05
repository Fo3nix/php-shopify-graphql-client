<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

class ShopifyCalculateExchangeLineItemInputInputObject extends InputObject
{
    protected $variantId;
    protected $quantity;
    protected $appliedDiscount;

    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setAppliedDiscount(ShopifyExchangeLineItemAppliedDiscountInputInputObject $shopifyExchangeLineItemAppliedDiscountInputInputObject)
    {
        $this->appliedDiscount = $shopifyExchangeLineItemAppliedDiscountInputInputObject;

        return $this;
    }
}
