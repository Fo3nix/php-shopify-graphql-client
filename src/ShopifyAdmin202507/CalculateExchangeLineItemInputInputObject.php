<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CalculateExchangeLineItemInputInputObject extends InputObject
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

    public function setAppliedDiscount(ExchangeLineItemAppliedDiscountInputInputObject $exchangeLineItemAppliedDiscountInputInputObject)
    {
        $this->appliedDiscount = $exchangeLineItemAppliedDiscountInputInputObject;

        return $this;
    }
}
