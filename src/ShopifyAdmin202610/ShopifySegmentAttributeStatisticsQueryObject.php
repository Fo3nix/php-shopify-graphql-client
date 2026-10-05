<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentAttributeStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentAttributeStatistics";

    public function selectAverage()
    {
        $this->selectField("average");

        return $this;
    }

    public function selectSum()
    {
        $this->selectField("sum");

        return $this;
    }
}
