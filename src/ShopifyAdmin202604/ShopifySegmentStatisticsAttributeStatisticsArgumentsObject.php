<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySegmentStatisticsAttributeStatisticsArgumentsObject extends ArgumentsObject
{
    protected $attributeName;

    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }
}
