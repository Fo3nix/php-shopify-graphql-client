<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Reasons the shop is blocked from converting to full multi-location delivery profiles mode.
 */
class ShopifyDeliveryLegacyModeBlockedReasonEnumObject extends EnumObject
{
    /**
     * There are no locations for this store that can fulfill online orders.
     */
    const NO_LOCATIONS_FULFILLING_ONLINE_ORDERS = "NO_LOCATIONS_FULFILLING_ONLINE_ORDERS";
}
