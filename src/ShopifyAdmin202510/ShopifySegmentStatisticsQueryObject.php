<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentStatistics";

    public function selectAttributeStatistics(ShopifySegmentStatisticsAttributeStatisticsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentAttributeStatisticsQueryObject("attributeStatistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
