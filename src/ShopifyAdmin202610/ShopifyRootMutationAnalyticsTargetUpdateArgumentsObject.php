<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAnalyticsTargetUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the analytics target to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for updating an [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     */
    public function setInput(ShopifyAnalyticsTargetUpdateInputInputObject $shopifyAnalyticsTargetUpdateInputInputObject): static
    {
        $this->input = $shopifyAnalyticsTargetUpdateInputInputObject;

        return $this;
    }
}
