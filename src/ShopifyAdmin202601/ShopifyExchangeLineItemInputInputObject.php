<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for new line items to be added to the order as part of an exchange.
 */
class ShopifyExchangeLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["quantity"];

    protected $giftCardCodes;
    protected $variantId;
    protected $quantity;
    protected $appliedDiscount;

    /**
     * The gift card codes associated with the physical gift cards.
     */
    public function setGiftCardCodes(array $giftCardCodes): static
    {
        $this->giftCardCodes = $giftCardCodes;

        return $this;
    }

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
