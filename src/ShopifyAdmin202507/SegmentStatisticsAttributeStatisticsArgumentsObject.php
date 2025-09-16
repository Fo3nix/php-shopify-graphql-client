<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class SegmentStatisticsAttributeStatisticsArgumentsObject extends ArgumentsObject
{
    protected $attributeName;

    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }
}
