<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the order to mark as paid.
 */
class ShopifyOrderMarkAsPaidInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the order to mark as paid.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
