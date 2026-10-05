<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyB2BTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "B2BType";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
