<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a free shipping discount code to apply to an order.
 */
class ShopifyOrderCreateFreeShippingDiscountCodeAttributesInputInputObject extends InputObject
{
    const REQUIRED = ["code"];

    protected $code;

    /**
     * The discount code that was entered at checkout.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }
}
