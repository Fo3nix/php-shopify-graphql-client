<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a region market condition.
 */
class ShopifyMarketConditionsRegionsInputInputObject extends InputObject
{
    protected $regionIds;
    protected $regions;
    protected $applicationLevel;

    /**
     * A list of market region IDs to include in the market condition.
     */
    public function setRegionIds(array $regionIds): static
    {
        $this->regionIds = $regionIds;

        return $this;
    }

    /**
     * A list of market regions to include in the market condition.
     */
    public function setRegions(array $regions): static
    {
        $this->regions = $regions;

        return $this;
    }

    /**
     * A type of market condition (e.g. ALL) to apply.
     */
    public function setApplicationLevel($shopifyMarketConditionApplicationType): static
    {
        $this->applicationLevel = new RawObject($shopifyMarketConditionApplicationType);

        return $this;
    }
}
