<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLineItemSellingPlanQueryObject extends QueryObject
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
