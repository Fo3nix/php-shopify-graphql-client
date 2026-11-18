<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an applied discount on a calculated exchange line item.
 */
class ShopifyExchangeLineItemAppliedDiscountInputInputObject extends InputObject
{
    const REQUIRED = ["value"];

    protected $description;
    protected $value;

    /**
     * The description of the discount.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The value of the discount as a fixed amount or a percentage.
     */
    public function setValue(ShopifyExchangeLineItemAppliedDiscountValueInputInputObject $shopifyExchangeLineItemAppliedDiscountValueInputInputObject): static
    {
        $this->value = $shopifyExchangeLineItemAppliedDiscountValueInputInputObject;

        return $this;
    }
}
