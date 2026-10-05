<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditConfiguration";

    public function selectStoreCreditEnabled()
    {
        $this->selectField("storeCreditEnabled");

        return $this;
    }
}
