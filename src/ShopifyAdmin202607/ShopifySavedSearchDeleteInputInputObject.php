<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to delete a saved search.
 */
class ShopifySavedSearchDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * ID of the saved search to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
