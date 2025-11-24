<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopBillingPreferencesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopBillingPreferences";

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }
}
