<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class InventoryLevelQuantitiesArgumentsObject extends ArgumentsObject
{
    protected $names;

    public function setNames(array $names)
    {
        $this->names = $names;

        return $this;
    }
}
