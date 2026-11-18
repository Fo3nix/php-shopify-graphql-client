<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationThemeUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the theme to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The attributes of the theme to be updated.
     */
    public function setInput(ShopifyOnlineStoreThemeInputInputObject $shopifyOnlineStoreThemeInputInputObject): static
    {
        $this->input = $shopifyOnlineStoreThemeInputInputObject;

        return $this;
    }
}
