<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsAssociatedOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAssociatedOrder";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
