<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the redeem code to attach to a discount.
 */
class ShopifyDiscountRedeemCodeInputInputObject extends InputObject
{
    const REQUIRED = ["code"];

    protected $code;

    /**
     * The code that a customer can use at checkout to receive the associated discount.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }
}
