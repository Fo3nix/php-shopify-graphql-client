<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnInput"];

    protected $returnInput;

    /**
     * Specifies the input fields for a return.
     */
    public function setReturnInput(ShopifyReturnInputInputObject $shopifyReturnInputInputObject): static
    {
        $this->returnInput = $shopifyReturnInputInputObject;

        return $this;
    }
}
