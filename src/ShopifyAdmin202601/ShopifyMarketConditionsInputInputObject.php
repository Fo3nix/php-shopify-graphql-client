<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update the market conditions.
 */
class ShopifyMarketConditionsInputInputObject extends InputObject
{
    protected $companyLocationsCondition;
    protected $locationsCondition;
    protected $regionsCondition;

    /**
     * The company locations to include in the market conditions.
     */
    public function setCompanyLocationsCondition(ShopifyMarketConditionsCompanyLocationsInputInputObject $shopifyMarketConditionsCompanyLocationsInputInputObject): static
    {
        $this->companyLocationsCondition = $shopifyMarketConditionsCompanyLocationsInputInputObject;

        return $this;
    }

    /**
     * The locations to include in the market conditions.
     */
    public function setLocationsCondition(ShopifyMarketConditionsLocationsInputInputObject $shopifyMarketConditionsLocationsInputInputObject): static
    {
        $this->locationsCondition = $shopifyMarketConditionsLocationsInputInputObject;

        return $this;
    }

    /**
     * The regions to include in the market conditions.
     */
    public function setRegionsCondition(ShopifyMarketConditionsRegionsInputInputObject $shopifyMarketConditionsRegionsInputInputObject): static
    {
        $this->regionsCondition = $shopifyMarketConditionsRegionsInputInputObject;

        return $this;
    }
}
