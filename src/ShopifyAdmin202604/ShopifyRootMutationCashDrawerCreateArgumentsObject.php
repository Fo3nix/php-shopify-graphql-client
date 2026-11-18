<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCashDrawerCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId", "name"];

    protected $locationId;
    protected $name;

    /**
     * The location the cash drawer is located in.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The name of the cash drawer.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }
}
