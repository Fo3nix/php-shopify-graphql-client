<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityUpsertExternalArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input field for creating or updating an external marketing activity.
     */
    public function setInput(ShopifyMarketingActivityUpsertExternalInputInputObject $shopifyMarketingActivityUpsertExternalInputInputObject): static
    {
        $this->input = $shopifyMarketingActivityUpsertExternalInputInputObject;

        return $this;
    }
}
