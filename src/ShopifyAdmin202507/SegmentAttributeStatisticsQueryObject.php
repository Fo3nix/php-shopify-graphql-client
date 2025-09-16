<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentAttributeStatisticsQueryObject extends QueryObject
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
