<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardExpirationConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardExpirationConfiguration";

    public function selectExpirationUnit()
    {
        $this->selectField("expirationUnit");

        return $this;
    }

    public function selectExpirationValue()
    {
        $this->selectField("expirationValue");

        return $this;
    }
}
