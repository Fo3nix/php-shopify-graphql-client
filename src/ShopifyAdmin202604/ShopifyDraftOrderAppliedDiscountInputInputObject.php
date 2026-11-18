<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for applying an order-level discount to a draft order.
 */
class ShopifyDraftOrderAppliedDiscountInputInputObject extends InputObject
{
    const REQUIRED = ["value", "valueType"];

    protected $amountWithCurrency;
    protected $description;
    protected $title;
    protected $value;
    protected $valueType;

    /**
     * The applied amount of the discount in the specified currency.
     */
    public function setAmountWithCurrency(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amountWithCurrency = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Reason for the discount.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Title of the discount.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The value of the discount.
     * If the type of the discount is fixed amount, then this is a fixed amount in your shop currency.
     * If the type is percentage, then this is the percentage.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The type of discount.
     */
    public function setValueType($shopifyDraftOrderAppliedDiscountType): static
    {
        $this->valueType = new RawObject($shopifyDraftOrderAppliedDiscountType);

        return $this;
    }
}
