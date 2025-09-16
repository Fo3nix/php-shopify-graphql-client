<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopBillingPreferencesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopBillingPreferences";

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }
}
