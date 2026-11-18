<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to create a gift card.
     */
    public function setInput(ShopifyGiftCardCreateInputInputObject $shopifyGiftCardCreateInputInputObject): static
    {
        $this->input = $shopifyGiftCardCreateInputInputObject;

        return $this;
    }
}
