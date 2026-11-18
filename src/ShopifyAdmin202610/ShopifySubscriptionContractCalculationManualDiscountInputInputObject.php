<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a manual (merchant-specified) discount used for contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 * Line-scoped discounts are provided on the line inputs instead. Discount codes are provided
 * through the separate `discountCodes` field.
 */
class ShopifySubscriptionContractCalculationManualDiscountInputInputObject extends InputObject
{
    protected $orderDiscount;
    protected $deliveryDiscount;

    /**
     * Input for an order discount that applies to all lines on the contract.
     */
    public function setOrderDiscount(ShopifySubscriptionContractCalculationOrderDiscountInputInputObject $shopifySubscriptionContractCalculationOrderDiscountInputInputObject): static
    {
        $this->orderDiscount = $shopifySubscriptionContractCalculationOrderDiscountInputInputObject;

        return $this;
    }

    /**
     * Input for a delivery discount that applies to the shipping line.
     */
    public function setDeliveryDiscount(ShopifySubscriptionContractCalculationDeliveryDiscountInputInputObject $shopifySubscriptionContractCalculationDeliveryDiscountInputInputObject): static
    {
        $this->deliveryDiscount = $shopifySubscriptionContractCalculationDeliveryDiscountInputInputObject;

        return $this;
    }
}
