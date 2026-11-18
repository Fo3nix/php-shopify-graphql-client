<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCodeDiscountNodeByCodeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["code"];

    protected $code;

    /**
     * The case-insensitive code of the `DiscountCodeNode` to return.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }
}
