<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specify the draft order to delete by its ID.
     */
    public function setInput(ShopifyDraftOrderDeleteInputInputObject $shopifyDraftOrderDeleteInputInputObject): static
    {
        $this->input = $shopifyDraftOrderDeleteInputInputObject;

        return $this;
    }
}
