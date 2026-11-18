<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCatalogContextUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["catalogId"];

    protected $catalogId;
    protected $contextsToAdd;
    protected $contextsToRemove;

    /**
     * The ID of the catalog for which to update the context.
     */
    public function setCatalogId($catalogId): static
    {
        $this->catalogId = $catalogId;

        return $this;
    }

    /**
     * The contexts to add to the catalog.
     */
    public function setContextsToAdd(ShopifyCatalogContextInputInputObject $shopifyCatalogContextInputInputObject): static
    {
        $this->contextsToAdd = $shopifyCatalogContextInputInputObject;

        return $this;
    }

    /**
     * The contexts to remove from the catalog.
     */
    public function setContextsToRemove(ShopifyCatalogContextInputInputObject $shopifyCatalogContextInputInputObject): static
    {
        $this->contextsToRemove = $shopifyCatalogContextInputInputObject;

        return $this;
    }
}
