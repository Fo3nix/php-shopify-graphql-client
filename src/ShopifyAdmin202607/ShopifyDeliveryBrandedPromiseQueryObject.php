<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryBrandedPromiseQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryBrandedPromise";

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
