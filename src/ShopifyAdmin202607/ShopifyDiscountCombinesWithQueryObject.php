<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCombinesWithQueryObject extends QueryObject
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

    public function selectProductDiscountsWithTagsOnSameCartLine()
    {
        $this->selectField("productDiscountsWithTagsOnSameCartLine");

        return $this;
    }

    public function selectShippingDiscounts()
    {
        $this->selectField("shippingDiscounts");

        return $this;
    }
}
