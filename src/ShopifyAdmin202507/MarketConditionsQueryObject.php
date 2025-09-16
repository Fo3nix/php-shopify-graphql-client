<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketConditions";

    public function selectCompanyLocationsCondition(MarketConditionsCompanyLocationsConditionArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationsConditionQueryObject("companyLocationsCondition");
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

    public function selectLocationsCondition(MarketConditionsLocationsConditionArgumentsObject $argsObject = null)
    {
        $object = new LocationsConditionQueryObject("locationsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegionsCondition(MarketConditionsRegionsConditionArgumentsObject $argsObject = null)
    {
        $object = new RegionsConditionQueryObject("regionsCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
