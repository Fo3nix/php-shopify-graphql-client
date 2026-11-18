<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a company location market condition.
 */
class ShopifyMarketConditionsCompanyLocationsInputInputObject extends InputObject
{
    protected $companyLocationIds;
    protected $applicationLevel;

    /**
     * A list of company location IDs to include in the market condition.
     */
    public function setCompanyLocationIds(array $companyLocationIds): static
    {
        $this->companyLocationIds = $companyLocationIds;

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
