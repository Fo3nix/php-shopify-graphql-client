<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootNodesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids"];

    protected $ids;

    /**
     * The IDs of the Nodes to return.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
