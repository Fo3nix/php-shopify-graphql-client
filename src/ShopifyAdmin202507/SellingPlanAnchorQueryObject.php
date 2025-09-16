<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanAnchorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanAnchor";

    public function selectCutoffDay()
    {
        $this->selectField("cutoffDay");

        return $this;
    }

    public function selectDay()
    {
        $this->selectField("day");

        return $this;
    }

    public function selectMonth()
    {
        $this->selectField("month");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
