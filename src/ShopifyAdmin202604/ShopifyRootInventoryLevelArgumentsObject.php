<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
