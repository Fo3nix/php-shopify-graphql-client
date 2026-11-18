<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The fields for the draft order.
     */
    public function setInput(ShopifyDraftOrderInputInputObject $shopifyDraftOrderInputInputObject): static
    {
        $this->input = $shopifyDraftOrderInputInputObject;

        return $this;
    }
}
