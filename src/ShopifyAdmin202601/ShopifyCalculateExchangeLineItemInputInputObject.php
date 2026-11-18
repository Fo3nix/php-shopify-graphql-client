<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for exchange line items on a calculated return.
 */
class ShopifyCalculateExchangeLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["quantity"];

    protected $variantId;
    protected $quantity;
    protected $appliedDiscount;

    /**
     * The ID of the product variant to be added to the order as part of an exchange.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The quantity of the item to be added.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The discount to be applied to the exchange line item.
     */
    public function setAppliedDiscount(ShopifyExchangeLineItemAppliedDiscountInputInputObject $shopifyExchangeLineItemAppliedDiscountInputInputObject): static
    {
        $this->appliedDiscount = $shopifyExchangeLineItemAppliedDiscountInputInputObject;

        return $this;
    }
}
