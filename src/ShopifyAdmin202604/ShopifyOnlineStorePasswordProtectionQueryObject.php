<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Storefront password information.
 */
class ShopifyOnlineStorePasswordProtectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStorePasswordProtection";

    /**
     * Whether the storefront password is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
