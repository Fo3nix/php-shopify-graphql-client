<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityCreateExternalArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input field for creating an external marketing activity.
     */
    public function setInput(ShopifyMarketingActivityCreateExternalInputInputObject $shopifyMarketingActivityCreateExternalInputInputObject): static
    {
        $this->input = $shopifyMarketingActivityCreateExternalInputInputObject;

        return $this;
    }
}
