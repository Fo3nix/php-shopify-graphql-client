<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the default expiration configuration of gift cards on the shop.
 */
class ShopifyGiftCardExpirationConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardExpirationConfiguration";

    /**
     * The unit for the default gift card expiration.
     */
    public function selectExpirationUnit(): static
    {
        $this->selectField("expirationUnit");

        return $this;
    }

    /**
     * The value for the default gift card expiration.
     */
    public function selectExpirationValue(): static
    {
        $this->selectField("expirationValue");

        return $this;
    }
}
