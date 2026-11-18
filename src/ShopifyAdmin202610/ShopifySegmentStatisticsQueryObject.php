<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The statistics of a given segment.
 */
class ShopifySegmentStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentStatistics";

    /**
     * The statistics of a given attribute.
     */
    public function selectAttributeStatistics(ShopifySegmentStatisticsAttributeStatisticsArgumentsObject $argsObject): ShopifySegmentAttributeStatisticsQueryObject
    {
        $object = new ShopifySegmentAttributeStatisticsQueryObject("attributeStatistics");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
