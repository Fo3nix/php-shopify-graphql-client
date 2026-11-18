<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppDiscountTypeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["functionId"];

    protected $functionId;

    /**
     * The ID for the function providing the app discount type.
     */
    public function setFunctionId($functionId): static
    {
        $this->functionId = $functionId;

        return $this;
    }
}
