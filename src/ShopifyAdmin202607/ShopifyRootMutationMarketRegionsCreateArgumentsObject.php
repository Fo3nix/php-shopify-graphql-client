<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketRegionsCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["marketId", "regions"];

    protected $marketId;
    protected $regions;

    /**
     * The ID of the market to add the regions to.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }

    /**
     * The regions to be created.
     */
    public function setRegions(array $regions): static
    {
        $this->regions = $regions;

        return $this;
    }
}
