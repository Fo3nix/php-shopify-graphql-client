<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMenuItemsArgumentsObject extends ArgumentsObject
{
    protected $limit;

    /**
     * The number of menu items to be returned.
     */
    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
