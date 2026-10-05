<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRegionsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RegionsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectRegions(ShopifyRegionsConditionRegionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketRegionConnectionQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
