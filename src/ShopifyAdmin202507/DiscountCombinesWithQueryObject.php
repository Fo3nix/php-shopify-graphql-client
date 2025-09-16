<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCombinesWithQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCombinesWith";

    public function selectOrderDiscounts()
    {
        $this->selectField("orderDiscounts");

        return $this;
    }

    public function selectProductDiscounts()
    {
        $this->selectField("productDiscounts");

        return $this;
    }

    public function selectShippingDiscounts()
    {
        $this->selectField("shippingDiscounts");

        return $this;
    }
}
