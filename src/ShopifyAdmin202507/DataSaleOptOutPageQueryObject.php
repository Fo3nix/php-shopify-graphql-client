<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DataSaleOptOutPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DataSaleOptOutPage";

    public function selectAutoManaged()
    {
        $this->selectField("autoManaged");

        return $this;
    }
}
