<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryBrandedPromiseQueryObject extends QueryObject
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
