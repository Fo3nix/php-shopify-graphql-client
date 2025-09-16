<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingBudgetQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingBudget";

    public function selectBudgetType()
    {
        $this->selectField("budgetType");

        return $this;
    }

    public function selectTotal(MarketingBudgetTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
