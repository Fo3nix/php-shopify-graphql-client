<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyInventoryLevelQuantitiesArgumentsObject extends ArgumentsObject
{
    protected $names;

    public function setNames(array $names)
    {
        $this->names = $names;

        return $this;
    }
}
