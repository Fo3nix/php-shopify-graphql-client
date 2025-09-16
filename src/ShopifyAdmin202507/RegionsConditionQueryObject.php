<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RegionsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RegionsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectRegions(RegionsConditionRegionsArgumentsObject $argsObject = null)
    {
        $object = new MarketRegionConnectionQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
