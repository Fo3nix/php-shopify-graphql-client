<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a closed order to open.
 */
class ShopifyOrderOpenInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the order to open.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
