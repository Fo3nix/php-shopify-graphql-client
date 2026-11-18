<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The RFM (Recency, Frequency, Monetary) group for a customer.
 */
class ShopifyCustomerRfmGroupEnumObject extends EnumObject
{
    /**
     * Customers with very recent purchases, many orders, and the most spend.
     */
    const CHAMPIONS = "CHAMPIONS";
    /**
     * Customers with recent purchases, many orders, and the most spend.
     */
    const LOYAL = "LOYAL";
    /**
     * Customers with recent purchases, some orders, and moderate spend.
     */
    const ACTIVE = "ACTIVE";
    /**
     * Customers with very recent purchases, few orders, and low spend.
     */
    const NEW = "NEW";
    /**
     * Customers with recent purchases, few orders, and low spend.
     */
    const PROMISING = "PROMISING";
    /**
     * Customers with recent purchases, some orders, and moderate spend.
     */
    const NEEDS_ATTENTION = "NEEDS_ATTENTION";
    /**
     * Customers without recent purchases, fewer orders, and with lower spend.
     */
    const ALMOST_LOST = "ALMOST_LOST";
    /**
     * Customers without recent purchases, but with a very strong history of orders and spend.
     */
    const PREVIOUSLY_LOYAL = "PREVIOUSLY_LOYAL";
    /**
     * Customers without recent purchases, but with a strong history of orders and spend.
     */
    const AT_RISK = "AT_RISK";
    /**
     * Customers without recent orders, with infrequent orders, and with low spend.
     */
    const DORMANT = "DORMANT";
    /**
     * Customers with no orders yet.
     */
    const PROSPECTS = "PROSPECTS";
}
