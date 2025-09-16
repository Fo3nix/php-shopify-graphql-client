<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentStatistics";

    public function selectAttributeStatistics(SegmentStatisticsAttributeStatisticsArgumentsObject $argsObject = null)
    {
        $object = new SegmentAttributeStatisticsQueryObject("attributeStatistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
