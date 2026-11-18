<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCashDrawerUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the cash drawer to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for updating a cash drawer.
     */
    public function setInput(ShopifyCashDrawerUpdateInputInputObject $shopifyCashDrawerUpdateInputInputObject): static
    {
        $this->input = $shopifyCashDrawerUpdateInputInputObject;

        return $this;
    }
}
