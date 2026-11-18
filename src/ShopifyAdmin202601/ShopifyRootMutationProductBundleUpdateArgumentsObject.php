<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductBundleUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Input for updating a product bundle or componentized product.
     */
    public function setInput(ShopifyProductBundleUpdateInputInputObject $shopifyProductBundleUpdateInputInputObject): static
    {
        $this->input = $shopifyProductBundleUpdateInputInputObject;

        return $this;
    }
}
