<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyInventoryLevelQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["names"];

    protected $names;

    /**
     * The
     * [names](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * of the requested inventory quantities.
     */
    public function setNames(array $names): static
    {
        $this->names = $names;

        return $this;
    }
}
