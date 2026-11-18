<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the gift card to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields to update the gift card.
     */
    public function setInput(ShopifyGiftCardUpdateInputInputObject $shopifyGiftCardUpdateInputInputObject): static
    {
        $this->input = $shopifyGiftCardUpdateInputInputObject;

        return $this;
    }
}
