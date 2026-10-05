<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlDynamicColumnMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlDynamicColumnMetadata";

    public function selectAggregatedBy()
    {
        $this->selectField("aggregatedBy");

        return $this;
    }

    public function selectComparisonReference()
    {
        $this->selectField("comparisonReference");

        return $this;
    }

    public function selectOriginalColumnName()
    {
        $this->selectField("originalColumnName");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
