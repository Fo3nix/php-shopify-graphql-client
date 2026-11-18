<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a cash drawer.
 */
class ShopifyCashDrawerUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["name"];

    protected $name;

    /**
     * The new name for the cash drawer.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }
}
