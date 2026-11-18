<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductBundleCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Input for creating a product bundle or componentized product.
     */
    public function setInput(ShopifyProductBundleCreateInputInputObject $shopifyProductBundleCreateInputInputObject): static
    {
        $this->input = $shopifyProductBundleCreateInputInputObject;

        return $this;
    }
}
