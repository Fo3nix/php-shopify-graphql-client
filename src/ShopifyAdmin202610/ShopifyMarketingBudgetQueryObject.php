<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * This type combines budget amount and its marketing budget type.
 */
class ShopifyMarketingBudgetQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingBudget";

    /**
     * The budget type for a marketing activity.
     */
    public function selectBudgetType(): static
    {
        $this->selectField("budgetType");

        return $this;
    }

    /**
     * The amount of budget for marketing activity.
     */
    public function selectTotal(?ShopifyMarketingBudgetTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
