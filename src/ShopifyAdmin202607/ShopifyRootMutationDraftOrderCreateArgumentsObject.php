<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The fields used to create the draft order.
     */
    public function setInput(ShopifyDraftOrderInputInputObject $shopifyDraftOrderInputInputObject): static
    {
        $this->input = $shopifyDraftOrderInputInputObject;

        return $this;
    }
}
