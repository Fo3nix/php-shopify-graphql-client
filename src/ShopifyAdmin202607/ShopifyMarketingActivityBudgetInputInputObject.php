<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields combining budget amount and its marketing budget type.
 */
class ShopifyMarketingActivityBudgetInputInputObject extends InputObject
{
    protected $budgetType;
    protected $total;

    /**
     * Budget type for marketing activity.
     */
    public function setBudgetType($shopifyMarketingBudgetBudgetType): static
    {
        $this->budgetType = new RawObject($shopifyMarketingBudgetBudgetType);

        return $this;
    }

    /**
     * Amount of budget for the marketing activity.
     */
    public function setTotal(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->total = $shopifyMoneyInputInputObject;

        return $this;
    }
}
