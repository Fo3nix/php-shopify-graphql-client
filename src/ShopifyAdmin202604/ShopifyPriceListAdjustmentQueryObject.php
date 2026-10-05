<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListAdjustmentQueryObject extends QueryObject
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
