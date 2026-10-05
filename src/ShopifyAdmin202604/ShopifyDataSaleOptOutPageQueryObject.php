<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDataSaleOptOutPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DataSaleOptOutPage";

    public function selectAutoManaged()
    {
        $this->selectField("autoManaged");

        return $this;
    }
}
