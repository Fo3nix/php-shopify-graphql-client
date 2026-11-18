<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying an open order to close.
 */
class ShopifyOrderCloseInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the order to close.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
