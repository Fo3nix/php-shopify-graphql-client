<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PointOfSaleDeviceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevice";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
