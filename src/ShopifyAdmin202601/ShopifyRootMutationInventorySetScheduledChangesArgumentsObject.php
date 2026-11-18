<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventorySetScheduledChangesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for setting up scheduled changes of inventory items.
     */
    public function setInput(ShopifyInventorySetScheduledChangesInputInputObject $shopifyInventorySetScheduledChangesInputInputObject): static
    {
        $this->input = $shopifyInventorySetScheduledChangesInputInputObject;

        return $this;
    }
}
