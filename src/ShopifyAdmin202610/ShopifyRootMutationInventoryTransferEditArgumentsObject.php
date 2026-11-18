<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferEditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the inventory Transfer to be edited.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields to edit the inventory transfer.
     */
    public function setInput(ShopifyInventoryTransferEditInputInputObject $shopifyInventoryTransferEditInputInputObject): static
    {
        $this->input = $shopifyInventoryTransferEditInputInputObject;

        return $this;
    }
}
