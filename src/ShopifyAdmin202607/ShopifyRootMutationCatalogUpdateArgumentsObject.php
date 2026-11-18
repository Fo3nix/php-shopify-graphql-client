<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCatalogUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the catalog to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties of the updated catalog.
     */
    public function setInput(ShopifyCatalogUpdateInputInputObject $shopifyCatalogUpdateInputInputObject): static
    {
        $this->input = $shopifyCatalogUpdateInputInputObject;

        return $this;
    }
}
