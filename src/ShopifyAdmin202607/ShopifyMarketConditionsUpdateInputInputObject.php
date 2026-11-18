<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a market condition.
 */
class ShopifyMarketConditionsUpdateInputInputObject extends InputObject
{
    protected $conditionsToAdd;
    protected $conditionsToDelete;

    /**
     * The conditions to update to the market condition.
     */
    public function setConditionsToAdd(ShopifyMarketConditionsInputInputObject $shopifyMarketConditionsInputInputObject): static
    {
        $this->conditionsToAdd = $shopifyMarketConditionsInputInputObject;

        return $this;
    }

    /**
     * The conditions to delete from the market condition.
     */
    public function setConditionsToDelete(ShopifyMarketConditionsInputInputObject $shopifyMarketConditionsInputInputObject): static
    {
        $this->conditionsToDelete = $shopifyMarketConditionsInputInputObject;

        return $this;
    }
}
