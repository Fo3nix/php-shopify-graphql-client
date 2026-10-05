<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketConditions";

    public function selectCompanyLocationsCondition(ShopifyMarketConditionsCompanyLocationsConditionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationsConditionQueryObject("companyLocationsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConditionTypes()
    {
        $this->selectField("conditionTypes");

        return $this;
    }

    public function selectLocationsCondition(ShopifyMarketConditionsLocationsConditionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationsConditionQueryObject("locationsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegionsCondition(ShopifyMarketConditionsRegionsConditionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRegionsConditionQueryObject("regionsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
