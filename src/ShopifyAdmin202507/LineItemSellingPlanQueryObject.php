<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LineItemSellingPlanQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItemSellingPlan";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSellingPlanId()
    {
        $this->selectField("sellingPlanId");

        return $this;
    }
}
