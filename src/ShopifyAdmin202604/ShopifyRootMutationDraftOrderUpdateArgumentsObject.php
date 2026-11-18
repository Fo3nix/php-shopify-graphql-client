<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * Specifies the draft order to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The draft order properties to update.
     */
    public function setInput(ShopifyDraftOrderInputInputObject $shopifyDraftOrderInputInputObject): static
    {
        $this->input = $shopifyDraftOrderInputInputObject;

        return $this;
    }
}
