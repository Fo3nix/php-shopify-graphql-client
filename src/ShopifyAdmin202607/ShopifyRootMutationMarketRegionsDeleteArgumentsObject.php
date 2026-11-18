<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketRegionsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids"];

    protected $ids;

    /**
     * A list of IDs of the market regions to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
