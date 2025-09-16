<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListAdjustment";

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
