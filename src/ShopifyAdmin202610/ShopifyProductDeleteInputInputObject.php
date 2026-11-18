<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the product to delete.
 */
class ShopifyProductDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the product.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
