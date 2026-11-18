<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The Input of the marketing activity.
     */
    public function setInput(ShopifyMarketingActivityUpdateInputInputObject $shopifyMarketingActivityUpdateInputInputObject): static
    {
        $this->input = $shopifyMarketingActivityUpdateInputInputObject;

        return $this;
    }
}
