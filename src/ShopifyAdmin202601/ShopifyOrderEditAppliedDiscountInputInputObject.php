<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to add a discount during an order edit.
 */
class ShopifyOrderEditAppliedDiscountInputInputObject extends InputObject
{
    protected $description;
    protected $fixedValue;
    protected $percentValue;

    /**
     * The description of the discount.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The value of the discount as a fixed amount.
     */
    public function setFixedValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->fixedValue = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The value of the discount as a percentage.
     */
    public function setPercentValue($percentValue): static
    {
        $this->percentValue = $percentValue;

        return $this;
    }
}
