<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Whether the shop is blocked from converting to full multi-location delivery profiles mode. If the shop is blocked, then the blocking reasons are also returned.
 */
class ShopifyDeliveryLegacyModeBlockedQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLegacyModeBlocked";

    /**
     * Whether the shop can convert to full multi-location delivery profiles mode.
     */
    public function selectBlocked(): static
    {
        $this->selectField("blocked");

        return $this;
    }

    /**
     * The reasons why the shop is blocked from converting to full multi-location delivery profiles mode.
     */
    public function selectReasons(): static
    {
        $this->selectField("reasons");

        return $this;
    }
}
