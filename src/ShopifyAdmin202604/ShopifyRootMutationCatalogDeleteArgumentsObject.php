<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCatalogDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $deleteDependentResources;

    /**
     * The ID of the catalog to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether to also delete the price list and the publication owned by the catalog.
     */
    public function setDeleteDependentResources($deleteDependentResources): static
    {
        $this->deleteDependentResources = $deleteDependentResources;

        return $this;
    }
}
