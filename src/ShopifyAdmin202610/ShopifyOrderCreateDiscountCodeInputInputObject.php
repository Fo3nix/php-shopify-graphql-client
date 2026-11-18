<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a discount code to apply to an order. Only one type of discount can be applied to an order.
 */
class ShopifyOrderCreateDiscountCodeInputInputObject extends InputObject
{
    protected $itemPercentageDiscountCode;
    protected $itemFixedDiscountCode;
    protected $freeShippingDiscountCode;

    /**
     * A percentage discount code applied to the line items on the order.
     */
    public function setItemPercentageDiscountCode(ShopifyOrderCreatePercentageDiscountCodeAttributesInputInputObject $shopifyOrderCreatePercentageDiscountCodeAttributesInputInputObject): static
    {
        $this->itemPercentageDiscountCode = $shopifyOrderCreatePercentageDiscountCodeAttributesInputInputObject;

        return $this;
    }

    /**
     * A fixed amount discount code applied to the line items on the order.
     */
    public function setItemFixedDiscountCode(ShopifyOrderCreateFixedDiscountCodeAttributesInputInputObject $shopifyOrderCreateFixedDiscountCodeAttributesInputInputObject): static
    {
        $this->itemFixedDiscountCode = $shopifyOrderCreateFixedDiscountCodeAttributesInputInputObject;

        return $this;
    }

    /**
     * A free shipping discount code applied to the shipping on an order.
     */
    public function setFreeShippingDiscountCode(ShopifyOrderCreateFreeShippingDiscountCodeAttributesInputInputObject $shopifyOrderCreateFreeShippingDiscountCodeAttributesInputInputObject): static
    {
        $this->freeShippingDiscountCode = $shopifyOrderCreateFreeShippingDiscountCodeAttributesInputInputObject;

        return $this;
    }
}
