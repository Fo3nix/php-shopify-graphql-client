<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDeviceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevice";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
