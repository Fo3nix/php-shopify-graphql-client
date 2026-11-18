<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the PointOfSaleDevicePaymentSession query.
 */
class ShopifyPointOfSaleDevicePaymentSessionSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `closing_time` value.
     */
    const CLOSING_TIME = "CLOSING_TIME";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `opening_time` value.
     */
    const OPENING_TIME = "OPENING_TIME";
}
