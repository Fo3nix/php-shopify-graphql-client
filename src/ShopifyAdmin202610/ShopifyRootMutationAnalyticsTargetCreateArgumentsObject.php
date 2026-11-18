<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAnalyticsTargetCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for creating an [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     */
    public function setInput(ShopifyAnalyticsTargetCreateInputInputObject $shopifyAnalyticsTargetCreateInputInputObject): static
    {
        $this->input = $shopifyAnalyticsTargetCreateInputInputObject;

        return $this;
    }
}
