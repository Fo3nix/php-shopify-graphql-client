<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryItemUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the inventory item to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields that update an
     * [`inventoryItem`](https://shopify.dev/api/admin-graphql/latest/queries/inventoryitem).
     */
    public function setInput(ShopifyInventoryItemInputInputObject $shopifyInventoryItemInputInputObject): static
    {
        $this->input = $shopifyInventoryItemInputInputObject;

        return $this;
    }
}
