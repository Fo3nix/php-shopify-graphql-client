<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
