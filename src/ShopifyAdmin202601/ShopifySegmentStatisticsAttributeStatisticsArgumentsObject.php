<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySegmentStatisticsAttributeStatisticsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["attributeName"];

    protected $attributeName;

    /**
     * The attribute that statistics are retrieved for.
     */
    public function setAttributeName($attributeName): static
    {
        $this->attributeName = $attributeName;

        return $this;
    }
}
