<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The Input of marketing activity create.
     */
    public function setInput(ShopifyMarketingActivityCreateInputInputObject $shopifyMarketingActivityCreateInputInputObject): static
    {
        $this->input = $shopifyMarketingActivityCreateInputInputObject;

        return $this;
    }
}
