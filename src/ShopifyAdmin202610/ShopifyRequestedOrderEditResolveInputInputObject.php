<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for resolving a requested order edit.
 */
class ShopifyRequestedOrderEditResolveInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the requested order edit to resolve.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
