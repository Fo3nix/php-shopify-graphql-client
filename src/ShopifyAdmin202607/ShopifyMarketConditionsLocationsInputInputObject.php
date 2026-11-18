<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a location market condition.
 */
class ShopifyMarketConditionsLocationsInputInputObject extends InputObject
{
    protected $locationIds;
    protected $applicationLevel;

    /**
     * A list of location IDs to include in the market condition.
     */
    public function setLocationIds(array $locationIds): static
    {
        $this->locationIds = $locationIds;

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
