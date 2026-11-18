<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition checking the visitor's region.
 */
class ShopifyRegionsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RegionsCondition";

    /**
     * The application level for the condition.
     */
    public function selectApplicationLevel(): static
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    /**
     * The regions that comprise the market.
     */
    public function selectRegions(?ShopifyRegionsConditionRegionsArgumentsObject $argsObject = null): ShopifyMarketRegionConnectionQueryObject
    {
        $object = new ShopifyMarketRegionConnectionQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
