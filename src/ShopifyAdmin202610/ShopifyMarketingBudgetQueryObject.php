<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingBudgetQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingBudget";

    public function selectBudgetType()
    {
        $this->selectField("budgetType");

        return $this;
    }

    public function selectTotal(ShopifyMarketingBudgetTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
