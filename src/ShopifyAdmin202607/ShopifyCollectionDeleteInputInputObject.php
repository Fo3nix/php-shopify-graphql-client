<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the collection to delete.
 */
class ShopifyCollectionDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the collection to be deleted.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
